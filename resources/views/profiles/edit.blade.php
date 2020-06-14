@extends('layouts.app')

{{--EDIT YOUR PROFILE INFO--}}
@section('content')
    <div class="container" style="background-color: #d1ebef">
        <div style="padding:20px">
            <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')

                <div>
                    <h1 class="text-md-center pb-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1)">{{__('messages.Edit_your_profile')}}</h1>
                </div>



                <div class="form-group row">
                    <label for="bio" class="col-md-4 col-form-label text-md-right"><b>{{ __('messages.Biography') }}</b></label>

                    <div class="col-md-6">
                        <input id="bio" type="text"
                               class="form-control @error('bio') is-invalid @enderror"
                               name="bio"
                               value="{{ old('bio') ?? $user->profile->bio }}"
                               required
                               autocomplete="bio" autofocus>

                        @error('bio')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <hr/> {{--horizontal divider--}}

                <div class="form-group row">
                    <label for="profile_pic" class="col-md-4 col-form-label text-md-right"><b>{{ __('messages.Profile_picture') }}</b></label>
                    <div class="col-md-6; pt-2" style="padding-left:13px">
                        <input id="profile_pic" type="file"
                               value="{{ old('profile_pic') ?? $user->profile->profile_pic }}"
                               class="form-control-file @error('profile_pic') is-invalid @enderror"
                               name="profile_pic">

                        @error('profile_pic')
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
                        <button class="btn btn-primary" >{{__('messages.Update_user_data')}}</button>
                        <a href="{{url()->previous()}}"><button type="button" class="btn btn-outline-primary" style="margin-left:10px">{{__('messages.Cancel')}}</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
