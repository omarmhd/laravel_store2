<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{



    public $table='product_user';
protected $fillable=['product_id','user_id','quantity','created_at'];

}
