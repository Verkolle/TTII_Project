@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #d1ebef; padding:20px">
        <div>
            <h1 class="text-md-center pb-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1)">{{__('messages.Add_new_comment')}}</h1>
        </div>
        <form action="/ach/{{ request()->route('achievement') }}/comment" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label text-md-right"><b>{{ __('Your comment') }}</b></label>

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
            <hr/> {{--horizontal divider--}}

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <button class="btn btn-primary" >{{__('messages.Add_new')}}</button>
                    <a href="{{url()->previous()}}"><button type="button" class="btn btn-outline-primary" style="margin-left:10px">{{__('messages.Cancel')}}</button></a>
                </div>
            </div>
        </form>
    </div>
@endsection
