@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/ach/{{ request()->route('achievement') }}" method="post">
            @csrf
            @method('PATCH')

            <div>
                <h1 class="text-md-center pb-3">Edit your achievement</h1>
            </div>

            <div class="form-group row">
                <label for="value" class="col-md-4 col-form-label text-md-right">{{ __('New value') }}</label>

                <div class="col-md-6">
                    <input id="value" type="text"
                           class="form-control @error('value') is-invalid @enderror"
                           name="value"
                           required
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
                    <button class="btn btn-primary" >Update achievement data</button>
                    <a href="{{url()->previous()}}"><button type="button" class="btn" >Cancel</button></a>

                </div>
            </div>
        </form>
        <form action="/ach/{{ request()->route('achievement') }}" method="post">
            @csrf
            @method('DELETE')
            <div>
                <button class="btn btn-primary" >Delete Achievement</button>
            </div>
        </form>
    </div>
@endsection
