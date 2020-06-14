@extends('layouts.app')

{{--ACHIEVEMENT WHEN YOU ARE INSPECTING IT--}}
@section('content')
    <div class="container" style="background-color: #d1ebef; padding:5px">
        <div style="background-color:  #ebf4f5; padding: 15px; margin:15px">
            <h1>
                {{ $achievement->title }} <small><i>{{__('messages.by')}}</i></small>
                <a href="/profile/{{$achievement->user->id}}">{{ $achievement->user->username }}</a>
            </h1>
            <p>{{ $achievement->description }}</p>
            <p>{{ $achievement->value }}</p>
        </div>

            <div style="margin-left:15px">
                @auth
                    <a href="/ach/{{ $achievement->id }}/comment/create" class="pb-3"><button class="btn btn-primary">{{__('messages.Add_comment')}}</button></a>
                @endauth
            </div>

            <div class="pt-6">
                <div class="p-3" style="background-color:  #ebf4f5; padding: 15px; margin:15px">
                    {{--COMMENTS ON ACHIEVEMENTS--}}
                    @foreach($achievement->comments as $comment)
                        <div>
                            <a href="/profile/{{$comment->writer_id}}"><h4>{{ $comment->writer_username }}</h4></a>
                            <p>{{ $comment->content }}</p>
                            <p>{{ $comment->updated_at }}<p>
                        </div>
                        <hr/> {{--horizontal divider--}}
                    @endforeach
                </div>
            </div>
    </div>
@endsection
