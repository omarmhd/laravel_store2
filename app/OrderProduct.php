<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderProduct extends Model
{

    public $table = 'order_product';
    protected $fillable = ['order_id', 'product_id', 'quantity'];



    function getDataProductsUser()
    {

        return  DB::select('SELECT
      order_product.quantity, order_product.status,order_product.id,products.name,products.image,products.price,orders.billing_email,orders.billing_name,orders.billing_city,orders.billing_phone
      FROM
       order_product
      INNER JOIN products on products.id = order_product.product_id
      Inner JOIN orders on order_product.order_id = orders.id');
    }


    function get_Order_and_product_to_oneUser()
    {
        $id=Auth::id();



    //   return (DB::table('order_product')->select([DB::raw(' orders.user_id,order_product.quantity, order_product.status,order_product.id,products.name,products.image,products.price,orders.billing_email,orders.billing_name,orders.billing_city,orders.billing_phone')])

    //     ->join('products'  , 'products.id' , 'order_product.product_id')
    //     ->join('orders' , 'order_product.order_id' , ' orders.id' )
    //     ->where('orders.user_id' , $id));


        return  DB::select("SELECT
      orders.user_id,order_product.quantity, order_product.status,order_product.id,products.name,products.image,products.price,orders.billing_email,orders.billing_name,orders.billing_city,orders.billing_phone
      FROM
       order_product
      INNER JOIN products on products.id = order_product.product_id
      Inner JOIN orders on order_product.order_id = orders.id
      where  orders.user_id='$id' ");


    }
}
