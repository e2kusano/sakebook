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
        @foreach($clears as $clear)
            <a href="/create/{{$clear->id}}">{{$clear->name}}</a>
            <br>
        @endforeach
        {{$clears->links()}}

    @elseif($path == 'color/red')
        <div>色一覧【赤】</div>
        @foreach($reds as $red)
            <a href="/create/{{$red->id}}">{{$red->name}}</a>
            <br>
        @endforeach
        {{$reds->links()}}

    @elseif($path == 'color/orange')
        <div>色一覧【オレンジ】</div>
        @foreach($oranges as $orange)
            <a href="/create/{{$orange->id}}">{{$orange->name}}</a>
            <br>
        @endforeach
        {{$oranges->links()}}

    @elseif($path == 'color/yellow')
        <div>色一覧【黄色】</div>
        @foreach($yellows as $yellow)
            <a href="/create/{{$yellow->id}}">{{$yellow->name}}</a>
            <br>
        @endforeach
        {{$yellows->links()}}

    @elseif($path == 'color/green')
        <div>色一覧【緑】</div>
        @foreach($greens as $green)
            <a href="/create/{{$green->id}}">{{$green->name}}</a>
            <br>
        @endforeach
        {{$greens->links()}}

    @elseif($path == 'color/blue')
        <div>色一覧【青】</div>
        @foreach($blues as $blue)
            <a href="/create/{{$blue->id}}">{{$blue->name}}</a>
            <br>
        @endforeach
        {{$blues->links()}}

    @elseif($path == 'color/pink')
        <div>色一覧【ピンク】</div>
        @foreach($pinks as $pink)
            <a href="/create/{{$pink->id}}">{{$pink->name}}</a>
            <br>
        @endforeach
        {{$pinks->links()}}

    @elseif($path == 'color/purple')
        <div>色一覧【紫】</div>
        @foreach($purples as $purple)
            <a href="/create/{{$purple->id}}">{{$purple->name}}</a>
            <br>
        @endforeach
        {{$purples->links()}}

    @elseif($path == 'color/gold')
        <div>色一覧【琥珀色】</div>
        @foreach($golds as $gold)
            <a href="/create/{{$gold->id}}">{{$gold->name}}</a>
            <br>
        @endforeach
        {{$golds->links()}}

    @elseif($path == 'color/white')
        <div>色一覧【白】</div>
        @foreach($whites as $white)
            <a href="/create/{{$white->id}}">{{$white->name}}</a>
            <br>
        @endforeach
        {{$whites->links()}}

    @elseif($path == 'color/green')
        <div>色一覧【緑】</div>
        @foreach($greens as $green)
            <a href="/create/{{$green->id}}">{{$green->name}}</a>
            <br>
        @endforeach
        {{$greens->links()}}

    @elseif($path == 'color/black')
        <div>色一覧【黒】</div>
        @foreach($blacks as $black)
            <a href="/create/{{$black->id}}">{{$black->name}}</a>
            <br>
        @endforeach
        {{$blacks->links()}}

    @elseif($path == 'color/brown')
        <div>色一覧【黒】</div>
        @foreach($browns as $brown)
            <a href="/create/{{$brown->id}}">{{$brown->name}}</a>
            <br>
        @endforeach
        {{$browns->links()}}
    @endif

    <a href="/color">戻る</a>
@endsection