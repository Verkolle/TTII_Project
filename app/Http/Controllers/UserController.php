<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(Request $request) {
        $search = $request->get('search');

        $user = User::where('name','LIKE','%'.$search.'%')->get();

        if(count($user) > 0) {
            return view('index', compact('request'))->withDetails($user);
        }

        else {
            return redirect(url()->previous());
        }
    }
}
