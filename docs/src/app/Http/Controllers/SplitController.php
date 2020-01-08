<?php

namespace App\Http\Controllers;

use App\Models\Split;
use App\Models\Create;
use App\Services\WordExtractionServices;

class splitController extends Controller
{
    public function index()
    {
        $splits = Split::all();
        return view('split.index', compact('splits'));
    }

    public function showList()
    {
        $word_extraction = new WordExtractionServices();
        $alcohol = $word_extraction->getWordExtraction('splits', 'split', Split::ALCOHOL);
        $soda = $word_extraction->getWordExtraction('splits', 'split', Split::SODA);
        $tonic = $word_extraction->getWordExtraction('splits', 'split', Split::TONIC);
        $ginger = $word_extraction->getWordExtraction('splits', 'split', Split::GINGER);
        $cola = $word_extraction->getWordExtraction('splits', 'split', Split::COLA);
        $orange = $word_extraction->getWordExtraction('splits', 'split', Split::ORANGE);
        $grapefruit = $word_extraction->getWordExtraction('splits', 'split', Split::GRAPEFRUIT);
        $pineapple = $word_extraction->getWordExtraction('splits', 'split', Split::PINEAPPLE);
        $redbull = $word_extraction->getWordExtraction('splits', 'split', Split::REDBULL);
        $tea = $word_extraction->getWordExtraction('splits', 'split', Split::TEA);
        $milk = $word_extraction->getWordExtraction('splits', 'split', Split::MILK);
        $other = $word_extraction->getWordExtraction('splits', 'split', Split::OTHER);
        $splits = Split::all();
        return view('split.list', compact(
            'alcohol',
            'soda',
            'tonic',
            'ginger',
            'cola',
            'orange',
            'grapefruit',
            'pineapple',
            'redbull',
            'tea',
            'milk',
            'other',
            'splits'));
    }
}
