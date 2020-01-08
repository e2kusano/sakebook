<?php

namespace App\Http\Controllers;

use App\Models\Base;
use App\Models\Create;
use App\Services\WordExtractionServices;
class BaseController extends Controller
{
    public function index()
    {
        $bases = Base::all();
        return view('base.index', compact('bases'));
    }

    public function showList()
    {
        $word_extration = new WordExtractionServices();
        $tequila = $word_extration->getWordExtraction('bases','base',Base::TEQUILA);
        $jager = $word_extration->getWordExtraction('bases','base',Base::JAGER);
        $cocalero = $word_extration->getWordExtraction('bases','base',Base::COCALERO);
        $gin = $word_extration->getWordExtraction('bases','base',Base::GIN);
        $vodka = $word_extration->getWordExtraction('bases','base',Base::VODKA);
        $rum = $word_extration->getWordExtraction('bases','base',Base::RUM);
        $whiskey = $word_extration->getWordExtraction('bases','base',Base::WHISKEY);
        $liqueur = $word_extration->getWordExtraction('bases','base',Base::LIQUEUR);
        $other = $word_extration->getWordExtraction('bases','base',Base::OTHER);
        $bases = Base::all();
        return view('base.list', compact(
            'tequila',
            'jager',
            'cocalero',
            'gin',
            'vodka',
            'rum',
            'whiskey',
            'liqueur',
            'other',
            'bases'));
    }
}
