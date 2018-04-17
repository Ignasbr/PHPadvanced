<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'age',
        'description',
        'country',
        'city',
        'street',
        'house',
        'apartament',
        'user_id',
    ];

    public $timestamps = false;
}
