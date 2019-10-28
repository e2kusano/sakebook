<?php

namespace App\Http\Controllers;

use App\Models\Create;
use App\Models\Style;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    public function index()
    {
        return view('style.index');
    }

    public function cute()
    {
        $cuties = Create::with('styles')->where('style', Style::CUTE)->get();
        return view('style.cute', compact('cuties'));
    }

    public function cool()
    {
        $cools = Create::with('styles')->where('style', Style::COOL)->get();
        return view('style.cool', compact('cools'));
    }

    public function simple()
    {
        $simples = Create::with('styles')->where('style', Style::SIMPLE)->get();
        return view('style.simple', compact('simples'));
    }

    public function luxury()
    {
        $luxuries = Create::with('styles')->where('style', Style::LUXURY)->get();
        return view('style.luxury', compact('luxuries'));
    }

    public function eccentric()
    {
        $eccentrics = Create::with('styles')->where('style', Style::ECCENTRIC)->get();
        return view('style.eccentric', compact('eccentrics'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        return view('style.detail',compact('details'));
    }
}
