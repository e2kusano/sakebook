@extends('layouts.default')

@section('title','sakebook|SAKE登録')


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
    <p style="font-size: 50px;">好きなSAKEを登録しましょう</p>
    {!!Form::open(['url'=>'/drink','method'=>'post','class'=>'needs-validation','novalidate'=>'novalidate'])!!}
    <?php $inputName = 'honey' ?>
    {{Form::text($inputName,'',['style'=>'display:none'])}}
    <div class="name">
        <?php $inputName = 'name';?>
        <div><label for="<?php echo $inputName;?>">名前<span style="color: red; font-size: 12px;">【必須】</span></label>
        </div>
        {!!Form::text($inputName,null,['maxlength'=>'51',($errors->has($inputName)?'is-invalid':''),'id'=>$inputName,'required'=>'required']) !!}
        @if ($errors->has($inputName))
            <p style="color:red">{{$errors->first($inputName)}}</p>
        @endif
    </div>
    <div class="abv">
        <?php $inputName = 'abv';?>
        <div><label for="<?php echo $inputName;?>">アルコール度数</label></div>
        <div class="low">
            <?php $abv = '低い' ?>
            {!! Form::radio($inputName,$abv,in_array($abv,(array)$inputName))!!}
            {!! Form::label($inputName,$abv)!!}
        </div>
        <div class="normal">
            <?php $abv = '普通' ?>
            {!! Form::radio($inputName,$abv,in_array($abv,(array)$inputName))!!}
            {!! Form::label($inputName,$abv)!!}
        </div>
        <div class="high">
            <?php $abv = '強い' ?>
            {!! Form::radio($inputName,$abv,in_array($abv,(array)$inputName))!!}
            {!! Form::label($inputName,$abv)!!}
        </div>
        <div class=fever>
            <?php $abv = 'フィーバー' ?>
            {!! Form::radio($inputName,$abv,in_array($abv,(array)$inputName))!!}
            {!! Form::label($inputName,$abv)!!}
        </div>
    </div>
    <div class="color">
        <?php $inputName = 'color';?>
        <div><label for="<?php echo $inputName;?>">色</label></div>
        <div class="clear">
            <?php $color = '透明' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="red">
            <?php $color = '赤' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="orange">
            <?php $color = 'オレンジ' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="yellow">
            <?php $color = '黄色' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="green">
            <?php $color = '緑' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="blue">
            <?php $color = '青' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="pink">
            <?php $color = 'ピンク' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="purple">
            <?php $color = '紫' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="gold">
            <?php $color = '琥珀色' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="white">
            <?php $color = '白' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
        <div class="black">
            <?php $color = '黒' ?>
            {!! Form::radio($inputName,$color,in_array($color,(array)$inputName))!!}
            {!! Form::label($inputName,$color)!!}
        </div>
    </div>
    <div class="split">
        <?php $inputName = 'split';?>
        <div><label for="<?php echo $inputName;?>">割り物</label></div>
        <div class="soda">
            <?php $split = '炭酸水' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="tonic">
            <?php $split = 'トニックウォーター' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="ginger">
            <?php $split = 'ジンジャーエール' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="cola">
            <?php $split = 'コーラ' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="orange">
            <?php $split = 'オレンジジュース' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="grapefruit">
            <?php $split = 'グレープフルーツジュース' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="pineapple">
            <?php $split = 'パイナップルジュース' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="red_bull">
            <?php $split = 'レッドブル' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="tea">
            <?php $split = 'お茶系' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
        <div class="milk">
            <?php $split = '牛乳' ?>
            {!! Form::radio($inputName,$split,in_array($split,(array)$inputName))!!}
            {!! Form::label($inputName,$split)!!}
        </div>
    </div>
    <div class="taste">
        <?php $inputName = 'taste';?>
        <div><label for="<?php echo $inputName;?>">テイスト</label></div>
        <div class="sweet">
            <?php $taste = '甘口' ?>
            {!! Form::radio($inputName,$taste,in_array($taste,(array)$inputName))!!}
            {!! Form::label($inputName,$taste)!!}
        </div>
        <div class="Medium">
            <?php $taste = '中辛' ?>
            {!! Form::radio($inputName,$taste,in_array($taste,(array)$inputName))!!}
            {!! Form::label($inputName,$taste)!!}
        </div>
        <div class="spicy">
            <?php $taste = '辛口' ?>
            {!! Form::radio($inputName,$taste,in_array($taste,(array)$inputName))!!}
            {!! Form::label($inputName,$taste)!!}
        </div>
    </div>
    <div class="glass_type">
        <?php $inputName = 'glass_type';?>
        <div><label for="<?php echo $inputName;?>">グラスタイプ</label></div>

        <div class="lock">
            <?php $glass_type = 'ロックグラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="tumbler">
            <?php $glass_type = 'タンブラー' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="collins">
            <?php $glass_type = 'コリンズグラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="liqueur">
            <?php $glass_type = 'リキュールグラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="cocktail">
            <?php $glass_type = 'カクテルグラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="saucer">
            <?php $glass_type = 'ソーサー型シャンパングラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="flute">
            <?php $glass_type = 'フルート型シャンパングラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="wine">
            <?php $glass_type = 'ワイングラス' ?>
            {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
            {!! Form::label($inputName , $glass_type) !!}
        </div>
        <div class="hot">
            <?php $glass_type = 'ホットグラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="shot">
            <?php $glass_type = 'ショットグラス' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="pilsner">
            <?php $glass_type = 'ピルスナー' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>
        <div class="other">
            <?php $glass_type = 'その他' ?>
            {!! Form::radio($inputName,$glass_type,in_array($glass_type,(array)$inputName))!!}
            {!! Form::label($inputName,$glass_type)!!}
        </div>

    </div>
    <div class="recipe">
        <?php $inputName = 'recipe';?>
        <div><label for="<?php echo $inputName;?>">製法</label></div>
        <div class="build">
            <?php $recipe = 'ビルド' ?>
            {!! Form::radio($inputName,$recipe,in_array($recipe,(array)$inputName))!!}
            {!! Form::label($inputName,$recipe)!!}
        </div>
        <div class="steer">
            <?php $recipe = 'ステア' ?>
            {!! Form::radio($inputName,$recipe,in_array($recipe,(array)$inputName))!!}
            {!! Form::label($inputName,$recipe)!!}
        </div>
        <div class="shake">
            <?php $recipe = 'シェーク' ?>
            {!! Form::radio($inputName,$recipe,in_array($recipe,(array)$inputName))!!}
            {!! Form::label($inputName,$recipe)!!}
        </div>
        <div class="blend">
            <?php $recipe = 'ブレンド' ?>
            {!! Form::radio($inputName,$recipe,in_array($recipe,(array)$inputName))!!}
            {!! Form::label($inputName,$recipe)!!}
        </div>
    </div>
    <div class="flavor">
        <?php $inputName = 'flavor';?>
        <div><label for="<?php echo $inputName;?>">味</label></div>
        <div class="sweety">
            <?php $flavor = '甘い' ?>
            {!! Form::radio($inputName,$flavor,in_array($flavor,(array)$inputName))!!}
            {!! Form::label($inputName,$flavor)!!}
        </div>
        <div class="fine">
            <?php $flavor = 'すっきり' ?>
            {!! Form::radio($inputName,$flavor,in_array($flavor,(array)$inputName))!!}
            {!! Form::label($inputName,$flavor)!!}
        </div>
        <div class="citrus">
            <?php $flavor = '柑橘系' ?>
            {!! Form::radio($inputName,$flavor,in_array($flavor,(array)$inputName))!!}
            {!! Form::label($inputName,$flavor)!!}
        </div>
        <div class="fruity">
            <?php $flavor = 'フルーティー' ?>
            {!! Form::radio($inputName,$flavor,in_array($flavor,(array)$inputName))!!}
            {!! Form::label($inputName,$flavor)!!}
        </div>

    </div>
    <div class="image_utl">
        <?php $inputName = 'image_url';?>
        <div><label for="<?php echo $inputName;?>">画像</label></div>
        {!! !Form::file($inputName)!!}
    </div>


@endsection
