<?php

namespace App\Http\Controllers;

use App\Models\Abv;
use App\Models\Create;
use App\Services\WordExtractionServices;

class AbvController extends Controller
{
    public function index()
    {
        $abvs = Abv::all();
        return view('abv.index', compact('abvs'));
    }

    public function showList()
    {
        $word_extraction = new WordExtractionServices();
        $low = $word_extraction->getWordExtraction('abvs', 'abv', Abv::LOW);
        $soso = $word_extraction->getWordExtraction('abvs', 'abv', Abv::SOSO);
        $high = $word_extraction->getWordExtraction('abvs', 'abv', Abv::HIGH);
        $abvs = Abv::all();
        return view('abv.list', compact(
            'low',
            'soso',
            'high',
            'abvs'));
    }

    public function detail($id)
    {
        $details = Create::find($id);
        $abvs = Abv::all();
        return view('abv.detail', compact('details', 'abvs'));
    }
}
