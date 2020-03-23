@extends('layouts.app')
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
                <a href="/story">
                    <div class="bt btn-primary"
                         style="padding: 5px 10px;width: 120px;border-radius: 3px;margin: auto;cursor: pointer">نمایش
                        داستان
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
