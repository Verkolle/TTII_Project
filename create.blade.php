@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #d1ebef">
        <div style="padding:20px">
            <div>
                <h1 class="text-md-center pb-3" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1)">Add new achievement</h1>
            </div>
            <form action="/ach" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right"><b>{{ __('Achievement title') }}</b></label>

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
                <hr/> {{--horizontal divider--}}

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right"><b>{{ __('Achievement description') }}</b></label>
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
                <hr/> {{--horizontal divider--}}

                <div class="form-group row">
                    <label for="value" class="col-md-4 col-form-label text-md-right"><b>{{ __('Value') }}</b></label>
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
                <hr/> {{--horizontal divider--}}

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-6">
                        <button class="btn btn-primary" >Add new</button>
                        <a href="{{url()->previous()}}"><button type="button" class="btn btn-outline-primary" style="margin-left:10px">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
