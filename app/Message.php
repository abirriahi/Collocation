<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Message extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "messages";
    protected $fillable = [
        'recepteur','contenu','emetteur',
    ];

    public function scopeSentByUser($query,$id)/* Boite d'envoi de professionel*/
    {
        return $query->where('emetteur',$id);
    }
    public function scopereceived($query,$id)/*Boite de reception de professionel*/
    {
        return $query->where('recepteur',$id);
    }
    public function scopeRecu($query,$recepteur) /* fonction d'affichage boite reception de professionel*/
    {
        return $query->where('emetteur','!=', $recepteur);
    }

    public function user(){

        return $this->belongsTo('App\User','emetteur','id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}