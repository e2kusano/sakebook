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

    <!-- Styles -->

@endsection

@section('content')
    <div>
        割りもの一覧
    </div>
    @php $path = request()->path() @endphp
    @foreach($lists as $list)
        @foreach($list->splits as $split)
            @if(strpos($path,$split->directory)!== false )
                <a href="/create/{{$list->id}}">{{$list->name}}</a>
                <br>
            @endif
        @endforeach
    @endforeach
    <a href="/split">戻る</a>
@endsection