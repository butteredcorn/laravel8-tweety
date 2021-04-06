<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowController extends Controller
{
    //
    public function store(User $user)
    {
        //have the auth'd user follow the given user
        auth()->user()->toggleFollow($user);
        return back();
    }

}
