@extends('layouts.app')
@section('head')
    <title>پروفایل</title>
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
                                    پروفایل
                                </li>
                            </ol>
                        </nav>
                        <div class="body" style="text-align: right;background: #fff;
    box-shadow: 0 20px 30px -16px rgba(9,9,16,.2);padding: 10px;z-index: 10">
                            <span>داستان های نشان شده</span>
                            <ul style="margin-top: 10px">
                                @foreach($storyMarks as $item)
                                    <li>
                                        <a style="text-decoration: none" href="/story/{{$item->story->id}}" target="_blank">
                                            {{$item->story->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
