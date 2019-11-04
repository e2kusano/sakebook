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

    <!-- Styles -->

@endsection

@section('content')
    <div>
        アルコール度数一覧
    </div>
    @php $path = request()->path() @endphp
    @foreach($lists as $list)
        @foreach($list->abvs as $abv)
            @if(strpos($path,$abv->directory)!== false )
                <a href="/create/{{$list->id}}">{{$list->name}}</a>
                <br>
            @endif
        @endforeach
    @endforeach
    <a href="/abv">戻る</a>
@endsection