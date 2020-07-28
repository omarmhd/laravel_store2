<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderProduct extends Model
{

  public $table = 'order_product';
  protected $fillable = ['user_id' ,'product_id', 'quantity','time_close','status'];



  // function getDataProductsUser()
  // {

  //   return  DB::select('SELECT
  //     order_product.quantity, order_product.status,order_product.id,products.name,products.image,products.price,users.billing_city,users.billing_address
  //     FROM
  //      order_product
  //     INNER JOIN products on products.id = order_product.product_id
  //     Inner JOIN orders on order_product.order_id = orders.id');
  // }


  function getDataProductsUserForSeller()
  {
    $id = Auth::id();
    return  DB::select("SELECT DISTINCT 
      order_product.quantity,products.user_id, order_product.status,order_product.id,
      products.name,products.image,products.price,
      users.billing_city,users.billing_address,users.email,users.mobile,users.name as username
      FROM
       order_product
      INNER JOIN products on products.id = order_product.product_id  
      INNER JOIN users on users.id =   order_product.user_id
       Where products.user_id = $id");
  }

  function get_Order_and_product_to_oneUser()
  {
    $id = Auth::id();


      return  DB::select("SELECT DISTINCT 
      order_product.time_close,order_product.user_id,order_product.updated_at,order_product.quantity,order_product.product_id, order_product.status,order_product.id,products.name,products.image,products.price,users.billing_city,users.billing_address
      FROM
       order_product
      INNER JOIN products on products.id = order_product.product_id
      Inner JOIN users on order_product.user_id = $id
      Where users.id = $id ");

    return null;
  }

  function get_Order_and_product_to_oneUserAccepted()
  {
    $id = Auth::id();


    if ($id) {

      return  DB::select("SELECT DISTINCT 
      order_product.user_id,order_product.quantity,order_product.product_id, 
      order_product.status,order_product.id,products.name,products.image,
      products.price,users.billing_city,users.billing_address,order_product.updated_at
      FROM
       order_product
      INNER JOIN products on products.id = order_product.product_id
      INNER JOIN users on users.id = order_product.user_id
      where order_product.status = 1 and users.id = $id");
    }

    return null;
  }
  function get_Order_and_product_to_oneUserPending()
  {
    $id = Auth::id();


    if ($id) {

      return  DB::select("SELECT DISTINCT 
      order_product.user_id,order_product.quantity,order_product.product_id,
       order_product.status,order_product.id,products.name,products.image,
       products.price,users.billing_city,users.billing_address,order_product.updated_at,
       order_product.time_close
      FROM
       order_product
      INNER JOIN products on products.id = order_product.product_id
      Inner JOIN users on users.id = order_product.user_id
      where   order_product.status = 0 and users.id = $id");
    }

    return null;
  }

  function get_Order_and_product_to_oneUserRejected()
  {
    $id = Auth::id();


    if ($id) {

      return  DB::select("SELECT DISTINCT 
      order_product.user_id,order_product.quantity,order_product.product_id, 
      order_product.status,order_product.id,products.name,products.image,
      products.price,users.billing_city,users.billing_address,order_product.updated_at,order_product.time_close
      FROM
       order_product
      INNER JOIN products on products.id = order_product.product_id
      Inner JOIN users on users.id = order_product.user_id
      where  order_product.status = 2 and users.id = $id");
    }

    return null;
  }

  function get_Order_Accepted_count()
  {
    $id = Auth::id();
    return  DB::select("SELECT DISTINCT 
         COUNT(order_product.status) as count
      FROM
       order_product
      where order_product.user_id='$id' and order_product.status = 1");
  }
  function get_Order_Pending_count()
  {
    $id = Auth::id();
    return  DB::select("SELECT DISTINCT 
        COUNT(order_product.status) as count
      FROM
       order_product
      where  order_product.user_id='$id' and order_product.status =0 ");
  }
  function get_Order_Rejected_count()
  {
    $id = Auth::id();
    return  DB::select("SELECT DISTINCT 
        COUNT(order_product.status) as count
      FROM
       order_product
      where  order_product.user_id='$id' and order_product.status = 2");
  }
  function getDataOrders()
  {
    $id = Auth::id();
    return  DB::select("SELECT DISTINCT 
    order_product.quantity,users.id,products.user_id as seller_id,products.price
    FROM
     order_product
    INNER JOIN products on products.id = order_product.product_id
    Inner JOIN users on users.id = order_product.user_id
    where  order_product.status = 1 and products.user_id = $id");

  }
  function getPorducts()
  {
    return $this->belongsTo('App\Models\Product','product_id');
  }

}
