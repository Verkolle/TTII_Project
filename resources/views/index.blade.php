@extends('layouts.app')

@section('content')
    <div class="container" style="background-color:  #d1ebef; padding: 15px">
        <p style="font-size:20px"><b>Users found:</b></p>
        <hr/> {{--horizontal divider--}}
        @if(isset($details))
        @foreach($details as $user)
            <div style="background-color:  #ebf4f5; padding: 15px">
                <a href="/profile/{{ $user->id }}">
                    <h3>{{ $user->username }}</h3>
                </a>
            </div>
                <hr/> {{--horizontal divider--}}
        @endforeach
        @endif
    </div>
@endsection
