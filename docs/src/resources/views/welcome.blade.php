@extends('layouts.default')
@section('title','sakebook|TOP')
@section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            text-align: center;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endsection
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">マイページ</a>
            @else
                <a href="{{ route('login') }}">ログイン</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">会員登録</a>
                @endif
            @endauth

            @endif

            <div class="content">
                <div class="title m-b-md">
                    SakeBook
                    <div class="links">
                        <a href="https://github.com/e2kusano/sakebook/tree/master/docs/src">GitHub</a>
                        {{--全種類--}}
                        <a href="">全種類検索</a>
                        {{--味--}}
                        <a href="">味</a>
                        {{--度数--}}
                        <a href="">度数</a>
                        {{--色--}}
                        <a href="">色</a>
                        {{--グラスタイプ--}}
                        <a href="">グラスタイプ</a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
