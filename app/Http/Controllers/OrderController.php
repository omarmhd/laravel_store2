<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\order;
use App\Models\OrderProduct;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use DateInterval;
use DateTime;

class OrderController extends Controller
{


    public function __construct()
    {

        // $this->middleware('can:access_to_controll_panel_as_a_seller');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $OrderProduct = new OrderProduct();
        $orders = $OrderProduct->getDataProductsUserForSeller();
        // dd($orders);
        return view('backend.orders.products_order', compact('orders'));
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
        
        if(auth()->user()->billing_city == null || auth()->user()->billing_address == null || auth()->user()->mobile == null){
            session()->flash('status', 'الرجاء استكمال ملفك الشخصي');
            return redirect('/user/profile');
        }
        // request()->validate([

        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     'city' => 'required|string|max:255',
        //     'postalcode' => 'required|numeric',
        //     'province' => 'required|string|max:255',
        //     'phone_number' => 'required|numeric',
        // ]);
        $idUser = Auth::id();
        try {
            $time = new DateTime();
            $time->add(new DateInterval('PT' . 5 . 'M'));

            $stamp = $time->format('Y-m-d H:i');
            $carts = Cart::where('user_id', $idUser)->get();
            foreach ($carts as $cart) {

                OrderProduct::create([
                    'product_id' => $cart->product_id,
                    'user_id' =>  Auth::id(),
                    'quantity' => $cart->quantity,
                    'time_close' => $stamp,
                    // 'time_close'=>

                ]);
                Cart::where('user_id', Auth::id())->delete();
            }

            return redirect()->route('cart.index')->with('success', 'cheack out cart succsee');
        } catch (ModelNotFoundException $exception) {
            return back()->with('error', 'error - not found product');
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
        $user = User::find(Auth::id());
        $products = $user->products;

        if (empty($products->toArray())) {
            return \redirect('/');
        }
        $subtotal = 0;
        foreach ($products as $product) {

            $subtotal += $product->pivot->quantity * $product->price;
        }
        // if(){

        // }
        $subtotal = '$' . $subtotal;
        return view('checkout', compact('subtotal'));
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
    public function update(Request $request, $id, $status)
    {
        $arr = [1, 2];
        if (in_array($status, $arr)) {
            OrderProduct::where('id', $id)->update([
                'status' => $status
            ]);
        }
        //change status  to order  in pivot  table

        return back();
    }
    public function updateQty(Request $request)
    {
        $request->value = (int) $request->value;
        $request->pk = (int) $request->pk;
        $order =  OrderProduct::where(['id'=>$request->pk,'user_id'=>auth()->user()->id])->first();
        $time = new DateTime();
        $time = $time->format('Y-m-d H:i:s');
        $time = strtotime($time);
        $order->time_close = strtotime($order->time_close);
        if($order->time_close <= $time){
            return \response()->json([
                'message' => 'time closed',
            ]);
        }
        if (!$order) {
            return \response()->json([
                'message' => 'order not found',
            ]);
        }
        if ($request->value <= 0) {
            $request->value = 1;
        }
        OrderProduct::where(['id' => $request->pk])->update([
            'quantity' => $request->value ?? 1
        ]);

        return \response()->json([
            'message' => 'success',
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->order_id = (int) $request->order_id;
        $order =  OrderProduct::where(['id'=>$request->order_id,'user_id'=>auth()->user()->id])->first();
        if (!$order) {
            return \response()->json([
                'message' => 'order not found',
            ]);
        }
        OrderProduct::where(['id' => $request->order_id])->delete();

        return \response()->json([
            'message' => 'success',
        ]);
    }
}
