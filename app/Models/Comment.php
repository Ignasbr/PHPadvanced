<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
        'content',
        'user_id',
        'post_id',
    ];

    use SoftDeletes;

    public $timestamps = ['created_at', 'updated_at'];
}
