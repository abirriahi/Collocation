<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Messages extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "collocationmessages";
    protected $fillable = [
        'emetteur' ,'contenu','recepteur'
    ];

    public function scopeSentByUser($query,$id)/* Boite d'envoi de professionel*/
    {
        return $query->where('emetteur','=',$id)->where('recepteur','=',Auth::user()->id);
    }
    public function scopereceived($query,$id)/*Boite de reception de professionel*/
    {
        return $query->where('recepteur',$id);
    }
    public function scopeRecu($query,$emetteur)
    {
        return $query->where('recepteur','=',$emetteur)->where('emetteur','=',Auth::user()->id);;
    } public function scopeReçu($query,$emetteur)
    {
        return $query->where('recepteur','!=',$emetteur);
    }

    public function user(){

        return $this->belongsTo('App\User','emetteur','id');
    }
    public function users(){

        return $this->belongsTo('App\User','recepteur','id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}