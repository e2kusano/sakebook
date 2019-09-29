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
    {!!Form::open(['id'=>'drink_form','url'=>'/drink','method'=>'post','class'=>'needs-validation','novalidate'=>'novalidate'])!!}
    <?php $inputName = 'honey' ?>
    {{Form::text($inputName,'',['style'=>'display:none'])}}

    <?php $inputName = 'name';?>
    <div><label for="<?php echo $inputName;?>">名前<span style="color: red; font-size: 12px;">【必須】</span></label></div>
    {!!Form::text($inputName,null,['maxlength'=>'51','form'=>'drink_form',($errors->has($inputName)?' is-invalid':''),'id'=>$inputName,'required'=>'required']) !!}
    @if ($errors->has($inputName))
        <p style="color:red">{{$errors->first($inputName)}}</p>
    @endif

    <?php $inputName = 'abv';?>
    <div><label for="<?php echo $inputName;?>">アルコール度数</label></div>
    <?php $abv = '弱い' ?>
    {!! Form::radio($inputName,$abv, in_array($abv,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $abv) !!}
    <?php $abv = '普通' ?>
    {!! Form::radio($inputName,$abv, in_array($abv,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $abv) !!}
    <?php $abv = '強い' ?>
    {!! Form::radio($inputName,$abv, in_array($abv,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $abv) !!}
    <?php $abv = 'フィーバー' ?>
    {!! Form::radio($inputName,$abv, in_array($abv,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $abv) !!}

    <?php $inputName = 'color';?>
    <div><label for="<?php echo $inputName;?>">色</label></div>
    <?php $color = '透明' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '赤' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = 'オレンジ' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '黄色' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '緑' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '青' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = 'ピンク' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '紫' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '琥珀色' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '白' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}
    <?php $color = '黒' ?>
    {!! Form::radio($inputName,$color, in_array($color,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $color) !!}

    <?php $inputName = 'split';?>
    <div><label for="<?php echo $inputName;?>">割り物</label></div>
    <?php $split = '炭酸水' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'トニックウォーター' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'ジンジャーエール' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'コーラ' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'オレンジジュース' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'グレープフルーツジュース' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'パイナップルジュース' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'レッドブル' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = 'お茶系' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}
    <?php $split = '牛乳' ?>
    {!! Form::radio($inputName,$split, in_array($split,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $split) !!}

    <?php $inputName = 'taste';?>
    <div><label for="<?php echo $inputName;?>">テイスト</label></div>
    <?php $taste = '甘口' ?>
    {!! Form::radio($inputName,$taste, in_array($taste,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $taste) !!}
    <?php $taste = '中辛' ?>
    {!! Form::radio($inputName,$taste, in_array($taste,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $taste) !!}
    <?php $taste = '辛口' ?>
    {!! Form::radio($inputName,$taste, in_array($taste,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $taste) !!}

    <?php $inputName = 'glass_type';?>
    <div><label for="<?php echo $inputName;?>">グラスタイプ</label></div>
    <?php $glass_type = 'ロックグラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'タンブラー' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'コリンズグラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'リキュールグラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'カクテルグラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'ソーサー型シャンパングラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'フルート型シャンパングラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'ワイングラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'ホットグラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'ショットグラス' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'ピルスナー' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}
    <?php $glass_type = 'その他' ?>
    {!! Form::radio($inputName,$glass_type, in_array($glass_type,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $glass_type) !!}

    <?php $inputName = 'recipe';?>
    <div><label for="<?php echo $inputName;?>">製法</label></div>
    <?php $recipe = 'ビルド' ?>
    {!! Form::radio($inputName,$recipe, in_array($recipe,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $recipe) !!}
    <?php $recipe = 'ステア' ?>
    {!! Form::radio($inputName,$recipe, in_array($recipe,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $recipe) !!}
    <?php $recipe = 'シェーク' ?>
    {!! Form::radio($inputName,$recipe, in_array($recipe,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $recipe) !!}
    <?php $recipe = 'ブレンド' ?>
    {!! Form::radio($inputName,$recipe, in_array($recipe,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $recipe) !!}

    <?php $inputName = 'flavor';?>
    <div><label for="<?php echo $inputName;?>">味</label></div>
    <?php $flavor = '甘い' ?>
    {!! Form::radio($inputName,$flavor, in_array($flavor,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $flavor) !!}
    <?php $flavor = 'すっきり' ?>
    {!! Form::radio($inputName,$flavor, in_array($flavor,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $flavor) !!}
    <?php $flavor = '柑橘系' ?>
    {!! Form::radio($inputName,$flavor, in_array($flavor,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $flavor) !!}
    <?php $flavor = 'フルーティー' ?>
    {!! Form::radio($inputName,$flavor, in_array($flavor,(array)$inputName), [ 'class' => 'form-check-input form-responsive-radio'. ($errors->has($inputName) ? ' is-invalid' : '')]) !!}
    {!! Form::label($inputName , $flavor) !!}

    <?php $inputName = 'image_url';?>
    <div><label for="<?php echo $inputName;?>">画像</label></div>
    {!! !Form::file($inputName) !!}

@endsection
