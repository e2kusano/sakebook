<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    public function Abvs()
    {
        return $this->hasMany('App\Models\Abv','abvs.id','abv');
    }
}
