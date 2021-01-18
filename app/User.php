<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin','tel',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];





   
    public function messages()
    {
        return $this->hasMany('App\Messages', 'recepteur', 'id');
    }

    public function projets()
    {
        return $this->hasMany('App\Article','user_id','id');
    }
}
