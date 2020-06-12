<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('achievements.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required',
            'description' => '',
            'value' => 'required',
        ]);

        auth()->user()->achievements()->create($data);

        return redirect('/profile/'. auth()->user()->id);
    }

    public function show(\App\Achievement $achievement) {
        return view('achievements.show', compact('achievement'));
    }
}
