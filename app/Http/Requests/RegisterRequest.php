<?php

namespace App\Http\Requests;

class RegisterRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email'
        ];
    }
}
