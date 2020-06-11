@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $achievement->title }} <small><i>by</i></small> {{ $achievement->user->username }}</h1>
        <p>{{ $achievement->description }}</p>
        <p>{{ $achievement->value }}</p>
    </div>
@endsection
