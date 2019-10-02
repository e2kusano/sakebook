<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'name',
        'abv',
        'color',
        'split',
        'taste',
        'glass_type',
        'recipe',
        'flavor',
        'image_url',
        'detail'
    ];
}
