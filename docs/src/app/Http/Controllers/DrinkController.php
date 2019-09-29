<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    public function show()
    {
        return view('drink.input');
    }

    public function entry(Request $request)
    {
        //ハニーポット
        if(isset($request->honey)){
            return redirect('/drink');
        }

        //エラーチェック
        $request->validate([
            'name' => 'required|max:50',
//            'adv' => 'max:50',
//            'color' => 'max:50',
//            'split' => 'required|max:50',
//            'taste' => 'required|max:100',
//            'glass_type' => 'required',
//            'recipe' => 'required|max:1500',
//            'flavor' => 'required',
//            'image_url' => 'required'
        ]);

        //入力値を$drinksに格納
        $drinks = new drink;
        $drinks->name = $request->name;
        $drinks->abv = $request->abv;
        $drinks->color = $request->color;
        $drinks->split = $request->split;
        $drinks->taste = $request->taste;
        $drinks->glass_tyle = $request->glass_tyle;
        $drinks->recipe = $request->recipe;
        $drinks->flavor = $request->flavor;
        $drinks->image_url = $request->image_url;

//        //セレクトボックスの値を文字列に変換
//        $prefectureName = Config::get('view_select.prefectures');
//        $prefectureNumber = intval($request->prefecture);
//        $drinks->prefecture = '';
//        if (isset($request->prefecture)) {
//            $drinks->prefecture = $prefectureName[$prefectureNumber];
//        }
//
//        //チェックボックスの値を文字列に変換
//        $drinks->inquiry_type = '';
//        if (isset($request->inquiry_type)) {
//            $drinks->inquiry_type = implode(',', $request->inquiry_type);
//        }

          //ラジオボタンの値を文字列に変換



        
        //二重送信防止
        $request->session()->regenerateToken();

        //DB保存
        $drinks->save();

        return redirect('drink/finish');
    }

    public function finish(Request $request)
    {
        return view('drink.finish');
    }

}
