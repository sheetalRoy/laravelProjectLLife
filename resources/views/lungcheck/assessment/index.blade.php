@extends('layouts.main')
@section('title','Lung Check Assessment')
@section('content')
<div class="container padd-top lung-check-ass">
    <h1 class="text-center font-bold">{!! __('lung_check_assessment') !!}</h1>
    <p class="text-center pb-4 home-text1">{{ __('lung_check_assessment_home_text_1') }}</p>
    <h4 class="text-center head4">{{ __('lung_check_assessment_you_can') }}</h4>
    <p class="text-center pb-4 home-text1">{{ __('lung_check_assessment_home_text_2') }}</p>
    <p class="text-center pb-4 home-text1">{{ __('lung_check_assessment_home_text_3') }}</p>
    <p class="text-center pb-4 home-text1">{{ __('lung_check_assessment_home_text_4') }}</p>
</div>
<div class="container text-center">
    <a href="{{ url('lungcheck/assessment/breathing') }}" class="home-link1 ajax_anchor get-start">{{ __('get_started') }}</a>
</div>
@endsection