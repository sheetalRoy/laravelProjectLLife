@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')
<div class="container slider-head">
    <p class="text-center pb-4 home-text1 step_counter">7 of 14</p>
    <p class="text-center pb-4 home-text1 step_counter slide-subtitle">ON AVERAGE, DURING THE PAST WEEK, HOW LIMITED WERE YOU IN THESE ACTIVITIES BECAUSE OF YOUR BREATHING PROBLEMS</p>
    <h1 class="text-center font-bold">STRENUOUS PHYSICAL ACTIVITIES (SUCH AS CLIMBING STAIRS, RUSHING, DOING SPORTS)?</h1>
    <div class="check-form">
      <form id="form_assessment">
            <div class="form-group">
                <label class="checkbox" for="not">
                    <input type="checkbox" id="not" class="p3q1" value="1">
                    <div class="checkbox_box"></div>
                    NOT LIMITED AT ALL
                </label>
            </div>

            <div class="form-group">
                <label class="checkbox" for="very">
                    <input type="checkbox" id="very" class="p3q1" value="2">
                    <div class="checkbox_box"></div>
                    VERY SLIGHTLY LIMITED
                </label>
            </div>

            <div class="form-group">
                <label class="checkbox" for="slightly">
                    <input type="checkbox" id="slightly" class="p3q1" value="3">
                    <div class="checkbox_box"></div>
                    SLIGHTLY LIMITED
                </label>
            </div>

            <div class="form-group">
                <label class="checkbox" for="limited">
                    <input type="checkbox" id="limited" class="p3q1" value="4">
                    <div class="checkbox_box"></div>
                    LIMITED
                </label>
            </div>

            <div class="form-group">
                <label class="checkbox" for="moderately">
                    <input type="checkbox" id="moderately" class="p3q1" value="5">
                    <div class="checkbox_box"></div>
                    MODERATELY LIMITED
                </label>
            </div>

            <div class="form-group">
                <label class="checkbox" for="extreamly">
                    <input type="checkbox" id="extreamly" class="p3q1" value="6">
                    <div class="checkbox_box"></div>
                    EXTREAMLY LIMITED
                </label>
            </div>

            <div class="form-group">
                <label class="checkbox" for="totally">
                    <input type="checkbox" id="totally" class="p3q1" value="7">
                    <div class="checkbox_box"></div>
                    TOTALLY LIMITED
                </label>
            </div>

        </form>
    </div>
</div>
<div class="container3 text-center">
    <div class="prev-button"><a href="{{ url('lungcheck/assessment/general/phlegm') }}" class="home-link1 ajax_anchor"><i class="arrow1 left"></i> {{ __('back') }}</a></div>
    <div class="next-button"><a href="{{ url('lungcheck/assessment/activities/moderate') }}" class="home-link1 ajax_anchor" onclick="assessChange($('.p3q1:checked'), 'p3q1')">{{ __('next') }} <i class="arrow1 right"></i></a></div>
</div>
<div class="container3 text-center">
    <ul class="nav-dots">
        <li><a href="{{ url('lungcheck/assessment/activities') }}" class="nav-dot active ajax_anchor"></a></li>
        <li><a href="{{ url('lungcheck/assessment/activities/moderate') }}" class="nav-dot ajax_anchor"></a></li>
        <li><a href="{{ url('lungcheck/assessment/activities/daily') }}" class="nav-dot ajax_anchor"></a></li>
        <li><a href="{{ url('lungcheck/assessment/activities/social') }}" class="nav-dot ajax_anchor"></a></li>
    </ul>
</div>
@endsection