@extends('layouts.default')

@section('title','検索|結果')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

@endsection

@section('content')
    <div>
        検索ページ
    </div>
    <div>
        {!!Form::open(['url'=>'/search/result','method'=>'post','class'=>'needs-validation','novalidate'=>'novalidate'])!!}
        @php $inputName = 'keyword' @endphp
        {{Form::text($inputName, $keyword)}}
        <br>
        {!! Form::submit('検索') !!}
        <br>
    </div>
    <div>
        @if(empty($keyword))
        <p>検索条件を入力して下さい。</p>
        @elseif(empty($data))
            <p>検索結果に一致するデータは見つかりませんでした。</p>
        @else
            @foreach($data as $item)
                <a href="/create/{{$item['id']}}">{{$item['name']}}</a>
                <br>
            @endforeach
        @endif
    </div>

    <a href="/home">TOP</a>
@endsection