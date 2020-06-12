<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create() {
        return view('comments.create');
    }

    public function store() {
        $data = request()->validate([
            'content' => 'required',
        ]);
        $kelo = User::find(auth()->user()->id);





        Comment::create($data);

        return view( "/ach/{{ $this->achievement_id }}");
    }
}
