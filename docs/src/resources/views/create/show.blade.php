@extends('layouts.default')

@section('title',$creates->name.'の削除')

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
        }

        div {
            margin: 20px;
        }

        div > label {
            font-family: 'Nunito', sans-serif;
            font-size: 20px;
            color: black;
        }

    </style>
@endsection

@section('content')
    <p style="font-size: 50px;">削除</p>
    {!!Form::open(['url'=>'/create/delete','method'=>'post','class'=>'needs-validation','novalidate'=>'novalidate'])!!}
    @php $inputName = 'honey' @endphp
    {{Form::text($inputName,'',['style'=>'display:none'])}}
    @php $inputName = 'id' @endphp
    {{Form::text($inputName,$creates->id,['style'=>'display:none'])}}
    @php $inputName = 'user' @endphp
    {{Form::text($inputName,$creates->user,['style'=>'display:none'])}}
    <div class="name">
        <div>名前</div>
        {{$creates->name}}
    </div>
    <div class="abv">
        <div>アルコール度数</div>
        @foreach($creates->abvs as $abv)
            {{$abv->name}}
        @endforeach
    </div>
    <div class="base">
        <div>ベース</div>
        @foreach($creates->bases as $base)
            {{$base->name}}
        @endforeach
    </div>
    <div class="split">
        <div>割りもの</div>
        @foreach($creates->splits as $split)
            {{$split->name}}
        @endforeach
    </div>
    <div class="color">
        <div>色</div>
        @foreach($creates->colors as $color)
            {{$color->name}}
        @endforeach
    </div>
    <div class="style">
        <div>見た目</div>
        @foreach($creates->styles as $style)
            {{$style->name}}
        @endforeach
    </div>
    <div class="image_url">
        <div>画像</div>
        {{$creates->image_url}}
    </div>

    <div class="detail">
        <div>作り方</div>
        {{$creates->detail}}
    </div>
    <div class="button">
        {!! Form::submit('削除する') !!}
    </div>
@endsection