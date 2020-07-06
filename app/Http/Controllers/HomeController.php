<?php

namespace App\Http\Controllers;

use App\Category;
use App\order;
use App\OrderProduct;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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



        $products =Product::all();
        $categories = Category::all();
        $count = count($products);
        $current = 'home';
        return view('home', compact('products', 'count', 'categories','current'));




        }






    public function show($id)
    {
        $product = Product::find($id);
        return view('single-product-details', compact('product'));
    }


    public function category_products($id)
    {
        $categories = Category::all();

        $products = Category::find($id)->product;
        return response()->json($products);
        // dd($products);
        // $count = count($products);
        // return view('home', compact('products', 'count', 'categories'));
    }

    public function show_status_order(){


        if(Auth::id()){
            $current = "orders";   
        $order_product=new OrderProduct ;
       $orders= $order_product->get_Order_and_product_to_oneUser();
         return view('StatusOrders',compact('orders','current')) ;
        }else{

          return back()->with('error','You must log in first to access the page');

        }
        }



    }









