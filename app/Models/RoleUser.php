<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
 public $table='role_user';
 protected $fillable=['role_id','user_id','name','updated_at','created_at'];

}
