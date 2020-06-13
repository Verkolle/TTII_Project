@extends('layouts.app')

@section('content')
    <div class="container">
        {{--ACHIEVEMENT WHEN YOU ARE INSPECTING IT--}}
        <h1>
            {{ $achievement->title }} <small><i>by</i></small>
            <a href="/profile/{{$achievement->user->id}}">{{ $achievement->user->username }}</a>
        </h1>
        <p>{{ $achievement->description }}</p>
        <p>{{ $achievement->value }}</p>

        <div>
            <a href="/ach/{{ $achievement->id }}/comment/create" class="pb-3"><button class="btn btn-primary">Add comment</button></a>
        </div>

        <div class="pt-6">
            <div class="p-3">
                {{--COMMENTS ON ACHIEVEMENTS--}}
                @foreach($achievement->comments as $comment)
                    <div>
                        <h4>{{ $comment->writer_id }}</h4>
                        <p>{{ $comment->content }}</p>
                        <p>{{ $comment->updated_at }}<p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
