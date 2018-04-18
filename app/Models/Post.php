<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'anonymous_comments',
        'content',
        'created_at',
        'updated_at',
        'deleted_at',
        'user_id',
    ];

    use SoftDeletes;

    public $timestamps = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
