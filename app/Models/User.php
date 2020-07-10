<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User
 * @package App\Models
 * @version July 10, 2020, 8:11 am UTC
 *
 * @property string $name
 * @property string $email
 * @property integer $mobile
 * @property string $website
 * @property string $description
 * @property string $image
 * @property string $password
 */
class User extends Model
{

    public $table = 'users';
    



    public $fillable = [
        'name',
        'email',
        'mobile',
        'website',
        'description',
        'image',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'mobile' => 'integer',
        'website' => 'string',
        'description' => 'string',
        'image' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string',
        // 'email' => 'required|email|unique:users',
        // 'mobile' => 'required|numeric|unique:users',
        'website' => 'string|nullable',
        'description' => 'string|nullable',
        'image' => 'image|nullable',
        'password' => 'required|string'
    ];
    public function  roles()
    {
     
        return $this->belongsToMany('App\Role')->withPivot('name');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }


    public function orders()
    {
        return $this->hasMany('App\order');
    }


    public function hasRole($role){

        if($this->roles->pluck('name')->contains($role)){
            return true ;
        }
        return  false;

    }

    public function hasRoles($roles){

        if($this->roles->whereIn('name',$roles)->count()>0){
            return true ;
        }
        return  false;

    }
    
}
