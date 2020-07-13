<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product as ModelsProduct;
use App\Models\order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {



    $products = Product::all();
    $categories = Category::all();
    $count = count($products);
    $current = 'home';
    return view('home', compact('products', 'count', 'categories', 'current'));
  }






  public function show($id)
  {
    $product = Product::find($id);
    $comment = $product->comments;

    return view('single-product-details', compact('product', 'comment'));
  }


  public function category_products($id)
  {
    $categories = Category::all();

    $products = Category::find($id)->newProducts;
    // dd()
    return response()->json($products);
    // dd($products);
    // $count = count($products);
    // return view('home', compact('products', 'count', 'categories'));
  }

  public function show_status_order()
  {
    // dd(request('status') ==0);
    if (Auth::id()) {
      $current = "orders";
      $order_product = new OrderProduct;
      if (request('status')) {
        if (request('status') == 1) {
          $orders =  $order_product->get_Order_and_product_to_oneUserAccepted();
        } elseif (request('status') == 2) {
          $orders =  $order_product->get_Order_and_product_to_oneUserPending();
          // dd(request('status'));
        } elseif (request('status') == 3) {

          $orders =  $order_product->get_Order_and_product_to_oneUserRejected();
        } else {
          $orders = $order_product->get_Order_and_product_to_oneUser();
        }
      } else {
        $orders = $order_product->get_Order_and_product_to_oneUser();
      }


      return view('StatusOrders', compact('orders', 'current'));
    } else {

      return back()->with('error', 'You must log in first to access the page');
    }
  }

  public function profile()
  {


    if (Auth::id()) {
      $user = User::find(Auth::id());
      $order_product = new OrderProduct;
      $numberOfOrders['accepted'] = $order_product->get_Order_Accepted_count()[0]->count;
      $numberOfOrders['pending'] =  $order_product->get_Order_Pending_count()[0]->count;
      $numberOfOrders['rejected'] = $order_product->get_Order_Rejected_count()[0]->count;
      return view('user.edit', compact('user', 'numberOfOrders'));
    } else {

      return back()->with('error', 'You must log in first to access the page');
    }
  }


  public function showProducts()
  {
    $products = Product::all();
    $productsCommon = new Product();
    $productsCommon = $productsCommon->getCommonProducts();
    $productsRecently = Product::orderBy('created_at', 'DESC')->limit(6)->get();
    $categories = Category::all();
    $current = 'products';
    return \view('showProducts', compact('current', 'products', 'categories', 'productsRecently', 'productsCommon'));
  }

  public function search()
  {
    // dd(\request()->fullUrl());
    $validator = request()->validate([
      'search' => 'required|string',
    ]);
    $products = Product::where('name', request('search'))
    ->orWhere('name', 'like', '%' . request('search') . '%')->paginate(15);
    $products->withPath(request()->fullUrl());
    $wordSearsh = request('search');
    return view('result_search',compact('products','wordSearsh'));

  }
}
