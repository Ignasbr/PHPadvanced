<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
protected $fillable = [
    'text',
];
    public $timestamps = ['created_at', 'updated_at'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function scopeRelated(Builder $builder, User $me, User $another)
    {
        $builder->where(function (Builder $builder) use ($me, $another) {
            $builder->where('sender_id', '=', $me->id)
                ->where('receiver_id', '=', $another->id);
        })->orWhere(function (Builder $builder) use ($me, $another) {
            $builder->where('sender_id', '=', $another->id)
                ->where('receiver_id', '=', $me->id);
        });
    }
}
