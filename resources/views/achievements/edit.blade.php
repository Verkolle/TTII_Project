@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #d1ebef">
        <div style="padding:20px">
            <form action="/ach/{{ request()->route('achievement')->id }}" method="post">
                @csrf
                @method('PATCH')

                <div>
                    <h1 class="text-md-center pb-3">{{__('messages.Edit_achievement')}}</h1>
                </div>

                <div class="form-group row">
                    <label for="value" class="col-md-4 col-form-label text-md-right"><b>{{ __('messages.New_value') }}</b></label>

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
                        <button class="btn btn-primary" >{{__('messages.Update_achievement_data')}}</button>
                        <a href="{{url()->previous()}}"><button type="button" class="btn btn-outline-primary" style="margin-right:10px; margin-left:10px" >{{__('messages.Cancel')}}</button></a>

                    </div>
                </div>
            </form>
            <div style="margin-left: 367px; margin-top: 10px"> N<!--NOMRAL-->
            {{--<div style="position: relative; left: 650px; top: -37px">--}} {{--RLATIVE POSITION--}}
            {{--<div style="position: absolute; left: 1075px; top: 246px">--}} {{--ABSOLUTE POSITION--}}
                <form action="/ach/{{ request()->route('achievement')->id }}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <div style="display: inline">
                        <button class="btn btn-outline-danger">{{__('messages.Delete_Achievement')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
