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

    <!-- Styles -->

@endsection

@section('content')
    <div>
        色一覧
    </div>
    @php $path = request()->path() @endphp
    @foreach($lists as $list)
        @foreach($list->colors as $color)
            @if(strpos($path,$color->directory)!== false )
                <a href="/create/{{$list->id}}">{{$list->name}}</a>
                <br>
            @endif
        @endforeach
    @endforeach
    <a href="/color">戻る</a>
@endsection