@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')
<div class="container">
	<p class="text-center m-0">TOOLBOX</p>
	<h1 class=" text-center font-bold m-0 main-title">Guide me</h1>
</div>
<div class="container">
	<div class="tool-media-object guid-media-object">
		<a class="block ajax_anchor" title="Exercise Tips" href="{{ url('toolbox/guide-me/exercise-tips') }}">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/exerise-tips.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/exerise-tips.png') }}" />
				<img data-src="{{ asset('images/exerise-tips.png') }}" data-srcset="{{ asset('images/exerise-tips.png') }}" loading="lazy" class=" lazyloaded" alt="Exercise Tips" src="{{ asset('images/exerise-tips.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Exercise Tips</h2>
				<p>Fitness ideas to help your COPD</p>
			</div>
		</a>
		<a class="block ajax_anchor" title="Mindfulness" href="{{ url('toolbox/guide-me/mindfullness') }}">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/mindfullness.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/mindfullness.png') }}" />
				<img data-src="{{ asset('images/mindfullness.png') }}" data-srcset="{{ asset('images/mindfullness.png') }}" loading="lazy" class=" lazyloaded" alt="Mindfulness" src="{{ asset('images/mindfullness.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Mindfulness</h2>
				<p>A calm mind can help you cope</p>
			</div>
		</a>
		<a class="block ajax_anchor" title="Environmental" href="{{ url('toolbox/guide-me/environmental') }}">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/flower.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/flower.jpg') }}" />
				<img data-src="{{ asset('images/environmental.png') }}" data-srcset="{{ asset('images/environmental.png') }}" loading="lazy" class=" lazyloaded" alt="Environmental" src="{{ asset('images/environmental.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Environmental</h2>
				<p>How your surroundings can affect you</p>
			</div>
		</a>
		<a class="block ajax_anchor" title="Stopping Smoking" href="{{ url('toolbox/guide-me/stop-smoking') }}">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/stopping.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/stopping.png') }}" />
				<img data-src="{{ asset('images/stopping.png') }}" data-srcset="{{ asset('images/stopping.png') }}" loading="lazy" class="lazyloaded" alt="Stopping Smoking" src="{{ asset('images/stopping.png') }}">
			</picture>
			<div class="block-body">
				<h2>Stopping Smoking</h2>
				<p>It's not easy but it is possible</p>
			</div>
		</a>
	</div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox') }}" class="home-link1 ajax_anchor" title="Back"><i class="arrow1 left"></i> BACK</a></div>
@endsection