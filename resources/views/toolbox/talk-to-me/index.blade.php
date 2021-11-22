@extends('layouts.main')
@section('title','TALK TO ME')
@section('content')
<div class="container">
	<p class="text-center m-0">TOOLBOX</p>
	<h1 class="text-center font-bold mt-0 main-title">TALK TO ME</h1>
</div>
<div class="container">
	<div class="map-media-object talk-to-me-oject">
		<a class="block ajax_anchor" href="{{ url('toolbox/talk-to-me/better-conversations') }}" title="BETTER CONVERSATION WITH YOUR DOCTOR">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/talk-me.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/talk-me.png') }}" />
				<img data-src="{{ asset('images/talk-me.png') }}" data-srcset="{{ asset('images/talk-me.png') }}" loading="lazy"
				class=" lazyloaded" alt="Talk To Me" src="{{ asset('images/talk-me.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>BETTER CONVERSATION WITH YOUR DOCTOR</h2>
				<p>How to have a better conversation with your doctor and make yourself heard</p>
			</div>
		</a>
		<a class="block ajax_anchor" href="{{ url('toolbox/talk-to-me/question-you-could-ask') }}" title="Questions you could ask">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/toolbox_img2.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/toolbox_img2.png') }}" />
				<img data-src="{{ asset('images/toolbox_img2.png') }}" data-srcset="{{ asset('images/toolbox_img2.png') }}" loading="lazy" class=" lazyloaded" alt="Talk To Me" src="{{ asset('images/toolbox_img2.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Questions you could ask</h2>
				<p>Suggestions to help you get more from your appointments</p>
			</div>
		</a>
		<a class="block ajax_anchor" href="{{ url('toolbox/talk-to-me/appointment-checklist') }}" title="Appointment Checklist">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/toolbox_img3.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/toolbox_img3.png') }}" />
				<img data-src="{{ asset('images/toolbox_img3.png') }}" data-srcset="{{ asset('images/toolbox_img3.png') }}" loading="lazy" class=" lazyloaded" alt="Talk To Me" src="{{ asset('images/toolbox_img3.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Appointment Checklist</h2>
				<p>Things to do before your next appointment</p>
			</div>
		</a>
	</div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox') }}" class="home-link1 ajax_anchor" title="Back"><i class="arrow1 left"></i> BACK</a></div>
@endsection