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

    <!-- Styles -->

@endsection

@section('content')
    <div>
        色一覧
    </div>
    @php $path = request()->path() @endphp
    @foreach($lists as $list)
        @foreach($list->bases as $base)
            @if(strpos($path,$base->directory)!== false )
                <a href="/create/{{$list->id}}">{{$list->name}}</a>
                <br>
            @endif
        @endforeach
    @endforeach
    <a href="/base">戻る</a>
@endsection