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
    <link href="{{ asset('css/tabbar.css') }}" rel="stylesheet">
    <style type="text/css">
        .toemail-link {
            position: absolute;
            bottom: 25px;
            right: 0;
            left: 0;
            color: #7b7b7b;
            width: 150px;
            margin: auto;
            text-align: center;
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
                <img src="{{asset('/images/99_Novelete_logo1-0p.png')}}" height="45">
            </a>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <div class="tabbar">
        <div class="tabs">
            <input type="radio" name="tab" id="tab-04"/>
            <label for="tab-04">
                <svg>
                    <use xlink:href="#icon-04" class="icon"/>
                </svg>
                <div class="wave"></div>
            </label>
            <input type="radio" name="tab" id="tab-03"/>
            <label for="tab-03">
                <svg>
                    <use xlink:href="#icon-03" class="icon"/>
                </svg>
                <div class="wave"></div>
            </label>
            <input type="radio" name="tab" id="tab-02"/>
            <label for="tab-02">
                <svg>
                    <use xlink:href="#icon-02" class="icon"/>
                </svg>
                <div class="wave"></div>
            </label>
            <a href="{{env('APP_URL')}}/story">
                <input type="radio" name="tab" id="tab-01" checked/>
                <label for="tab-01">
                    <svg>
                        <use xlink:href="#icon-01" class="icon"/>
                    </svg>
                    <div class="wave"></div>
                </label>
            </a>
        </div>

        <!-- SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-01">
                <path
                    d="M13.93,1H20.8A4.21,4.21,0,0,1,25,5.2V20.8A4.21,4.21,0,0,1,20.8,25H5.2A4.21,4.21,0,0,1,1,20.8V5.2A4.21,4.21,0,0,1,5.2,1h.47"/>
                <line x1="16" y1="10" x2="18" y2="10"/>
                <line x1="8" y1="10" x2="12" y2="10"/>
                <line x1="8" y1="15" x2="18" y2="15"/>
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-02">
                <path
                    d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
                <polygon points="15 14.33 11 17 11 11.67 15 9 15 14.33"/>
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-03">
                <path
                    d="M7.91,2.08a11.15,11.15,0,0,0-5.73,9.81v6a7.83,7.83,0,0,1-1,2.92A1.47,1.47,0,0,0,2.43,23H23.57a1.47,1.47,0,0,0,1.26-2.16,7.83,7.83,0,0,1-1-2.92v-6A11.06,11.06,0,0,0,15.18,1"/>
                <path d="M15,23a2,2,0,0,1-4,0"/>
                <path d="M16,5.51A6.53,6.53,0,0,1,19.65,9.4"/>
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-04">
                <path
                    d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
                <path d="M18,18.26a8,8,0,0,1-10.09-.1"/>
            </symbol>
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" height="0" width="0">
            <clipPath id="path-icon-01">
                <path
                    d="M13.93,1H20.8A4.21,4.21,0,0,1,25,5.2V20.8A4.21,4.21,0,0,1,20.8,25H5.2A4.21,4.21,0,0,1,1,20.8V5.2A4.21,4.21,0,0,1,5.2,1h.47"/>
            </clipPath>
            <clipPath id="path-icon-02">
                <path
                    d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
            </clipPath>
            <clipPath id="path-icon-03">
                <path
                    d="M7.91,2.08a11.15,11.15,0,0,0-5.73,9.81v6a7.83,7.83,0,0,1-1,2.92A1.47,1.47,0,0,0,2.43,23H23.57a1.47,1.47,0,0,0,1.26-2.16,7.83,7.83,0,0,1-1-2.92v-6A11.06,11.06,0,0,0,15.18,1"/>
            </clipPath>
            <clipPath id="path-icon-04">
                <path
                    d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
            </clipPath>
        </svg>
    </div>
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

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-S9VRXVXZM9');
</script>

</body>
</html>
