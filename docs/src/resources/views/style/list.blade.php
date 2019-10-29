@extends('layouts.default')

@section('title','sakebook|見た目｜リスト')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

@endsection

@section('content')
    <div>
        見た目リスト
    </div>
    @php $path = request()->path() @endphp
    @foreach($lists as $list)
        @foreach($list->styles as $style)
        @if(strpos($path,$style->directory)!== false )
        <a href="/create/{{$list->id}}">{{$list->name}}</a>
        <br>
        @endif
            @endforeach
    @endforeach
    <a href="/style">戻る</a>
@endsection