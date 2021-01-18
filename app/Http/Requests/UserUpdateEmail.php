<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserUpdateEmail extends Request
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
        $user_id = \Route::current()->getParameter('users');
        return [
            'email' => 'unique:users,email,'.$user_id.'|email|required',
         //  'email' => 'required|email|unique:users,id,' . $this->get('id'),
         //   'email'=>'required|email|unique:users',
          //  'email'=>'required',
           // 'newemail'=>'required|email|unique:users',
        ];
    }
}
