@extends('layouts.default')

@section('title','sakebook|見た目｜かっこいい')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

@endsection

@section('content')
    <div>
    かわいいリスト
    </div>
    @foreach($cuties as $cute)
        <a href="/style/{{$cute->id}}">{{$cute->name}}</a>
        <br>
    @endforeach
    <a href="/style">戻る</a>
@endsection