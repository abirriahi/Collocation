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
    protected $table = "collocationbu";


    protected $fillable = [
        'bu_name' , 'bu_price', 'bu_square', 'bu_small_desc', 'bu_large_desc', 'bu_langtuide', 'bu_latitude', 'bu_place', 'bu_rooms', 'bu_status', 'bu_type', 'user_id', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
