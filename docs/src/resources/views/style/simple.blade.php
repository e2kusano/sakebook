@extends('layouts.default')

@section('title','sakebook|見た目｜シンプル')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

@endsection

@section('content')
    <div>
        シンプルリスト
    </div>
    @foreach($simples as $simple)
        <a href="/style/{{$simple->id}}">{{$simple->name}}</a>
        <br>
    @endforeach
    <a href="/style">戻る</a>
@endsection