<?php

namespace App\Http\Controllers;


use App\Models\Create;
use App\Models\Split;
use App\Models\Style;
use App\Services\WordExtractionServices;

class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::all();
        return view('style.index', compact('styles'));
    }

    public function showList()
    {
        $word_extraction = new WordExtractionServices();
        $cute = $word_extraction->getWordExtraction('styles', 'style', Style::CUTE);
        $cool = $word_extraction->getWordExtraction('styles', 'style', Style::COOL);
        $simple = $word_extraction->getWordExtraction('styles', 'style', Style::SIMPLE);
        $luxury = $word_extraction->getWordExtraction('styles', 'style', Style::LUXURY);
        $eccentric = $word_extraction->getWordExtraction('styles', 'style', Style::ECCENTRIC);
        $styles = Style::all();
        return view('style.list', compact(
            'cute',
            'cool',
            'simple',
            'luxury',
            'eccentric',
            'styles'));
    }
}
