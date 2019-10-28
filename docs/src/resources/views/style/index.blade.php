@extends('layouts.default')

@section('title','sakebook|見た目')

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
        }

        div {
            margin: 20px;
        }

        div > label {
            font-family: 'Nunito', sans-serif;
            font-size: 20px;
            color: black;
        }

    </style>
@endsection

@section('content')
    <div>
        <a href="/style/cute">かわいい</a>
    </div>
    <div>
        <a href="/style/cool">かっこいい</a>
    </div>
    <div>
        <a href="/style/simple">シンプル</a>
    </div>
    <div>
        <a href="/style/luxury">豪華</a>
    </div>
    <div>
        <a href="/style/eccentric">奇抜</a>
    </div>
@endsection