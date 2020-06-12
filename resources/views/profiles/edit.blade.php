@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div>
                <h1 class="text-md-center pb-3">Edit your profile</h1>
            </div>



            <div class="form-group row">
                <label for="bio" class="col-md-4 col-form-label text-md-right">{{ __('Biography') }}</label>

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

            <div class="form-group row">
                <label for="profile_pic" class="col-md-4 col-form-label text-md-right">{{ __('Profile picture') }}</label>
                <div class="col-md-6">
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

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <button class="btn btn-primary" >Update user data</button>
                    <a href="{{url()->previous()}}"><button type="button" class="btn" >Cancel</button></a>
                </div>
            </div>
        </form>
    </div>
@endsection
