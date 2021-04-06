<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\validation\Rule;

class ProfileController extends Controller
{
    //
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(10)
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $validatedRequest = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['file'],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255']
        ]);

        if (request('avatar')) {
            $validatedRequest['avatar'] = '/storage/' . request('avatar')->store('avatar'); //set validatedRequest avatar field to avatar path
        }

        $user->update($validatedRequest);

        return redirect($user->path());
    }
}
