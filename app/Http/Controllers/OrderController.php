<?php

namespace App\Http\Controllers;

use App\Cart;
use App\order;
use App\OrderProduct;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $OrderProduct=new OrderProduct();
     $orders= $OrderProduct->getDataProductsUser();
     
      return view('admin.products.products_order', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate([

             'name'=>'required|string|max:255',
             'address'=>'required|string|max:255',
             'city'=>'required|string|max:255',
             'postalcode'=>'required|numeric',
             'province'=>'required|string|max:255',
             'phone_number'=>'required|numeric',
          ]);
        $idUser=Auth::id();
            try{
                $order=order::create([
                'billing_name'=>$request->name ,
                'billing_email'=>$request->email,
                'user_id'=>$idUser,
                'billing_address'=>$request->address,
                'billing_city'=>$request->city,
                'billing_postalcode'=>$request->postalcode,
                'billing_province'=>$request->province,
                'billing_phone'=> $request->phone,

                ]);
                $orderid=$order->id;
                $carts=Cart::where('user_id',$idUser)->get();
                 foreach($carts as $cart ){

                    OrderProduct::create([
                            'product_id' =>$cart->product_id ,
                            'order_id'=>$orderid,
                            'quantity'=>$cart->quantity,

                    ]);
                    Cart::where('user_id',Auth::id())->delete();


                 }

                return redirect()->route('cart.index')->with('success','cheack out cart succsee') ;
                }
                catch(ModelNotFoundException $exception){
                return back()->with('error','error - not found product') ;

                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        $user = User::find( Auth::id());
        $products= $user->products;

        if(empty($products->toArray())){
            return \redirect('/'); 
        } 
        $subtotal=0;
        foreach ($products as $product ){

            $subtotal +=$product->pivot->quantity*$product->price;
        }
        // if(){
            
        // }
        $subtotal ='$'.$subtotal;
        return view('checkout',compact('subtotal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           //change status  to order  in pivot  table
         OrderProduct::where('id',$id)->update([
        'status'=>'1'


         ]);
             return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
