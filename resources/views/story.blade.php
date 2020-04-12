@extends('layouts.app')
@section('head')
    <title>{{$story->title}}-novelet</title>
    <meta name="description"
          content="{{\Illuminate\Support\Str::limit(\Soundasleep\Html2Text::convert($story->article), 250)}}">
    <meta name="keywords"
          content="{{\Illuminate\Support\Str::limit(\Soundasleep\Html2Text::convert($story->article), 250)}}">

    <meta property="og:type" content="article"/>
    <meta property="og:title" content="{{$story->title}}-novelet"/>
    <meta property="og:description"
          content="{{\Illuminate\Support\Str::limit(\Soundasleep\Html2Text::convert($story->article), 250)}}"/>
    <meta property="og:url" content="{{env('APP_URL')}}/story/{{$story->id}}"/>
    <meta property="og:site_name" content="Novelet"/>
    <meta name="twitter:title" content="{{$story->title}}-novelet">
    <meta name="twitter:description"
          content="{{\Illuminate\Support\Str::limit(\Soundasleep\Html2Text::convert($story->article), 250)}}"/>
    <meta name="twitter:site" content="@benayatei">
    <meta name="twitter:creator" content="@benayatei">

    <style type="text/css">
        .story-section .body h1 {
            margin: -15px 0 20px 0;
            font-size: 20px;
        }

        .story-section .body p {
            font-size: 14px;
            text-align: justify;
        }

        .story-section .extra-links li {
            font-size: 12px;
            cursor: pointer;
            float: right;
            margin: 5px;
            padding: 0px 9px 0 0;
            border-radius: 3px;
            background: #ffffff;
            color: #4fe1b5 !important;
            border: 1px solid #4fe1b5;
        }

        .story-section .extra-links li a {
            color: #4fe1b5 !important;
        }

        .story-section .extra-links li img {
            width: 30px;
        }
    </style>
@endsection
@section('content')
    <div class="flex-center position-ref full-height welcome-page story-section">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="margin: auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="/">خانه</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{$story->title}}
                                </li>
                            </ol>
                        </nav>
                        <div class="body" style="text-align: right;padding: 10px;z-index: 10">
                            <p>{!! $story->article !!}</p>
                        </div>
                        <ul style="list-style: none;padding: 0;text-align: right;padding-top: 10px" class="extra-links">
                            {{--                            <li>--}}
                            {{--                                {{$story->views}} نفر خوانده است--}}
                            {{--                                <img src="{{asset('/images/icons/Novelet_icon-0k.png')}}">--}}
                            {{--                            </li>--}}
                            <li>
                                <a href="{{$story->url}}" target="_blank">منبع</a>
                                <img src="{{asset('/images/icons/Novelet_icon_Artboard p.png')}}">
                            </li>
                            <li id="story-mark" onclick="storyMark()"
                            >
                                <span>
                                    {{$story->mark ? "نشان شده" : "نشان کردن"}}
                                </span>
                                @if($story->mark)
                                    <img class="image" src="{{asset('/images/icons/Novelet_icon-0q.png')}}">
                                @else
                                    <img class="image" src="{{asset('/images/icons/Novelet_icon-0m.png')}}">
                                @endif
                            </li>
                            <li onclick="shareStory()">
                                اشتراک گذاری
                                <img src="{{asset('/images/icons/Novelet_icon-0k.png')}}">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        var logined = "{{\Illuminate\Support\Facades\Auth::check()}}"
        var csrfToken = "{{ csrf_token() }}"

        function shareStory() {
            if (navigator.share) {
                navigator.share({
                    title: '{{$story->title}}',
                    text: '{{$story->title}}',
                    url: `{{env('APP_URL')}}/story/{{$story->id}}`
                })
            }
        }

        function storyMark() {
            if (!logined) {
                return window.location.href = "/login?storyId={{$story->id}}"
            }
            $.ajax({
                url: "/story/mark",
                data: {
                    storyId: "{{$story->id}}"
                },
                type: "POST",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', csrfToken);
                },
                success: function () {
                    if ($('#story-mark .image').attr('src') === '{{env('APP_URL')}}/images/icons/Novelet_icon-0m.png') {
                        $('#story-mark .image').attr('src', '{{env('APP_URL')}}/images/icons/Novelet_icon-0q.png')
                    } else {
                        $('#story-mark .image').attr('src', '{{env('APP_URL')}}/images/icons/Novelet_icon-0m.png')
                    }
                    if ($('#story-mark span').text().includes('نشان کردن')) {
                        return $('#story-mark span').text("نشان شده")
                    }
                    return $('#story-mark span').text("نشان کردن")
                }
            });
        }
    </script>
@endsection
