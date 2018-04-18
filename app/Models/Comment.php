<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    /**
     * @var array
     */
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

    /**
     * @var array
     */
    public $timestamps = ['created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
