<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Create;
use App\Models\Abv;
use App\Models\Base;
use App\Models\Split;
use App\Models\Color;
use App\Models\Style;

class CreateController extends Controller
{
    public function index()
    {
        $creates = new Create;
        $creates->abvs = Abv::all();
        $creates->bases = Base::all();
        $creates->splits = Split::all();
        $creates->colors = Color::all();
        $creates->styles = Style::all();

        return view('create.input')
            ->with('creates', $creates);
    }

    public function entry(Request $request)
    {
        //ハニーポット
        if (isset($request->honey)) {
            return redirect('/create');
        }

        //エラーチェック
        $request->validate([
            'name' => 'required|max:50',
            'detail' => 'required|max:1500'
        ]);

        //入力値を$createsに格納
        $user = Auth::user()->id;
        if (empty($user)) {
            abort(401);
        }

        $creates = new Create;
        $creates->user = $user;
        $creates->name = $request->name;
        $creates->abv = $request->abv;
        $creates->base = $request->base;
        $creates->split = $request->split;
        $creates->color = $request->color;
        $creates->style = $request->style;
        $creates->image_url = $request->image_url;
        $creates->detail = $request->detail;

        //二重送信防止
        $request->session()->regenerateToken();

        //DB保存
        $creates->save();

        return redirect('create/finish');
    }

    public function EntryList()
    {
        $id = Auth::user()->id;
        if (empty($id)) {
            abort(401);
        }
        $creates = Create::where('user', $id)->get();

        return view('create.list')
            ->with('creates', $creates);
    }

    public function edit($id)
    {
        $creates = Create::find($id);
        $creates->abvs = Abv::all();
        $creates->base = Base::all();
        $creates->splits = Split::all();
        $creates->colors = Color::all();
        $creates->styles = Style::all();

        return view('create.edit', compact('creates'));
    }

    public function update(Request $request)
    {
        //ハニーポット
        if (isset($request->honey)) {
            return redirect('/create');
        }

        //エラーチェック
        $request->validate([
            'name' => 'required|max:50',
            'detail' => 'required|max:1500'
        ]);

        //入力値を$createsに格納
        $user = Auth::user()->id;
        if (empty($user)) {
            abort(401);
        }

        $creates = Create::find($request->id);
        $creates->user = $user;
        $creates->name = $request->name;
        $creates->abv = $request->abv;
        $creates->base = $request->base;
        $creates->split = $request->split;
        $creates->color = $request->color;
        $creates->style = $request->style;
        $creates->image_url = $request->image_url;
        $creates->detail = $request->detail;

        //二重送信防止
        $request->session()->regenerateToken();

        //DB保存
        $creates->save();

        return view('create.update');
    }

    public function show($id)
    {
        $creates = Create::find($id);
        return view('create.show',compact('creates'));

    }

    public function delete(Request $request)
    {
        Create::destroy($request->id);
         return view('create.delete');
    }

    public function finish(Request $request)
    {
        return view('create.finish');
    }

}
