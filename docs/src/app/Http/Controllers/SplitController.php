<?php

namespace App\Http\Controllers;

use App\Models\Split;
use App\Models\Create;

class splitController extends Controller
{
    public function index()
    {
        $splits = Split::all();
        return view('split.index', compact('splits'));
    }

    public function showList()
    {
        $lists = Create::with('splits')->get();
        $splits = Split::all();
        return view('split.list', compact('lists','splits'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        $splits = Split::all();
        return view('split.detail',compact('details','splits'));
    }
}
