<?php

namespace App\Http\Controllers;

use App\Achievement;
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

    public function store(Achievement $achievement) {
        $data = request()->validate([
            'content' => 'required',
        ]);
        $poster = User::find(auth()->user()->id);
        $place = $achievement->id;


        $comment = new Comment;
        $comment->achievement_id = $place;
        $comment->writer_id = $poster['id'];
        $comment->writer_username = $poster['username'];
        $comment->content = $data['content'];

        $comment->save();

        return redirect( '/ach/'. $achievement->id );
    }
}
