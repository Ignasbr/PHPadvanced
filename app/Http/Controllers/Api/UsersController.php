<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserRecource;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function me()
    {
        return new UserRecource(Auth::user());
    }

    public function listUsers()
    {
        return User::select(['id', 'name'])->get();
    }
}
