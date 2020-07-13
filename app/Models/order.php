<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class order extends Model
{

    protected $fillable = [
        'product_id', 'billing_name', 'billing_email', 'user_id', 'billing_address', 'billing_city', 'billing_postalcode', 'billing_province', 'billing_phone', 'billing_gateway'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }

}
