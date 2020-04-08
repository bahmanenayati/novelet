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
        }
    </style>
@endsection
@section('content')
    <div class="flex-center position-ref full-height welcome-page story-section">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-xs-12 col-sm-10" style="margin: auto">
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
                        <div class="body" style="text-align: right;background: #fff;
    box-shadow: 0 20px 30px -16px rgba(9,9,16,.2);padding: 10px;z-index: 10">
                            <p>{!! $story->article !!}</p>
                        </div>
                        <ul style="list-style: none;padding: 0;text-align: right;padding-top: 10px">
                            <li style="font-size: 12px;float: right;margin-left: 15px;color: #a8a8a8">
                                {{$story->views}} نفر خوانده است
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 15px;color: #a8a8a8">
                                <a style="color: #a8a8a8" href="{{$story->url}}" target="_blank">منبع</a>
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 15px;color: #a8a8a8"
                                onclick="shareStory()">اشتراک گذاری
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 15px;color: #a8a8a8"
                                class="copy-story-link"
                                id="copy-story-link"
                                data-clipboard-text="{{env('APP_URL')}}/story/{{$story->id}}">کپی لینک
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 10px;color: #a8a8a8"
                                id="story-mark" onclick="storyMark()"
                            >
                                {{$story->mark ? "نشان شده" : "نشان کردن"}}
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 15px;color: #a8a8a8">
                                <a style="color: #a8a8a8" href="{{env('APP_URL')}}/story">
                                    داستان بعدی
                                </a>
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
        window.addEventListener('load', () => {
            var btn = document.getElementById('copy-story-link');
            var clipboard = new ClipboardJS(btn);
        }, false)

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
                    if ($('#story-mark').text().includes('نشان کردن')) {
                        return $('#story-mark').text("نشان شده")
                    }
                    return $('#story-mark').text("نشان کردن")
                }
            });
        }

        function birthday(squares, days, month) {
            let result = []
            for (let i = 1; i <= squares.length; i++) {
                let subArray = squares.slice(i - 1, (i - 1) + month)
                if (subArray.length === month) {
                    let sum = subArray.reduce((x, j) => x + j, 0)
                    if (sum === days) {
                        result.push(subArray)
                    }
                }
            }
            return result.length > 0 ? result.length === 1 ? result[0] : result : 0
        }

        console.log(birthday([2, 2, 1, 3, 2], 4, 2), 'Should be [2, 2], [1, 3]');

        console.log(birthday([1, 2, 1, 3, 2], 3, 2), 'Should be [1, 2], [2, 1]');

        console.log(birthday([1, 1, 1, 1, 1, 1], 3, 2), 'Should be 0');

        console.log(birthday([4], 4, 1), 'Should be [4]');
    </script>
@endsection
