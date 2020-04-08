@extends('layouts.app')
@section('head')
    <title>novelet-داستان های کوتاه</title>
    <meta name="description" content="">
    <meta name="keywords" content="این وبسایت با هدف کمک به خواندن داستان های کوتاه راه اندازی شده است.">

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="داستان های کوتاه-novelet"/>
    <meta property="og:description" content="این وبسایت با هدف کمک به خواندن داستان های کوتاه راه اندازی شده است."/>
    <meta property="og:url" content="{{env('APP_URL')}}"/>
    <meta property="og:site_name" content="Novelet"/>
    <meta name="twitter:title" content="novelet-داستان های کوتاه">
    <meta name="twitter:description" content="این وبسایت با هدف کمک به خواندن داستان های کوتاه راه اندازی شده است."/>
    <meta name="twitter:site" content="@benayatei">
    <meta name="twitter:creator" content="@benayatei">
    <style type="text/css">
        .welcome-page .search-box {
            margin: auto;
            direction: ltr !important;
            --background: #ffffff;
            --light-grey: #c6cfd9;
            --wave-color: #2ac8dd;
            --width: 300px;
            --height: 50px;
            --border-radius: var(--height);
            background: var(--background);
            width: var(--width);
            height: var(--height);
            position: relative;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 30px rgba(65, 72, 86, 0.05);
            display: -webkit-box;
            display: flex;
            justify-content: space-around;
            -webkit-box-align: center;
            align-items: center;
            padding: 0 15px;
            box-sizing: border-box;
            overflow: hidden;
        }

        .welcome-page .search-box input {
            width: 100%;
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
    </style>
@endsection
@section('content')
    <div class="flex-center position-ref full-height welcome-page">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-box">
                        <input type="text" placeholder="چیزی بنویسید...">
                        <img src="{{asset('/images/loupe.svg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
