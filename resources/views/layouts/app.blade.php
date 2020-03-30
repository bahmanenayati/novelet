<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .toemail-link {
            position: absolute;
            bottom: 25px;
            right: 0;
            left: 0;
            color: #7b7b7b;
            width: 100px;
            margin: auto;
        }

        .welcome-page .title {
            font-size: 50px;
        }

        @media (max-width: 600px) {
            .welcome-page {
                padding: 10px;
            }

            .welcome-page .title {
                font-size: 35px !important;
            }
        }

        .welcome-page .full-height {
            height: 100vh;
        }

        .welcome-page .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .welcome-page .position-ref {
            position: relative;
        }

        .welcome-page .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .welcome-page .content {
            text-align: center;
        }


        .welcome-page .m-b-md {
            margin-bottom: 30px;
        }

        .welcome-page .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
        }

        body.dark-theme {
            background: #000;
            color: #fff !important;
        }

        body.dark-theme .navbar, body.dark-theme .card, body.dark-theme .dropdown-menu, body.dark-theme .dropdown-item {
            background: #222 !important;
            text-align: right;
        }

        .card .card-header {
            text-align: right;
        }

        ul.navbar-nav {
            direction: rtl;
        }

        .form-check-input {
            margin-left: auto !important;
            margin-right: -1.25rem !important;
        }

        body.dark-theme .welcome-page.story-section .breadcrumb {
            background: #222 !important;
        }

        body.dark-theme .welcome-page.story-section .body {
            background: #222 !important;
            color: #fff !important;
        }

        body.dark-theme .navbar a {
            color: #fff !important;
        }
    </style>

    @yield('head')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('/images/logo.png')}}" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav">

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
@yield('footer')
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{ asset('js/clipboard.js') }}"></script>
<script>
    let date = new Date()
    if ((window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) || date.getHours() > 20 || date.getHours() < 6) {
        document.body.classList.add("dark-theme");
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S9VRXVXZM9"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-S9VRXVXZM9');
</script>

</body>
</html>
