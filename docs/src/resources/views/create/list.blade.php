@extends('layouts.default')

@section('title','登録リスト')

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
    <p>つくったものリスト</p>
    @foreach($creates as $create)
        <a href="/create/edit/{{$create->id}}">{{$create->name}}</a>
        <a href="/create/delete/{{$create->id}}">削除</a>
        <br>

        @endforeach
</div>

@endsection