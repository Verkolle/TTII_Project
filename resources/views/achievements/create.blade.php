@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1 class="text-md-center pb-3">Add new achievement</h1>
        </div>
        <form action="/ach" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Achievement title') }}</label>

                <div class="col-md-6">
                    <input id="title" type="string"
                           class="form-control @error('title') is-invalid @enderror"
                           name="title" value="{{ old('title') }}" required
                           autocomplete="title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Achievement description') }}</label>
                <div class="col-md-6">
                    <input id="description" type="text"
                           class="form-control @error('description') is-invalid @enderror"
                           name="description" value="{{ old('description') }}" required
                           autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="value" class="col-md-4 col-form-label text-md-right">{{ __('Value') }}</label>
                <div class="col-md-6">
                    <input id="value" type="unsignedDouble"
                           class="form-control @error('value') is-invalid @enderror"
                           name="value" value="{{ old('value') }}" required
                           autocomplete="value" autofocus>

                    @error('value')
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
