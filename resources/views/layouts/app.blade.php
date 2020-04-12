<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @laravelPWA
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
            color: #7b7b7b;
            width: 150px;
            margin: auto;
            text-align: center;
            display: block;
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

        .add-home-screen-parent {
            display: none;
            -webkit-overflow-scrolling: touch;
            -webkit-tap-highlight-color: transparent;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: rgba(0, 0, 0, .65);
            bottom: 0;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            left: 0;
            overflow-y: auto;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 1;
        }

        .add-home-screen-parent .body {
            position: absolute;
            top: 0;
            bottom: 0;
            height: 350px;
            margin: auto;
            width: 90%;
            left: 0;
            right: 0;
            background-color: #fff;
            -webkit-animation: IGCoreModalShow .1s ease-out;
            animation: IGCoreModalShow .1s ease-out;
            border-radius: 12px;
            -webkit-flex-shrink: 1;
            flex-shrink: 1;
            max-height: calc(100% - 40px);
            overflow: hidden;
            text-align: center;
        }

        .add-home-screen-parent h2 {
            font-weight: 100;
            width: 90%;
            margin: auto;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .add-home-screen-parent p {
            width: 80%;
            margin: auto;
            color: #a8a8a8;
            margin-bottom: 30px;
        }

        .add-home-screen-parent .body .head .image {
            background-color: #ffffff;
            border-radius: 100%;
            width: 80px;
            height: 80px;
            box-shadow: 0px 1px 10px 2px rgba(0, 0, 0, 0.05);
            padding: 16px 15px;
            margin: 30px auto;
        }

        .add-home-screen-parent .body .head .image img {
            width: 50px;
            height: 50px;
        }

        .add-home-screen-parent .body .buttons div:first-child {
            color: #3f54d0;
            border-bottom: 1px solid #eee;
            border-top: 1px solid #eee;
            font-weight: 500;
        }

        .add-home-screen-parent .body .buttons div {
            padding: 10px;
        }

        .add-home-screen-parent .body .buttons div {
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none;
        }
    </style>
    @yield('head')
</head>
<body>
<div id="app" style="max-width: 500px;margin: auto">

    @if(basename($_SERVER['PHP_SELF']) !== "index.php")
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="padding: 0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/images/99_Novelete_logo1-0p.png')}}" height="45">
                </a>
                <a href="{{\Illuminate\Support\Facades\URL::previous()}}">
                    <img src="{{asset('/images/icons/Novelet_icon-0l.png')}}" width="50">
                </a>
            </div>
        </nav>
    @endif

    <main class="py-4">
        @yield('content')
        @if(basename($_SERVER['PHP_SELF']) === "index.php")
            <div class="toemail-link" target="_blank">
                <a href="https://t.me/novelet_fa">
                    Telegram channel
                </a>
                <a href="mailto:info@novelet.ir" target="_blank">
                    info@novelet.ir
                </a>
            </div>
        @endif
        <div class="add-home-screen-parent" id="addToHomeScreenDialog">
            <div class="body">
                <div class="head">
                    <div class="image">
                        <img src="{{asset('/images/99_Novelete_logo_Export-0o.png')}}">
                    </div>
                    <h2>افزودن نُوِلت به صفحه اصلی ؟</h2>
                    <p>با اضافه کردن نُوِلت به صفحه اصلی موبایل خود به راحتی از داستان کوتاه استفاده نمایید.</p>
                </div>
                <div class="buttons">
                    <div class="" onclick="addToHomeScreen(true)" id="btnAddToHomeScreen">اضافه کردن به صفحه اصلی</div>
                    <div class="" onclick="addToHomeScreen(false)">خیر</div>
                </div>
            </div>
        </div>
    </main>
</div>
<script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{ asset('js/clipboard.js') }}"></script>
@yield('footer')
<script>
    let date = new Date()
    if ((window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) || date.getHours() > 20 || date.getHours() < 6) {
        // document.body.classList.add("dark-theme");
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
<script>
    $(document).ready(() => {
        // Initialize the service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function (registration) {
                // Registration was successful
                console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function (err) {
                // registration failed :(
                console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
        let deferredPrompt;
        const addBtn = document.querySelector('#btnAddToHomeScreen');
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;

            addBtn.addEventListener('click', (e) => {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the A2HS prompt');
                    } else {
                        console.log('User dismissed the A2HS prompt');
                    }
                    deferredPrompt = null;
                    localStorage.setItem('showedLocaleScreenDialog', true)
                    $('#addToHomeScreenDialog').hide()
                });
            });
        });
        var showedLocaleScreenDialog = localStorage.getItem('showedLocaleScreenDialog')
        if (showedLocaleScreenDialog === undefined || !showedLocaleScreenDialog || showedLocaleScreenDialog === 'false') {
            $('#addToHomeScreenDialog').show()
        }
    });

    function addToHomeScreen(status) {
        if (status) {
        } else {
            localStorage.setItem('showedLocaleScreenDialog', true)
            $('#addToHomeScreenDialog').hide()
        }
    }
</script>

</body>
</html>
