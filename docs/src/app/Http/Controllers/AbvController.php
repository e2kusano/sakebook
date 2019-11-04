<?php

namespace App\Http\Controllers;

use App\Models\Abv;
use App\Models\Create;

class AbvController extends Controller
{
    public function index()
    {
        $abvs = Abv::all();
        return view('abv.index', compact('abvs'));
    }

    public function showList()
    {
        $lists = Create::with('abvs')->get();
        $abvs = Abv::all();
        return view('abv.list', compact('lists','abvs'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        $abvs = Abv::all();
        return view('abv.detail',compact('details','abvs'));
    }
}
