<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class role
 * @package App\Models
 * @version July 10, 2020, 11:04 am UTC
 *
 * @property string $name
 */
class Role extends Model
{

    public $table = 'roles';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string'
    ];

    public function  users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    
}
