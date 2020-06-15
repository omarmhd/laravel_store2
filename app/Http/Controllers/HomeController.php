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
        return view('home', compact('products', 'count', 'categories'));




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
        // dd($products);
        $count = count($products);
        return view('home', compact('products', 'count', 'categories'));
    }

    public function show_status_order(   ){


        if(Auth::id()){
        $order_product=new OrderProduct ;
       $orders= $order_product->get_Order_and_product_to_oneUser();
        if(isset($orders)){
         return view('StatusOrders',compact('orders')) ;
        }else{

          return back()->with('error','You must log in first to access the page');

        }
        }



    }}









