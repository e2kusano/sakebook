<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User','user.id');
    }

    public function abvs()
    {
        return $this->hasMany('App\Models\Abv','id','abv');
    }

    public function colors()
    {
        return $this->hasMany('App\Models\Color','id','color');
    }

    public function splits()
    {
        return $this->hasMany('App\Models\Split','id','split');
    }

    public function tastes()
    {
        return $this->hasMany('App\Models\Taste','id','taste');
    }

    public function glass_types()
    {
        return $this->hasMany('App\Models\GlassType','id','glass_type');
    }

    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe','id','recipe');
    }

    public function styles()
    {
        return $this->hasMany('App\Models\Style','id','style');
    }
}
