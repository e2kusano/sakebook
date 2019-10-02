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
            'detail' => 'required|max:1500'
        ]);

        //入力値を$drinksに格納
        $drinks = new drink;
        $drinks->name = $request->name;
        $drinks->abv = $request->abv;
        $drinks->color = $request->color;
        $drinks->split = $request->split;
        $drinks->taste = $request->taste;
        $drinks->glass_type = $request->glass_type;
        $drinks->recipe = $request->recipe;
        $drinks->flavor = $request->flavor;
        $drinks->image_url = $request->image_url;
        $drinks->detail = $request->detail;

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
