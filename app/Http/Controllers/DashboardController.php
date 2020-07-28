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


  public function index()
  {


    if (Gate::allows('admin')) {
      $count_products = count(Product::get());
      $count_users = count(User::get());
      $count_category = count(Category::get());
      $count_messages = count(DB::table('messages_contact_us')->get());
      $products =  Product::get();
      $orders   =  OrderProduct::get();
      $totalBalance=0;
      foreach ($orders as $key => $order) {
        if($order->status == 1){
          
          $totalBalance += $order->getPorducts->price*$order->quantity;
        }
       }
       $count_orders = count($orders->toArray());
      return view('backend.welcome', compact('count_products','totalBalance', 'count_users', 'count_orders', 'count_category', 'count_messages'));
    } else {
      $count_products = count(Product::where('user_id', auth()->user()->id)->get());
      $count_orders = new OrderProduct();
      $count_orders = count($count_orders->getDataProductsUserForSeller());
      $products =  Product::where(['user_id' => auth()->user()->id])->get();
      $orders   = new OrderProduct();
      $orders= $orders->getDataOrders();
      // dd($orders);
      $totalBalance=0;
      foreach ($orders as $key => $order) {
          $totalBalance += $order->price*$order->quantity;
       }
      return view('backend.welcome', compact('count_products','totalBalance', 'count_orders'));
    }
  }

  public function getStatisticForSeller()
  {
    if(auth()->user()->hasRole('admin')){
      return $this->getStatisticForAdmin();
    }
    \request()->validate(
      [
        'reservation' => 'required'
      ]
    );
    $date = explode('/', \request('reservation'));
    $from = trim($date[0]);
    $to = trim($date[1]);
    $products =  Product::where(['user_id' => auth()->user()->id])->whereBetween('created_at', [$from, $to])->get();
    $orders   =  OrderProduct::where(['user_id' => auth()->user()->id])->whereBetween('created_at', [$from, $to])->get();
    $totalBalance=0;
    foreach ($orders as $key => $order) {
     $totalBalance += $order->getPorducts->price*$order->quantity;
     }
     $orders = count($orders->toArray());
     $products = count($products->toArray());
    return redirect('admin/Dashborad')->with(['orders'=>$orders,'products'=> $products,'totalBalance'=>$totalBalance]);

    //  dd($products);
  }

  public function getStatisticForAdmin()
  {
    \request()->validate(
      [
        'reservation' => 'required'
      ]
    );
    $date = explode('/', \request('reservation'));
    $from = trim($date[0]);
    $to = trim($date[1]);
    $users =  User::whereBetween('created_at', [$from, $to])->get();
    $category =  Category::whereBetween('created_at', [$from, $to])->get();
    $messages_contact_us =  DB::table('messages_contact_us')->whereBetween('created_at', [$from, $to])->get();
    
    $products =  Product::whereBetween('created_at', [$from, $to])->get();
    $orders   =  OrderProduct::whereBetween('created_at', [$from, $to])->get();
    $totalBalance=0;
    foreach ($orders as $key => $order) {
     $totalBalance += $order->getPorducts->price*$order->quantity;
     }
     $orders = count($orders->toArray());
     $products = count($products->toArray());
     $users = count($users->toArray());
     $categories = count($category->toArray());
     $messages_contact_us = count($messages_contact_us->toArray());
    return redirect('admin/Dashborad')->with(['messages_contact_us'=>$messages_contact_us,'categories'=>$categories,'users'=>$users,'orders'=>$orders,'products'=> $products,'totalBalance'=>$totalBalance]);

  }
}
