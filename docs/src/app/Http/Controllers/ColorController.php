<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Create;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('color.index',compact('colors'));
    }

    public function showList()
    {
        $lists = Create::with('colors')->get();
        $colors = Color::all();
        return view('color.list', compact('lists','colors'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        $colors = Color::all();
        return view('color.detail',compact('details','colors'));
    }


}
