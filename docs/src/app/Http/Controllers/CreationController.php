<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Creation;
use App\Models\Abv;
use App\Models\Color;
use App\Models\Split;
use App\Models\Taste;
use App\Models\GlassType;
use App\Models\Recipe;
use App\Models\Flavor;

class CreationController extends Controller
{
    public function show()
    {
        $abvs = Abv::all();
        $colors = Color::all();
        $flavors = Flavor::all();
        $splits = Split::all();
        $glass_types = GlassType::all();
        $recipes = Recipe::all();
        $tastes = Taste::all();
        //TODO 毎回DB接続は非効率なのでキャッシュを使う

        return view('creation.input')
            ->with('abvs', $abvs)
            ->with('colors', $colors)
            ->With('splits',$splits)
            ->with('tastes',$tastes)
            ->with('glass_types',$glass_types)
            ->with('recipes',$recipes)
            ->with('flavors', $flavors);
    }

    public function entry(Request $request)
    {
        //ハニーポット
        if (isset($request->honey)) {
            return redirect('/creation');
        }

        //エラーチェック
        $request->validate([
            'name' => 'required|max:50',
            'detail' => 'required|max:1500'
        ]);

        //入力値を$creationsに格納
        $creations = new creation;
        $creations->name = $request->name;
        $creations->abv = $request->abv;
        $creations->color = $request->color;
        $creations->split = $request->split;
        $creations->taste = $request->taste;
        $creations->glass_type = $request->glass_type;
        $creations->recipe = $request->recipe;
        $creations->flavor = $request->flavor;
        $creations->image_url = $request->image_url;
        $creations->detail = $request->detail;

        //二重送信防止
        $request->session()->regenerateToken();

        //DB保存
       $creations->save();

        return redirect('creation/finish');
    }

    public function finish(Request $request)
    {
        return view('creation.finish');
    }

}
