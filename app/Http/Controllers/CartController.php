<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{


    public  function index(){

        if( Auth::id()){
        $user = User::find( Auth::id());
        $products= $user->products;
        $count=count($products);
        $sum_price=$products->sum('price');;
        $subtotal=0;
        foreach ($products as $product ){

            $subtotal +=$product->pivot->quantity*$product->price;
        }

     return view('cart',compact('products','count','subtotal'));
        }else{

            return  back()->with('error', 'You must log in first');

        }
    }




    public  function store( Request $request ,$id){

        if(Auth::id()){
          Cart::create([
          'product_id'=>$id,
          'user_id'=> Auth::id(),
          'quantity'=>$request->quantity ?:'1'
          ]);
         return  redirect()->route('cart.index')->with('success','A new product has been added to cart ');
        }
        return  back()->with('error', 'You must log in first');



    }




}
