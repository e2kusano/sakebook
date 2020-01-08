<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    //$id = create_id
    public function store(Request $request, $id)
    {
        //Userモデルのlikeメソッド呼び出し
        \Auth::user()->like($id);
        return back();
    }

    public function destroy($id)
    {
        //Userモデルのunlikeメソッド呼び出し
        \Auth::user()->unlike($id);
        return back();
    }
}
