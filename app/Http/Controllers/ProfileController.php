<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index(User $user) {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user) {
        $this->authorize('update', $user->profile);
        return view('profiles.edit',compact('user'));
    }

    public function update(User $user) {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'bio' => '',
            'profile_pic' => '',
        ]);

        if (request('profile_pic')) {
            $picturePath = request('profile_pic')->store('profile', 'public');

            $profilePic = Image::make(public_path("storage/$picturePath"));
            $profilePic->save();
        }

        auth()->user()->profile->update(array_merge($data, ['profile_pic'=>$picturePath]));

        return redirect("/profile/{$user->id}");
    }
}
