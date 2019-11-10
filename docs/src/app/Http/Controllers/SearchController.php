<?php

namespace App\Http\Controllers;

use App\Models\Create;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function result(Request $request)
    {
        $keyword = $request->input('keyword');

        $query = Create::query();

        if(!empty($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }
        $data = $query->get()->toArray();

        return view('search.result', compact('keyword', 'data'));
    }
}
