@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height welcome-page">
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
    box-shadow: 0 20px 30px -16px rgba(9,9,16,.2);padding: 10px">
                            <p>{!! $story->article !!}</p>
                        </div>
                        <ul style="list-style: none;padding: 0;text-align: right;padding-top: 10px">
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 10px;color: #a8a8a8" onclick="shareStory()">اشتراک گذاری</li>
                            <li style="font-size: 12px;cursor:pointer;float: right;margin-left: 10px;color: #a8a8a8"
                                class="copy-story-link"
                                data-clipboard-text="http://novelet.ir/story/{{$story->id}}">کپی لینک
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="{{ asset('js/clipboard.js') }}"></script>

    <script>
        new ClipboardJS('.copy-story-link');
        function shareStory() {
            if (navigator.share) {
                navigator.share({
                    title: '{{$story->title}}',
                    text: 'یک داستان کوتاه بخوانیم.',
                    url: `https://taxiplus.ir/login?referral={{$story->id}}`
                })
            }
        }
    </script>
@endsection
