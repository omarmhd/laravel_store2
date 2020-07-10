<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Product
 * @package App\Models
 * @version July 10, 2020, 5:56 am UTC
 *
 * @property integer $category_id
 * @property integer $user_id
 * @property string $name
 * @property string $details
 * @property number $price
 * @property string $long_description
 * @property string $image
 */
class Product extends Model
{

    public $table = 'products';
    



    public $fillable = [
        'category_id',
        'user_id',
        'name',
        'details',
        'price',
        'long_description',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'name' => 'string',
        'details' => 'string',
        'price' => 'double',
        'long_description' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required|numeric',
        'name' => 'required|string',
        'details' => 'string',
        'price' => 'required|numeric',
        'long_description' => 'string',
        'image' => 'required|image'
    ];

    public function getCategory()
    {
        return $this->belongsTo('App\Category','category_id');
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
}
