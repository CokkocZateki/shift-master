<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRosterRequest extends FormRequest
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
            
            'rosterStartDate'=>'required|date|unique:rosters,start_date|roster_start_date',
            'rosterEndDate'=>'required|date|roster_end_date:rosterStartDate'
        ];
    }
}
