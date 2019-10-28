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
    <p style="font-size: 50px;">お気に入りのSAKEを登録しましょう</p>
    {!!Form::open(['url'=>'/create','method'=>'post','class'=>'needs-validation','novalidate'=>'novalidate'])!!}
    <?php $inputName = 'honey' ?>
    {{Form::text($inputName,'',['style'=>'display:none'])}}
    <div class="name">
        <?php $inputName = 'name';?>
        <div><label for="<?php echo $inputName;?>">名前<span style="color: red; font-size: 12px;">【必須】</span></label>
        </div>
        {!!Form::text($inputName,null,['maxlength'=>'51',($errors->has($inputName)?'is-invalid':''),'required'=>'required']) !!}
        @if ($errors->has($inputName))
            <p style="color:red">{{$errors->first($inputName)}}</p>
        @endif
    </div>
    <div class="comment">
        <p>各項目1つずつ特徴を選択してください。選択することで多くの人と情報共有できます。</p>
    </div>
    <div class="abv">
        @php $inputName = 'abv' @endphp
        <div><label for="<?php echo $inputName;?>">アルコール度数</label></div>
        @foreach ($creates->abvs as $abv)
            {{ Form::radio($inputName,$abv->id,in_array($abv->id,(array)$inputName),['id'=>$inputName.$abv->id])}}
            {!! Form::label($inputName.$abv->id,$abv->name.'　　')!!}
        @endforeach
    </div><br>
    <div class="color">
        @php $inputName = 'color' @endphp
        <div><label for="<?php echo $inputName;?>">色</label></div>
        @foreach($creates->colors as $color)
            {{ Form::radio($inputName,$color->id,in_array($color->id,(array)$inputName),['id'=>$inputName.$color->id])}}
            {!! Form::label($inputName.$color->id,$color->name.'　　')!!}
        @endforeach
    </div><br>
    <div class="split">
        @php $inputName = 'split' @endphp
        <div><label for="<?php echo $inputName;?>">割り物</label></div>
            @foreach($creates->splits as $split)
            {{ Form::radio($inputName,$split->id,in_array($split->id,(array)$inputName),['id'=>$inputName.$split->id])}}
            {!! Form::label($inputName.$split->id,$split->name.'　　')!!}
                @endforeach
    </div><br>
    <div class="taste">
        @php $inputName = 'taste' @endphp
        <div><label for="<?php echo $inputName;?>">テイスト</label></div>
            @foreach($creates->tastes as $taste)
                {{ Form::radio($inputName,$taste->id,in_array($taste->id,(array)$inputName),['id'=>$inputName.$taste->id])}}
                {!! Form::label($inputName.$taste->id,$taste->name.'　　')!!}
                @endforeach
    </div><br>
    <div class="glass_type">
        @php $inputName = 'glass_type' @endphp
        <div><label for="<?php echo $inputName;?>">グラスタイプ</label></div>
            @foreach($creates->glass_types as $glass_type)
                {{ Form::radio($inputName,$glass_type->id,in_array($glass_type->id,(array)$inputName),['id'=>$inputName.$glass_type->id])}}
                {!! Form::label($inputName.$glass_type->id,$glass_type->name.'　　')!!}
                @endforeach
    </div><br>
    <div class="recipe">
        @php $inputName = 'recipe' @endphp
            <div><label for="<?php echo $inputName;?>">製法</label></div>
        @foreach($creates->recipes as $recipe)
                {{ Form::radio($inputName,$recipe->id,in_array($recipe->id,(array)$inputName),['id'=>$inputName.$recipe->id])}}
                {!! Form::label($inputName.$recipe->id,$recipe->name.'　　')!!}
            @endforeach
        </div><br>
    <div class="style">
        @php $inputName = 'style' @endphp
        <div><label for="<?php echo $inputName;?>">見た目</label></div>
        @foreach($creates->styles as $style)
            {{ Form::radio($inputName,$style->id,in_array($style->id,(array)$inputName),['id'=>$inputName.$style->id])}}
            {!! Form::label($inputName.$style->id,$style->name.'　　')!!}
            @endforeach
    </div><br>
    <div class="image_utl">
        <?php $inputName = 'image_url';?>
        <div><label for="<?php echo $inputName;?>">画像</label></div>
        {!! Form::file($inputName)!!}
    </div>
    <div class="detail">
        <?php $inputName = 'detail';?>
        <div><label for="<?php $inputName = 'detail';?>">作り方</label></div>
        {!! Form::textarea($inputName,null,['maxlength'=>'1501','class'=>($errors->has($inputName)?'is-invalid':''),'placeholder'=>
        '1000文字以内で入力して下さい。&#13;&#10;'
        ]) !!}
            @if ($errors->has($inputName))
                <p style="color:red">{{$errors->first($inputName)}}</p>
            @endif
    </div>
    <div class="button">
        {!! Form::submit('送信する') !!}
    </div>
@endsection
