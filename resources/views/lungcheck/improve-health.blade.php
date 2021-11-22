@extends('layouts.main')
@section('title','IMPROVING YOUR HEALTH')
@section('content')
<div class="container text-center  improve-health">
    <h1 class="text-center font-bold">IMPROVING YOUR HEALTH</h1>
    <picture class="text-center">
        <source type="image/webp" data-srcset="{{ asset('images/non-reg.webp') }}" srcset="{{ asset('images/non-reg.webp') }}" />
        <source type="image/png" data-srcset="{{ asset('images/non-reg.png') }}" srcset="{{ asset('images/non-reg.png') }}" />
        <img data-src="{{ asset('images/non-reg.png') }}" data-srcset="{{ asset('images/non-reg.png') }}" loading="lazy" class="lazyloaded result-lung1 improve-img" width="110" height="110" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/non-reg.png') }}" />
    </picture>
    <p class="text-center pb-4 result-text1 pt-1">Get the most from Lung Life by accessing the features within the
        <b>Toolbox</b>. Here you can track and understand your progress, as well as access tips & tricks to help you
        improve your health.</p>
    <div class="w-100 pb-4">
        @if(Session::has('user'))
            <a href="{{ url('toolbox') }}" class="ajax_anchor blue-btn">TOOLBOX</a>
        @else    
            <a id="myBtn" href="#"class="ajax_anchor blue-btn">TOOLBOX</a>
        @endif    
    </div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('lungcheck/assessment/your-score') }}" class="ajax_anchor home-link1" title="Back"><i class="arrow1 left"></i> BACK</a></div>
@endsection