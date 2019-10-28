@extends('layouts.default')

@section('title','sakebook|見た目｜奇抜')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

@endsection

@section('content')
    <div>
        奇抜リスト
    </div>
    @foreach($eccentrics as $eccentric)
        <a href="/style/{{$eccentric->id}}">{{$eccentric->name}}</a>
        <br>
    @endforeach
    <a href="/style">見た目に戻る</a>
@endsection