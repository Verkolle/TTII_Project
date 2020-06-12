@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">

            <div class="p-3" id="username-display">
                <h1><b>{{ $user->username }}</b></h1>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit" class="text-md-right">#</a>
                @endcan
            </div>

            <div class="p-3">
                @foreach($user->achievements as $achievement)
                    <div class="flex">
                        <a href="/ach/{{ $achievement->id }}">
                            <h3>{{ $achievement->title }}</h3>
                            <p>{{ $achievement->description }}</p>
                            <p>{{ $achievement->value }}</p>
                        </a>
                        <a href="#">#</a>
                    </div>
                @endforeach
            </div>

            <div class="p-3">
                @can('update', $user->profile)
                    <a href="/ach/create" class="justify">Add new post</a>
                @endcan
            </div>
        </div>
        <div class="col-3">
            <div id="user_picture" class="row pb-3">
                <img src="{{ $user->profile->profilePicture()}}" alt="" style="height:300px; max-width:400px">
            </div>
            <div id="user_bio" class="row">
                <p>{{ $user->profile->bio ?? ''}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
