@extends('layouts.main')
@section('title','Patients like me')
@section('content')
<div class="container">
    <p class="text-center m-0">TOOLBOX</p>
    <h1 class=" text-center font-bold m-0 main-title">Patients like me</h1>
</div>
<div class="container">
    <div class="patient-container">
        <a class="item" href="{{ asset('videos/elephants-dream.webm') }}" data-fancybox="gallery">
            <img src="{{ asset('images/like-me-one.png') }}" alt="" width="84" height="84" class="person">
            <div class="item-body">
                <h2>Dr Hans Muth</h2>
                <p>Walking with COPD</p>
            </div>
            <img src="{{ asset('images/right-arrow.png') }}" alt="" width="84" height="84" class="angle">
        </a>
        <a class="item" href="{{ asset('videos/sample-mp4-file.mp4') }}" data-fancybox="gallery">
            <img src="{{ asset('images/like-me-two.png') }}" alt="" width="84" height="84" class="person">
            <div class="item-body">
                <h2>Dr Hans Muth</h2>
                <p>Walking with COPD</p>
            </div>
            <img src="{{ asset('images/right-arrow.png') }}" alt="" width="84" height="84" class="angle">
        </a>
        <a class="item" href="{{ asset('videos/elephants-dream.webm') }}" data-fancybox="gallery">
            <img src="{{ asset('images/like-me-three.png') }}" alt="" width="84" height="84" class="person">
            <div class="item-body">
                <h2>Dr Hans Muth</h2>
                <p>Walking with COPD</p>
            </div>
            <img src="{{ asset('images/right-arrow.png') }}" alt="" width="84" height="84" class="angle">
        </a>
        <a class="item" href="{{ asset('videos/sample-mp4-file.mp4') }}" data-fancybox="gallery">
            <img src="{{ asset('images/like-me-four.png') }}" alt="" width="84" height="84" class="person">
            <div class="item-body">
                <h2>Dr Hans Muth</h2>
                <p>Walking with COPD</p>
            </div>
            <img src="{{ asset('images/right-arrow.png') }}" alt="" width="84" height="84" class="angle">
        </a>
    </div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox') }}" class="ajax_anchor home-link1"><i class="arrow1 left"></i> BACK</a></div>
@endsection