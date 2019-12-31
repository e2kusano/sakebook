@extends('layouts.default')

@php
    $path = request()->path();
    $path = explode('/',$path);
@endphp
@foreach($splits as $split)
    @if($path[1] === $split->directory)
        @section('title','検索｜割りもの｜'.$split->name)
@endif
@endforeach

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- Styles -->

@endsection

@section('content')
    @php $path = request()->path() @endphp

    @if($path == 'split/alcohol')
        <div>割りもの一覧【酒】</div>
        @foreach($alcohol as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$alcohol->links()}}

    @elseif($path == 'split/soda')
        <div>割りもの一覧【炭酸水】</div>
        @foreach($soda as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$soda->links()}}

    @elseif($path == 'split/tonic')
        <div>割りもの一覧【トニックウォーター】</div>
        @foreach($tonic as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$tonic->links()}}

    @elseif($path == 'split/ginger')
        <div>割りもの一覧【ジンジャーエール】</div>
        @foreach($ginger as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$ginger->links()}}

    @elseif($path == 'split/cola')
        <div>割りもの一覧【コーラ】</div>
        @foreach($cola as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$cola->links()}}

    @elseif($path == 'split/orange')
        <div>割りもの一覧【オレンジジュース】</div>
        @foreach($orange as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$orange->links()}}

    @elseif($path == 'split/grapefruit')
        <div>割りもの一覧【グレープフルーツジュース】</div>
        @foreach($grapefruit as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$grapefruit->links()}}

    @elseif($path == 'split/pineapple')
        <div>割りもの一覧【パイナップルジュース】</div>
        @foreach($pineapple as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$pineapple->links()}}

    @elseif($path == 'split/redbull')
        <div>割りもの一覧【レッドブル】</div>
        @foreach($redbull as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$redbull->links()}}

    @elseif($path == 'split/tea')
        <div>割りもの一覧【お茶系】</div>
        @foreach($tea as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$tea->links()}}

    @elseif($path == 'split/milk')
        <div>割りもの一覧【牛乳】</div>
        @foreach($milk as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$milk->links()}}

    @elseif($path == 'split/other')
        <div>割りもの一覧【その他】</div>
        @foreach($other as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$other->links()}}
        
        @endif
    <a href="/split">戻る</a>
@endsection