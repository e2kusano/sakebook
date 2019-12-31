@extends('layouts.default')

@php
    $path = request()->path();
    $path = explode('/',$path);
@endphp
@foreach($colors as $color)
    @if($path[1] === $color->directory)
        @section('title','検索｜色｜'.$color->name)
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

    @if($path == 'color/clear')
        <div>色一覧【透明】</div>
        @foreach($clear as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$clear->links()}}

    @elseif($path == 'color/red')
        <div>色一覧【赤】</div>
        @foreach($red as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$red->links()}}

    @elseif($path == 'color/orange')
        <div>色一覧【オレンジ】</div>
        @foreach($orange as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$orange->links()}}

    @elseif($path == 'color/yellow')
        <div>色一覧【黄色】</div>
        @foreach($yellow as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$yellow->links()}}

    @elseif($path == 'color/green')
        <div>色一覧【緑】</div>
        @foreach($green as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$green->links()}}

    @elseif($path == 'color/blue')
        <div>色一覧【青】</div>
        @foreach($blue as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$blue->links()}}

    @elseif($path == 'color/pink')
        <div>色一覧【ピンク】</div>
        @foreach($pink as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$pink->links()}}

    @elseif($path == 'color/purple')
        <div>色一覧【紫】</div>
        @foreach($purple as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$purple->links()}}

    @elseif($path == 'color/gold')
        <div>色一覧【琥珀色】</div>
        @foreach($gold as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$gold->links()}}

    @elseif($path == 'color/white')
        <div>色一覧【白】</div>
        @foreach($white as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$white->links()}}

    @elseif($path == 'color/green')
        <div>色一覧【緑】</div>
        @foreach($green as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$green->links()}}

    @elseif($path == 'color/black')
        <div>色一覧【黒】</div>
        @foreach($black as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$black->links()}}

    @elseif($path == 'color/brown')
        <div>色一覧【黒】</div>
        @foreach($brown as $value)
            <a href="/create/{{$value->id}}">{{$value->name}}</a>
            <br>
        @endforeach
        {{$brown->links()}}
    @endif

    <a href="/color">戻る</a>
@endsection