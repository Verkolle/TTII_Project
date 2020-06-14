<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\User;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('achievements.create');
    }

    public function edit(Achievement $achievement, User $user) {
        $this->authorize('view', $achievement);
        return view('achievements.edit',compact('user'));
    }

    public function destroy(Achievement $achievement) {
        $this->authorize('delete', $achievement);
        $unneeded = $achievement;

        $unneeded->delete();

        return redirect('/profile/'.auth()->user()->id);
    }

    public function update(Achievement $achievement, User $user) {
        $this->authorize('update', $achievement);
        $data = request()->validate([
            'value' => 'required',
        ]);



        //dd($achievement, $data);
        //dd($data['value']);

        Achievement::where(['id' => $achievement->id])->update(['value' => $data['value']]);


        return redirect('/profile/'.auth()->user()->id);
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
