<?php

namespace App\Http\Requests;

class ForgotRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'email' => 'required|email'
        ];
    }
}
