@extends('layouts.default')

@section('title','検索｜アルコール度数')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

@endsection

@section('content')
    <div>色一覧</div>
    @foreach($abvs as $abv)
        <a href="abv/{{$abv->directory}}">{{$abv->name}}</a>
        <br>
    @endforeach
    <a href="/home">トップに戻る</a>
@endsection