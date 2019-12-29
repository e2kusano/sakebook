<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Create;
use Illuminate\Http\Request;
use App\Services\WordExtractionServices;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('color.index', compact('colors'));
    }

    public function showList()
    {
        $word_extraction = new WordExtractionServices();
        $clears = $word_extraction->getWordExtraction('colors', 'color', Color::CLEAR);
        $reds = $word_extraction->getWordExtraction('colors', 'color', Color::RED);
        $oranges = $word_extraction->getWordExtraction('colors', 'color', Color::ORANGE);
        $yellows = $word_extraction->getWordExtraction('colors', 'color', Color::YELLOW);
        $greens = $word_extraction->getWordExtraction('colors', 'color', Color::GREEN);
        $blues = $word_extraction->getWordExtraction('colors', 'color', Color::BLUE);
        $pinks = $word_extraction->getWordExtraction('colors', 'color', Color::PINK);
        $purples = $word_extraction->getWordExtraction('colors', 'color', Color::PURPLE);
        $golds = $word_extraction->getWordExtraction('colors', 'color', Color::GOLD);
        $whites = $word_extraction->getWordExtraction('colors', 'color', Color::WHITE);
        $blacks = $word_extraction->getWordExtraction('colors', 'color', Color::BLACK);
        $browns = $word_extraction->getWordExtraction('colors', 'color', Color::BROWN);
        $colors = Color::all();
        $lists = Create::with('colors')->get();
        return view('color.list',
            compact(
                'clears',
                'reds',
                'oranges',
                'yellows',
                'greens',
                'blues',
                'pinks',
                'purples',
                'golds',
                'whites',
                'blacks',
                'browns',
                'colors',
                'lists'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        $colors = Color::all();
        return view('color.detail', compact('details', 'colors'));
    }
}
