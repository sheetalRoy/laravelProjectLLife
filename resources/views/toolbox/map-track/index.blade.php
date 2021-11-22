@extends('layouts.main')
@section('title','MAP & TRACK')
@section('content')
<div class="container">
    <p class="text-center m-0">TOOLBOX</p>
    <h1 class="text-center font-bold mt-0 main-title">MAP & TRACK</h1>
</div>
<div class="container">
    <div class="map-media-object">
        <a class="block ajax_anchor" href="{{ url('toolbox/map-track/my-result') }}" title="My Results">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/my-result.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/my-result.png') }}" />
                <img data-src="{{ asset('images/my-result.png') }}" data-srcset="{{ asset('images/my-result.png') }}" loading="lazy" class=" lazyloaded" alt="My Results" src="{{ asset('images/my-result.png') }}" width="75" height="75">
            </picture>
            <div class="block-body">
                <h2>My Results</h2>
                <p>See your results right now</p>
            </div>
        </a>
        <a class="block ajax_anchor" href="{{ url('toolbox/map-track/progress-tracker') }}" title="Progress Tracker">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/tracker.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/tracker.png') }}" />
                <img data-src="{{ asset('images/tracker.png') }}" data-srcset="{{ asset('images/tracker.png') }}" loading="lazy" class=" lazyloaded" alt="Progress Tracker" src="{{ asset('images/tracker.png') }}">
            </picture>
            <div class="block-body">
                <h2>Progress Tracker</h2>
                <p>A closer look at how you're doing</p>
            </div>
        </a>
        <a class="block ajax_anchor" href="{{ url('toolbox/map-track/understanding-your-progress') }}" title="Understanding Your Progress">
            <picture>
                <source type="image/webp" data-srcset="{{ asset('images/map-track.webp') }}" />
                <source type="image/png" data-srcset="{{ asset('images/map-track.png') }}" />
                <img data-src="{{ asset('images/map-track.png') }}" data-srcset="{{ asset('images/map-track.png') }}" loading="lazy" class=" lazyloaded" alt="Understanding Your Progress" src="{{ asset('images/map-track.png') }}">
            </picture>
            <div class="block-body">
                <h2>Understanding Your Progress</h2>
                <p>Where you're doing well and where you might need help</p>
            </div>
        </a>
    </div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox') }}" class="home-link1 ajax_anchor" title="Back"><i class="arrow1 left"></i> BACK</a></div>
@endsection