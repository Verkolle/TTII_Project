<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #6edcee ">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light " style="background-color: #40a1b1">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Achievement Tracker
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @guest
                @else
                    <div class="row" style="margin-left:700px">
                        {{-- button for going to your home screen --}}
                        {{--@cannot('update', $user->profile)--}}
                            <a href="/profile/{{ auth()->user()->id }}">
                                <img src="https://cdn4.iconfinder.com/data/icons/mono-color-web-mobile/250/Home-512.png"
                                     style="width:25px;height:25px;">
                            </a>
                        {{--@endcannot--}}

                    <!-- button for ading new achievements -->
                        <!--NESTRADA-->
                        {{--@can('update', $user->profile)--}}
                            {{--<a href="{{ url('/ach/create') }}">
                                <img src="data:image/png;base64,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"
                                     style="width:25px;height:25px;">
                            </a>--}}
                        {{--@endcan--}}
                    </div>
                @endguest

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
