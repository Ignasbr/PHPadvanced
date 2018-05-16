<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'created_at',
        'updated_at',
        'path',
        'title',
    ];

    public $timestamps = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
