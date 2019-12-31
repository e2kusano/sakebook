@extends('layouts.default')

@php
    $path = request()->path();
    $path = explode('/',$path);
@endphp
@foreach($styles as $style)
    @if($path[1] === $style->directory)
        @section('title','検索｜見た目｜'.$style->name)
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

    @if($path == 'style/cute')
        <div>見た目一覧【かわいい】</div>
        @foreach($cute as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$cute->links()}}

    @elseif($path == 'style/cool')
        <div>見た目一覧【かっこいい】</div>
        @foreach($cool as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$cool->links()}}

    @elseif($path == 'style/simple')
        <div>見た目一覧【シンプル】</div>
        @foreach($simple as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$simple->links()}}

    @elseif($path == 'style/luxury')
        <div>見た目一覧【豪華】</div>
        @foreach($luxury as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$luxury->links()}}

    @elseif($path == 'style/eccentric')
        <div>見た目一覧【奇抜】</div>
        @foreach($eccentric as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$eccentric->links()}}

        @endif
    <a href="/style">戻る</a>
@endsection