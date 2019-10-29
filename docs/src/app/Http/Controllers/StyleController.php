<?php

namespace App\Http\Controllers;


use App\Models\Create;
use App\Models\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::all();
        return view('style.index', compact('styles'));
    }

    public function showList()
    {
        $lists = Create::with('styles')->get();
        return view('style.list', compact('lists'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        return view('style.detail',compact('details'));
    }
}
