<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
