<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{


    public  function index(){
        
        if( Auth::id()){
        $user = User::find( Auth::id());
        
        $products= $user->products;
        
        $count=count($products);
       
        $sum_price=$products->sum('price');
        // dd($products);
        $subtotal=0;
        foreach ($products as $product ){

            $subtotal +=$product->pivot->quantity*$product->price;
        }
        $subtotal ='₪'.$subtotal;
          return view('cart',compact('products','count','subtotal'));
        }else{

            return  back()->with('error', 'You must log in first');

        }
    }




    public  function store( Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            
        ]);

        if(Auth::id()){
          Cart::create([
          'product_id'=>$request->product_id,
          'user_id'=> Auth::id(),
          'quantity'=>1
          ]);
         return  redirect()->route('cart.index')->with('success','A new product has been added to cart ');
        }
        return  back()->with('error', 'You must log in first');



    }


    public function update(Request $request)
    {
        if(Auth::id()){
            Cart::where(['product_id'=>$request->product_id,'user_id'=> Auth::id()])->update([
                'quantity'=>$request->quantity ?? 1
                ]);
        }

        return \response()->json('success');
    }

    public function destroy(Request $request)
    {     
        
        Validator::make($request->all(),[
                'product_id'=>'required',
              ])->validate();
        Cart::where(['product_id'=>$request->product_id,'user_id'=> Auth::id()])->delete();
        return \redirect()->back();
    }

}
