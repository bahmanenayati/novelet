@extends('layouts.app')
@section('head')
    <title>داستان های کوتاه</title>
@endsection
@section('content')
    <div class="flex-center position-ref full-height welcome-page">
        <div class="content">
            <div class="title m-b-md">
                داستان های کوتاه
            </div>

            <div class="links">
                <p>
                    این وبسایت با هدف کمک به خواندن داستان های کوتاه راه اندازی شده است.
                </p>
                <a href="{{env('APP_URL')}}/story">
                    <div class="bt btn-primary"
                         style="padding: 5px 10px;width: 120px;border-radius: 3px;margin: auto;cursor: pointer">نمایش
                        داستان
                    </div>
                </a>
            </div>
        </div>
        <a href="mailto:info@novelet.ir" class="toemail-link">info@novelet.ir</a>
    </div>
@endsection
@section('footer')
    <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('83bbe057c6bfbf92e87d', {
            cluster: 'ap1',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            debugger
            alert(JSON.stringify(data));
        });
    </script>
@endsection
