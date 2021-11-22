<?php

namespace App\Http\Requests;

class UpdateRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'new_email' => 'required|email'
        ];
    }
}
