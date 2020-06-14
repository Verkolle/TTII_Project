@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="background-color:  #d1ebef ">
        <div class="col-2"></div>
        <div class="col-6">

            {{--USERNAME ON HOME PAGE--}}
            <div class="p-3" id="username-display">
                <h1 style="text-align: center"><b>{{ $user->username }}</b></h1>
            </div>
            <hr/> {{--horizontal divider--}}

            {{--USER OPTIONS--}}
                {{--ACHIEVEMENT ADDING--}}
            <div>
                <p style="text-align: center"><b>{{__('messages.User_tools')}}</b></p>
                <div class="p-3">
                    @can('update', $user->profile)
                        <a href="/ach/create" class="justify" style="background-color: #ebf4f5; margin:10px; padding: 10px">{{__('messages.Add_new_post')}}</a>
                    @endcan

                        @can('update', $user->profile)
                            <a href="/profile/{{ $user->id }}/edit" style="background-color: #ebf4f5; margin:10px; padding: 10px">{{__('messages.Edit_your_profile')}}</a>
                        @endcan
                </div>
            </div>
            <hr/> {{--horizontal divider--}}

            <!--ACHIEVEMENTS-->
            <div class="p-3">
                @foreach($user->achievements as $achievement)
                    <div class="flex" style="background-color:  #ebf4f5; padding: 15px">
                        <a href="/ach/{{ $achievement->id }}">
                            <h3 style="border-bottom: 1px solid rgba(0, 0, 0, 0.1)">{{ $achievement->title }}</h3>
                        </a>
                            <p>{{ $achievement->description }}</p>
                            <p>{{ $achievement->value }}</p>
                        @can('update', $user->profile)
                            <div style="text-align: right">
                                {{--NEVAJAG TULKOT SETI JO TIEK IZMANTOTA BILDE--}}
                                <a href="/ach/{{ $achievement->id }}/edit"><img src="https://icons-for-free.com/iconfiles/png/512/edit+document+edit+file+edited+editing+icon-1320191040211803620.png" style="height: 5%; width: 5%" ></a>
                            </div>
                        @endcan
                    </div>
                    <hr/> {{--horizontal divider--}}
                @endforeach
            </div>

        </div>
        <div class="col-3" style="background-color: #b3e5ee">
            <div id="user_picture" class="row pb-3">
                <img src="{{ $user->profile->profilePicture()}}" alt=""
                     style="height:100%; width:100%; border: 5px solid black; margin: 10px; object-fit: cover">
            </div>
            <hr/> {{--horizontal divider--}}
            <div id="user_bio" class="row" style="margin:5px">
                <p>{{ $user->profile->bio ?? ''}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
