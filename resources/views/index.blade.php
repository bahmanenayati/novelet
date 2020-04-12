@extends('layouts.app')
@section('head')
    <title>novelet-داستان کوتاه</title>
    <meta name="description" content="">
    <meta name="keywords" content="این وبسایت با هدف کمک به خواندن داستان های کوتاه راه اندازی شده است.">

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="novelet-داستان کوتاه"/>
    <meta property="og:description" content="این وبسایت با هدف کمک به خواندن داستان های کوتاه راه اندازی شده است."/>
    <meta property="og:url" content="{{env('APP_URL')}}"/>
    <meta property="og:site_name" content="Novelet"/>
    <meta name="twitter:title" content="novelet-داستان کوتاه">
    <meta name="twitter:description" content="این وبسایت با هدف کمک به خواندن داستان های کوتاه راه اندازی شده است."/>
    <meta name="twitter:site" content="@benayatei">
    <meta name="twitter:creator" content="@benayatei">
    <style type="text/css">
        .welcome-page .search-box {
            margin: -20px auto;
            direction: ltr !important;
            --background: #f8fafc;
            --light-grey: #c6cfd9;
            --wave-color: #2ac8dd;
            --width: 95%;
            --height: 50px;
            --border-radius: var(--height);
            background: var(--background);
            width: var(--width);
            height: var(--height);
            position: relative;
            border-radius: 6px;
            display: -webkit-box;
            display: flex;
            justify-content: space-around;
            -webkit-box-align: center;
            align-items: center;
            padding: 0 15px;
            box-sizing: border-box;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .welcome-page .search-box.focused {
            box-shadow: 0 10px 30px rgba(65, 72, 86, 0.05);
            background: #ffffff;
        }

        .welcome-page .search-box.focused input {
            background: #ffffff;
        }

        .welcome-page .search-box input {
            transition: all 0.5s ease;
            width: 100%;
            background: #f8fafc;
            height: 100%;
            display: block;
            border: 0;
            outline: 0;
            direction: rtl;
        }

        .welcome-page .search-box img {
            position: absolute;
            left: 15px;
            width: 25px;
            top: 13px;
        }

        .posts-sections .item {
            width: 95%;
            margin: 15px auto;
            padding: 10px 10px 0;
            text-align: right;
            --background: #ffffff;
            background: var(--background);
            box-shadow: 0 10px 30px rgba(65, 72, 86, 0.05);
            border-radius: 6px;
        }

        .posts-sections .item h2 {
            font-size: 15px;
            color: black;
        }

        .posts-sections .item p {
            margin: 0;
            font-size: 12px;
            color: #212529;
        }

        .posts-sections a {
            text-decoration: none;
        }

        .posts-sections .item a {
            text-decoration: none;
            color: #4e4eaf;
            font-size: 12px;
        }

        .posts-sections .item a span {
            margin-left: -10px;
        }

        .posts-sections .item .views-count {
            color: #a0a0a0;
            font-size: 12px;
            float: left;
            margin: 14px 0;
        }

        .floating {
            -webkit-animation: floating 2s ease infinite;
            animation: floating 2s ease infinite;
            will-change: transform;
        }

        @keyframes floating {
            0% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
            50% {
                -webkit-transform: translateX(3px);
                transform: translateX(3px);
            }
            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        @keyframes slide-in-bottom {
            0% {
                -webkit-transform: translateX(1000px);
                transform: translateX(1000px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
                opacity: 1;
            }
        }

        .welcome-page .header {
            text-align: center;
        }

        .welcome-page .header img {
            margin: 0 0 25px;
        }

        .welcome-page .header h1 {
            direction: rtl;
            text-align: center;
            font-size: 20px;
        }

        .welcome-page .header p {
            direction: rtl;
            text-align: center;
            font-size: 12px;
            color: #696969;
        }

        #search-result {
            margin-top: 29px;
            text-align: right;
            font-style: italic;
            margin-bottom: -30px;
            margin-right: 14px;
        }

        .btn-random-story {
            z-index: 20;
            position: fixed;
            bottom: 20px;
            width: 150px;
            border-radius: 25px;
            padding: 8px 10px;
            right: 0;
            left: 0;
            margin: auto;
            background-color: #3f54b0;
            text-align: center;
            color: #fff;
            font-weight: bold;
            box-shadow: 0px 0px 8px 0px rgba(49, 49, 49, 0.44);
            display: none;
        }

        .btn-random-story-animate {
            display: block;
            -webkit-animation: slide-in-bottom 0.5s cubic-bezier(0.075, 0.820, 0.165, 1.000);
            animation: slide-in-bottom 0.5s cubic-bezier(0.075, 0.820, 0.165, 1.000);
        }

        .btn-random-story a {
            color: #fff;
        }

        @-webkit-keyframes slide-in-bottom {
            0% {
                -webkit-transform: translateY(1000px);
                transform: translateY(1000px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slide-in-bottom {
            0% {
                -webkit-transform: translateY(1000px);
                transform: translateY(1000px);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
            }
        }


    </style>
@endsection
@section('content')
    <div class="flex-center position-ref full-height welcome-page">
        <div class="header">
            <img src="{{asset('/images/99_Novelete_logo1-0p.png')}}" width="150">
            <h1>داستان کوتاه</h1>
            <p>
                با خواندن داستان های کوتاه ذهن آرام و بدور از استرس داشته باشیم,
                این وبسایت با هدف کمک به خواندن هر چه آسان تر داستان های کوتاه طراحی و اجرا شده است.
                <br>
                داستان هایی که در وبسایت قرار داده شده است از منبع های مختلفی جمع آوری شده است که میتوانید هنگام خواندن
                هر داستان به منبع ذکر شده مراجعه کنید.
            </p>
            <img src="{{asset('/images/novelet_il.png')}}" style="width: 100%">
        </div>
        <div class="content container">
            <div class="row">
                <div class="col-md-12">
                    <h5 style="margin-bottom: 42px;color: #3f54d0">#در_خانه_بمانیم</h5>
                    <div class="search-box" id="search-box">
                        <input type="text" placeholder="چیزی بنویسید و اینتر را بزنید...">
                        <img src="{{asset('/images/loupe.svg')}}">
                    </div>
                    <div id="search-result" style="display: none">
                        داستان های مرتبط با
                        "<span></span>"
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 23px;">
                    <div class="posts-sections">
                        @foreach($stories as $story)
                            <a href="/story/{{$story->id}}">
                                <div class="item">
                                    <h2>{{$story->title}}</h2>
                                    <p>{{Str::limit(\Soundasleep\Html2Text::convert($story->article), 250)}}</p>
                                    <span class="views-count">{{$story->views_count }} نفر خوانده است</span>
                                    <img class="floating" width="40"
                                         src="{{asset('/images/icons/Novelet_icon-0l.png')}}">
                                    <span style="color: #3f54d0;margin-right: -8px;">ادامه داستان</span>
                                </div>
                            </a>
                        @endforeach
                        <div class="btn-group" dir="ltr" style="margin-bottom: 10px">
                            <a class="btn btn-success" style="background-color: #4fe1b5;border-color: #4fe1b5"
                               href="{{ $stories->previousPageUrl() }}">
                                قبلی
                            </a>
                            <div class="divider" style="    width: 1px;
    background: #ffffff;
    z-index: 15;
    height: 25px;
    margin-top: 6px;"></div>
                            <a class="btn btn-success" style="background-color: #4fe1b5;border-color: #4fe1b5"
                               href=" {{ $stories->nextPageUrl() }}">
                                بعدی
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/story">
            <div class=" btn-random-story">
                داستان تصادفی
            </div>
        </a>
    </div>
@endsection
@section('footer')
    <script>
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        $(document).ready(() => {
            if (getParameterByName('query')) {
                $('#search-box input').val(getParameterByName('query'))
                $('#search-result').show()
                $('#search-result span').text(getParameterByName('query'))
            }
            $("#search-box input").focus(() => {
                $("#search-box").addClass('focused')
            }).blur(() => {
                $("#search-box").removeClass('focused')
            }).keyup((e) => {
                if (e.keyCode == 13) {
                    window.location.href = `/?query=${e.target.value}`
                }
            });
            $(window).on('scroll', function (e) {
                if (window.scrollY > 200) {
                    $('.btn-random-story').addClass('btn-random-story-animate');
                } else {
                    $('.btn-random-story').removeClass('btn-random-story-animate');
                }
            });
        });
    </script>
@endsection
