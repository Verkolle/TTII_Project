@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1 class="text-md-center pb-3">Add new comment</h1>
        </div>
        <form action="/comment" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Your comment') }}</label>

                <div class="col-md-6">
                    <input id="content" type="text"
                           class="form-control @error('content') is-invalid @enderror"
                           name="content" value="{{ old('content') }}" required
                           autocomplete="content" autofocus>

                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <button class="btn btn-primary" >Add new</button>
                    <a href="{{url()->previous()}}"><button type="button" class="btn" >Cancel</button></a>
                </div>
            </div>
        </form>
    </div>
@endsection
