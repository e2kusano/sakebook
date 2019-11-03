@extends('layouts.default')

@section('title','検索｜色')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="colorsheet">

    <!-- colors -->

@endsection

@section('content')
    <div>色一覧</div>
    @foreach($colors as $color)
        <a href="color/{{$color->directory}}">{{$color->name}}</a>
        <br>
    @endforeach
    <a href="/home">トップに戻る</a>
@endsection