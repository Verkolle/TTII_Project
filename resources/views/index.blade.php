@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($details))
        @foreach($details as $user)
            <div>
                <a href="/profile/{{ $user->id }}">
                    <h3>{{ $user->username }}</h3>
                </a>
            </div>
        @endforeach
        @endif
    </div>
@endsection
