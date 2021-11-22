<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;


class LungageController extends Controller
{
    public function lungageResult(Request $request)
    {
        return view('lungage.assessment.results');
    }
}
