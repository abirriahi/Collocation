<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;



class EditPasswordAdminRequest extends Request
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

            'password' => 'required',
            'newpassword' =>'required|alpha_num|between:6,12',
            'password_confirmation' => 'same:newpassword|required',
        ];
    }
}
