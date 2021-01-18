<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'art_nom' => 'required|min:5|max:100',
            'art_cathegorie' => 'required',
            'art_prix' => 'required|integer',
          // 'art_validation'=> 'required|integer',
            'art_description'=> 'required|min:5',
             'image' => 'mimes:png,jpg,jpeg',
             'art_ville' =>'required',
             'chambres' =>'required',
            'art_latitude' => 'max:100',
            'art_langtuide' => 'max:100',
            'art_address' => 'required|max:200',
            'espace' =>'required|integer',
     
        ];
    }



}
