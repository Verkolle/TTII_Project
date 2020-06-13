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
            @auth
                <a href="/ach/{{ $achievement->id }}/comment/create" class="pb-3"><button class="btn btn-primary">Add comment</button></a>
            @endauth
        </div>

        <div class="pt-6">
            <div class="p-3">
                @foreach($achievement->comments as $comment)
                    <div>
                        <a href="/profile/{{$comment->writer_id}}"><h4>{{ $comment->writer_username }}</h4></a>
                        <p>{{ $comment->content }}</p>
                        <p>{{ $comment->updated_at }}<p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
