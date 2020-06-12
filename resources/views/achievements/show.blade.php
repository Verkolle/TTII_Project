@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>
            {{ $achievement->title }} <small><i>by</i></small>
            <a href="/profile/{{$achievement->user->id}}">{{ $achievement->user->username }}</a>
        </h1>
        <p>{{ $achievement->description }}</p>
        <p>{{ $achievement->value }}</p>

        <div>
            <a href="/comment/create" class="pb-3"><button class="btn btn-primary">Add comment</button></a>
        </div>

        <div class="pt-6">
            <div>
                <h3>User 1</h3>
                <p>You suck!!! Boooo!!!!</p>
                <p>12.06.2020<p>
            </div>
            <div>
                <h3>User 2</h3>
                <p>No u! Ha, gottem</p>
                <p>12.06.2020<p>
            </div>
            <div>
                <h3>{{ $achievement->user->username }}</h3>
                <p>Guys can you like stfu?!</p>
                <p>12.06.2020<p>
            </div>
        </div>
    </div>
@endsection
