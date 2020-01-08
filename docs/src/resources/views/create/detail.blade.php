@extends('layouts.default')

@section('title','詳細ページ｜'.$detail->name)

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">

@endsection

@section('content')
    <p style="font-size: 50px;">詳細ページ</p>
    <div class="name">
        <div>名前</div>
        {{$detail->name}}
    </div>
    <div class="abv">
        <div>アルコール度数</div>
        @foreach($detail->abvs as $value)
            {{$value->name}}
        @endforeach
    </div>
    <div class="base">
        <div>ベース</div>
        @foreach($detail->bases as $value)
            {{$value->name}}
        @endforeach
    </div>
    <div class="split">
        <div>割りもの</div>
        @foreach($detail->splits as $value)
            {{$value->name}}
        @endforeach
    </div>
    <div class="abv">
        <div>色</div>
        @foreach($detail->colors as $value)
            {{$value->name}}
        @endforeach
    </div>
    <div class="style">
        <div>見た目</div>
        @foreach($detail->styles as $value)
            {{$value->name}}
        @endforeach
    </div>
    <div class="image_url">
        <div>画像</div>
        {{$detail->image_url}}
    </div>

    <div class="detail">
        <div>作り方</div>
        {{$detail->detail}}
    </div>

    {{--いいね機能--}}
    {{--自分で作った記事ではないか確認--}}
    @if(Auth::id() != $detail->user)
        {{--既にいいねしているか確認--}}
        @if(Auth::user()->is_like($detail->id))

            {!!Form::open(['route'=>['likes.unlike', $detail->id], 'method'=>'delete'])!!}
            {!!Form::submit('いいね！をやめる')!!}
            {!!Form::close()!!}

        @else
            {!!Form::open(['route'=>['likes.like', $detail->id]])!!}
            {!!Form::submit('いいね！')!!}
            {!!Form::close()!!}
        @endif
        {{--いいね数の表示--}}
        <div>
            <span>{{$count_like_users}}いいね！</span>
        </div>
    @endif
@endsection