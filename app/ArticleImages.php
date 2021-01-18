<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleImages extends Model
{
    protected  $table = "articles_images";

    protected $fillable = [
        'path',
        'article_id',
    ];

    public function article()
    {
        return $this->belongsTo('App\Article', 'article_id');
    }

}
