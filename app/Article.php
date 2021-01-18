<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table = "articles";

    protected $fillable = [
        'art_nom',
        'art_cathegorie',
        'art_prix',
        'art_ville',
        'art_validation',
        'art_description',
        'user_id',
        'month',
        'year',
        'image',
        'chambres',
        'espace',
        'art_desc',
        'art_meta',
        'art_langtuide',
        'art_latitude',
        'art_address',
        'art_type',


    ];
    public function  getAvatarAttribute(){

        return is_null($this->image) ? 'public/images/default.png': 'public/images/'.$this->image;
    }

    public function user(){

        return $this->belongsTo('App\User','user_id','id');
    }

    public function images()
    {
        return $this->hasMany('App\ArticleImages', 'article_id');
    }
}
