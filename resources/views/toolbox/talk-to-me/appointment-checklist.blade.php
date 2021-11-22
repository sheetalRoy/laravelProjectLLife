@extends('layouts.main')
@section('title','Appointment Checklist')
@section('content')
<div class="container">
    <p class="text-center m-0">TOOLBOX > TALK TO ME</p>
    <h1 class="text-center font-bold m-0 main-title mb-0">Appointment Checklist</h1>
    <p class="sub-tilte-bold check"><b>What to check before your appointment:</b>
</div>
<div class="container">
    <div class="check-list-section text-center">
        <div class="item-img">
            <img src="{{ asset('images/toolbox_img3.png') }}" alt="" width="154" height="154">
        </div>
        <ul>
            <li>I have read and understood my Lung Life results.</li>
            <li>I have my Lung Life results to show to my doctor.</li>
            <li>I have thought about the questions I want to ask my doctor.</li>
            <li>I have thought about what I want to get out of the appointment.</li>
        </ul>
    </div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/talk-to-me') }}" class="ajax_anchor home-link1"><i class="arrow1 left"></i> BACK</a></div>
@endsection