@extends('layouts.default')

@php
    $path = request()->path();
    $path = explode('/',$path);
@endphp
@foreach($abvs as $abv)
    @if($path[1] === $abv->directory)
        @section('title','検索｜アルコール度数｜'.$abv->name)
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

    @if($path == 'abv/low')
        <div>アルコール度数一覧【弱い】</div>
        @foreach($low as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$low->links()}}

    @elseif($path == 'abv/so-so')
        <div>アルコール度数一覧【まあまあ】</div>
        @foreach($soso as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$soso->links()}}

    @elseif($path == 'abv/high')
        <div>アルコール度数一覧【強い】</div>
        @foreach($high as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$high->links()}}
        @endif

    <a href="/abv">戻る</a>
@endsection