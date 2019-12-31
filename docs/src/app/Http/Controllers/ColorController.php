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
        $clear = $word_extraction->getWordExtraction('colors', 'color', Color::CLEAR);
        $red = $word_extraction->getWordExtraction('colors', 'color', Color::RED);
        $orange = $word_extraction->getWordExtraction('colors', 'color', Color::ORANGE);
        $yellow = $word_extraction->getWordExtraction('colors', 'color', Color::YELLOW);
        $green = $word_extraction->getWordExtraction('colors', 'color', Color::GREEN);
        $blue = $word_extraction->getWordExtraction('colors', 'color', Color::BLUE);
        $pink = $word_extraction->getWordExtraction('colors', 'color', Color::PINK);
        $purple = $word_extraction->getWordExtraction('colors', 'color', Color::PURPLE);
        $gold = $word_extraction->getWordExtraction('colors', 'color', Color::GOLD);
        $white = $word_extraction->getWordExtraction('colors', 'color', Color::WHITE);
        $black = $word_extraction->getWordExtraction('colors', 'color', Color::BLACK);
        $brown = $word_extraction->getWordExtraction('colors', 'color', Color::BROWN);
        $colors = Color::all();
        return view('color.list',
            compact(
                'clear',
                'red',
                'orange',
                'yellow',
                'green',
                'blue',
                'pink',
                'purple',
                'gold',
                'white',
                'black',
                'brown',
                'colors'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        $colors = Color::all();
        return view('color.detail', compact('details', 'colors'));
    }
}
