<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function likes()
    {
        return $this->belongsToMany(Create::class, 'likes', 'user_id', 'create_id')->withTimestamps();
    }

    //いいねを押しているか確認　戻り値はbool
    public function is_like($createId)
    {
        return $this->likes()->where('create_id',$createId)->exists();
    }

    //いいねを付けるメソッド
    public function like($createId)
    {
        //いいねの有無を変数$existに格納
        $exist = $this->is_like($createId);

        //いいねしている場合、外す
        if($exist){
            return false;
        //いいねしていない場合、付ける
        }else{
            $this->likes()->attach($createId);
            return true;
        }
    }

    //いいねを外すメソッド
    public function unlike($createId)
    {
        $exist = $this->is_like($createId);

        if($exist){
            $this->likes()->detach($createId);
            return true;
        }else{
            return false;
        }
    }
}
