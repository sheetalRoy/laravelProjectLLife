<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'max:100'],
            'age' => 'required',
            'cigarettes_per_day' => 'required',
            'gender' => 'required',
            'height' => 'required',
            //'locale' => 'required',
            'lung_age' => 'required',
            'smoking_years' => 'required',
            //'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'email.max:100' => 'Email is too long!'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
