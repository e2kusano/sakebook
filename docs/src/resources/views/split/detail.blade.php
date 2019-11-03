@extends('layouts.default')

@foreach($details->splits as $split)
    @section('title','検索｜割り物｜'.$split->name.'｜詳細ページ')
@endforeach

@section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

@endsection

@section('content')
    <p style="font-size: 50px;">詳細ページ</p>
    <div class="name">
        <div>名前</div>
        {{$details->name}}
    </div>
    <div class="abv">
        <div>アルコール度数</div>
        @foreach($details->abvs as $abv)
            {{$abv->name}}
        @endforeach
    </div>
    <div class="abv">
        <div>色</div>
        @foreach($details->colors as $color)
            {{$color->name}}
        @endforeach
    </div>
    <div class="split">
        <div>アルコール度数</div>
        @foreach($details->splits as $split)
            {{$split->name}}
        @endforeach
    </div>
    <div class="taste">
        <div>テイスト</div>
        @foreach($details->tastes as $taste)
            {{$taste->name}}
        @endforeach
    </div>
    <div class="abv">
        <div>グラスタイプ</div>
        @foreach($details->glass_types as $glass_type)
            {{$glass_type->name}}
        @endforeach
    </div>
    <div class="recipe">
        <div>製法</div>
        @foreach($details->recipes as $recipe)
            {{$recipe->name}}
        @endforeach
    </div>
    <div class="style">
        <div>見た目</div>
        @foreach($details->styles as $style)
            {{$style->name}}
        @endforeach
    </div>
    <div class="image_url">
        <div>画像</div>
        {{$details->image_url}}
    </div>

    <div class="detail">
        <div>作り方</div>
        {{$details->detail}}
    </div>
    @foreach($details->splits as $split)
        <a href="/split/{{$split->directory}}">一覧に戻る</a>
    @endforeach
@endsection