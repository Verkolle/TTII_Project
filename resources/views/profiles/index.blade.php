@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">

            <div class="p-3" id="username-display">
                <a href="/profile/{{ $user->id }}/edit">
                    <h1><b>{{ $user->username }}</b></h1>
                </a>
            </div>

            <div class="p-3">
                @foreach($user->achievements as $achievement)
                    <a href="/ach/{{ $achievement->id }}">
                        <h3>{{ $achievement->title }}</h3>
                        <p>{{ $achievement->description }}</p>
                        <p>{{ $achievement->value }}</p>
                    </a>
                @endforeach
            </div>

            <div class="p-3">
                <a href="/ach/create" class="justify">Add new post</a>
            </div>
        </div>
        <div class="col-3">
            <div id="user_picture" class="row pb-3">
                <img src="https://static.zerochan.net/Saber.%28Astolfo%29.full.2773948.jpg" alt="" style="height:300px">
            </div>
            <div id="user_bio" class="row">
                <p>{{ $user->profile->bio }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
