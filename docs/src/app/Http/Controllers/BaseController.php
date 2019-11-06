<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Create;

class BaseController extends Controller
{
    public function index()
    {
        $bases = Base::all();
        return view('base.index', compact('bases'));
    }

    public function showList()
    {
        $lists = Create::with('bases')->get();
        $bases = Base::all();
        return view('base.list', compact('lists','bases'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        $bases = Base::all();
        return view('base.detail',compact('details','bases'));
    }
}
