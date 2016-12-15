<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
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
        $id = $this->route('id');

            return [
            
            'firstName'=>'required|max:15',
            'lastName'=>'required|max:15',
            'email'=>['required',Rule::unique('employee')->ignore($id)],
            'roleId'=>'required|integer|max:10',
            'phoneNumber'=>'required|digits:10',
        ];
        
    }
}
