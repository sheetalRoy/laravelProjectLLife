@extends('layouts.main')
@section('title','Lung Check')
@section('content')
    <div class="container padd-top lungcheck-home">
        <h1 class="text-center font-bold  lung-register-login">{{ __('lung_check') }}</h1>
        <p class="text-center pb-4 home-text1 ">{{ __('lung_check_text1') }}</p>
    </div>
    <div class="container text-center">
    	@if(!Session::has('user'))
        <a href="{{ url('login') }}" class="home-link1 register-login ajax_anchor">{{ __('register_login') }}</a>
        <a href="{{ url('lungcheck/assessment') }}" class="home-link1 ajax_anchor">{{ __('its_my_first_time_here') }}</a>
        @else
        <a href="{{ url('lungcheck/assessment') }}" class="home-link1 ajax_anchor">{{ (Session::get('user')->results!='null') ? __('new_assessment') : __('its_my_first_time_here') }}</a>
        @endif
        <a href="{{ url('toolbox') }}" class="home-link1 toolbox-anchor ajax_anchor">{{ __('toolbox') }}</a>
    </div>
@endsection