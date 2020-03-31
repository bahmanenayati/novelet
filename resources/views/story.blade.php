@extends('layouts.app')
@section('head')
    <title>{{$story->title}}</title>
    <meta name="description" content="{{$story->title}}">
    <meta name="keywords" content="{{$story->title}}">
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
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 10px;color: #a8a8a8">
                                <a style="color: #a8a8a8" href="{{$story->url}}" target="_blank">منبع</a>
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 10px;color: #a8a8a8"
                                onclick="shareStory()">اشتراک گذاری
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 10px;color: #a8a8a8"
                                class="copy-story-link"
                                id="copy-story-link"
                                data-clipboard-text="{{env('APP_URL')}}/story/{{$story->id}}">کپی لینک
                            </li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 10px;color: #a8a8a8"
                                id="story-mark" onclick="storyMark()"
                            >
                                {{$story->mark ? "نشان شده" : "نشان کردن"}}
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
                    text: 'یک داستان کوتاه بخوانیم.',
                    url: `https://taxiplus.ir/login?referral={{$story->id}}`
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
    </script>
@endsection
