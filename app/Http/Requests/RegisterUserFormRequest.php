<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            

            'username'=>'required|unique:users|max:5',
            'email'=>'required|email|unique:employee',
            'password'=>'required|alpha_dash|between:6,10',
            'roleId'=>'required|integer|max:10'
            
        ];
    }
}
