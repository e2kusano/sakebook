<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function bases()
    {
        return $this->hasMany('App\Models\Base','id','base');
    }

    public function splits()
    {
        return $this->hasMany('App\Models\Split','id','split');
    }

    public function colors()
    {
        return $this->hasMany('App\Models\Color','id','color');
    }

    public function styles()
    {
        return $this->hasMany('App\Models\Style','id','style');
    }

    public function like_users()
    {
        return $this->belongsToMany(User::class,'likes','create_id','user_id')->withTimestamps();
    }
}
