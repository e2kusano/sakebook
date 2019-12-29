<?php

namespace App\Services;

use App\Models\Create;

class WordExtractionServices
{
    public function getWordExtraction($with, $column, $word) {
        $word_extract = Create::with($with)->where($column, $word)->paginate(10);
        return $word_extract;
    }
}