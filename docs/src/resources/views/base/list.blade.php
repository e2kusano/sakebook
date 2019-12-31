@extends('layouts.default')

@php
    $path = request()->path();
    $path = explode('/',$path);
@endphp
@foreach($bases as $base)
    @if($path[1] === $base->directory)
        @section('title','検索｜ベース｜'.$base->name)
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

    @if($path == 'base/tequila')
        <div>ベース一覧【テキーラ】</div>
        @foreach($tequila as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$tequila->links()}}

    @elseif($path == 'base/jager')
        <div>ベース一覧【イエガー】</div>
        @foreach($jager as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$jager->links()}}

    @elseif($path == 'base/cocalero')
        <div>ベース一覧【コカレロ】</div>
        @foreach($cocalero as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$cocalero->links()}}

    @elseif($path == 'base/gin')
        <div>ベース一覧【ジン】</div>
        @foreach($gin as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$gin->links()}}

    @elseif($path == 'base/vodka')
        <div>ベース一覧【ウォッカ】</div>
        @foreach($vodka as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$vodka->links()}}

    @elseif($path == 'base/rum')
        <div>ベース一覧【ラム】</div>
        @foreach($rum as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$rum->links()}}

    @elseif($path == 'base/whiskey')
        <div>ベース一覧【ウイスキー】</div>
        @foreach($whiskey as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$whiskey->links()}}

    @elseif($path == 'base/liqueur')
        <div>ベース一覧【リキュール系】</div>
        @foreach($liqueur as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$liqueur->links()}}

    @elseif($path == 'base/other')
        <div>ベース一覧【その他】</div>
        @foreach($other as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$other->links()}}

    @endif
    <a href="/base">戻る</a>
@endsection