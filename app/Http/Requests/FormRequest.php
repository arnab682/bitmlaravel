<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequest extends FormRequest
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
            //
            'name' => 'required|max:20|min:5',
            'picture' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'hobby' => 'required',
            'skills' => 'required',
            'bio' => 'required|max:200|min:15',
            'select_file'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }
}
