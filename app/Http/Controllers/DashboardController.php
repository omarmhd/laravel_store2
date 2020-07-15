<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{


    public function index(){
      if (Gate::allows('admin')) {
        $count_products=count(Product::get());
        $count_users=count(User::get());
        $count_orders=count(order::get());
        $count_category=count(Category::get());
        $count_messages=count(DB::table('messages_contact_us')->get());
        return view('backend.welcome',compact('count_products','count_users','count_orders','count_category','count_messages'));
    } else {
      $count_products=count(Product::where('user_id',auth()->user()->id)->get());
      $count_orders= new OrderProduct();
      $count_orders=count($count_orders->getDataProductsUserForSeller());
      return view('backend.welcome',compact('count_products','count_orders'));

    }

    


    }
}
