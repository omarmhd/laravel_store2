<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestToMakeSeller extends Model
{
    public $table='request_to_make_sellers';
    protected $fillable=[
        "user_id",
        "identify_number",
        "name",
        "dob",
        "job",
        "description",
        "image"
    ];
}
