<?php

namespace App\Http\Controllers\Api;

use App\Events\MessageCreatedEvent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function createMessage(User $receiver, Request $request)
    {
        $params = $request->all();
        $message = Message::create($params);
        $message->sender()->associate(Auth::user());
        $message->receiver()->associate($receiver);
        $message->save();
        event( new MessageCreatedEvent($message));
        return $message->toJson();

    }

    public function listMessages(User $user)
    {
        $me = Auth::user();
        return Message::related($me, $user)->with([
            'sender',
            'receiver',
        ])->orderBy('created_at', 'desc')->get();
    }
}
