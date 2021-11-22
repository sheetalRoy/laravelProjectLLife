<?php

namespace App\Http\Requests;

class ResultsUpdateRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'results' => 'required'
        ];
    }
}
