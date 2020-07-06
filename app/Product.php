<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table='products';


    protected $fillable=['name','user_id','price','long_description','category_id','image','details'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function getUser()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function orders()
    {
        return $this->belongsToMany('App\order');

    }

    // public function getPriceAttribute($value)
    // {
    //     // return '$'.$value;
    // }
}
