<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Category
 * @package App\Models
 * @version July 10, 2020, 6:40 am UTC
 *
 * @property string $name
 * @property string $status
 */
class Category extends Model
{

    public $table = 'categories';
    



    public $fillable = [
        'name',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        'status' => 'required|string'
    ];
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }

      public function getStatusAttribute($value)
    {
         return $value == 0?'غير فعال':'فعال';
    }

    public function newProducts()
    {
        return $this->hasMany('App\Models\Product')->orderBy('created_at', 'DESC')->limit(8);
    }
}
