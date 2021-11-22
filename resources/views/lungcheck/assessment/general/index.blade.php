@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')
<div class="container slider-head">
    <p class="text-center pb-4 home-text1 step_counter">5 of 14</p>
    <p class="text-center pb-4 home-text1 step_counter slide-subtitle">IN GENERAL, DURING THE PAST WEEK, HOW MUCH OF THE TIME:</p>
    <h1 class="text-center font-bold">DID YOU COUGH?</h1>
    <div class="check-form">
    <form id="form_assessment">
        <div class="form-group">
            <label class="checkbox" for="never">
                <input type="checkbox" id="never" class="p2q1" value="1">
                <div class="checkbox_box"></div>
                NEVER
            </label>
        </div>

        <div class="form-group">
            <label class="checkbox" for="hardly">
                <input type="checkbox" id="hardly" class="p2q1" value="2">
                <div class="checkbox_box"></div>
                HARDLY EVER
            </label>
        </div>

        <div class="form-group">
            <label class="checkbox" for="few">
                <input type="checkbox" id="few" class="p2q1" value="3">
                <div class="checkbox_box"></div>
                A FEW TIMES
            </label>
        </div>

        <div class="form-group">
            <label class="checkbox" for="several">
                <input type="checkbox" id="several" class="p2q1" value="4">
                <div class="checkbox_box"></div>
                SEVERAL TIMES
            </label>
        </div>

        <div class="form-group">
            <label class="checkbox" for="many">
                <input type="checkbox" id="many" class="p2q1" value="5">
                <div class="checkbox_box"></div>
                MANY TIMES
            </label>
        </div>

        <div class="form-group">
            <label class="checkbox" for="great">
                <input type="checkbox" id="great" class="p2q1" value="6">
                <div class="checkbox_box"></div>
                A GREAT MANY TIMES
            </label>
        </div>

        <div class="form-group">
            <label class="checkbox" for="almost">
                <input type="checkbox" id="almost" class="p2q1" value="7">
                <div class="checkbox_box"></div>
                ALOMOST ALL THE TIMES
            </label>
        </div>

    </form>
    </div>
</div>
<div class="container3 text-center">
    <div class="prev-button"><a href="{{ url('lungcheck/assessment/breathing/depressed') }}" class="home-link1 ajax_anchor"><i class="arrow1 left"></i> {{ __('back') }}</a></div>
    <div class="next-button"><a href="{{ url('lungcheck/assessment/general/phlegm') }}" class="home-link1 ajax_anchor" onclick="assessChange($('.p2q1:checked'), 'p2q1')">{{ __('next') }} <i class="arrow1 right"></i></a></div>
</div>
<div class="container3 text-center">
    <ul class="nav-dots">
        <li><a href="{{ url('lungcheck/assessment/general') }}" class="nav-dot active ajax_anchor"></a></li>
        <li><a href="{{ url('lungcheck/assessment/general/phlegm') }}" class="nav-dot ajax_anchor"></a></li>
    </ul>
</div>
@endsection