@extends('layouts.main')
@section('title','TOOLBOX')
@section('content')
<div class="container">
	<h1 class="text-center font-bold main-title">TOOLBOX</h1>
</div>
<div class="container">
	<div class="tool-media-object">
		<a title="Map Track"
			@if(Session::has('user'))
				@if(Session::get('countResult') > 1)
					id="" href="{{ url('toolbox/map-track') }}"
				@else
					id="myBtn1" href="javascript:;"
				@endif	
			@endif
			class="block ajax_anchor" >
		<!-- <a id="myBtn1" class="block ajax_anchor" href="{{ (Session::has('user')) ? url('toolbox/map-track') : 'javascript:;' }}" @if(!Session::has('user')) id="myBtn1" @endif title="Map Track"> 
		<a class="block ajax_anchor" href="{{ (Session::has('user')) ? url('toolbox/map-track') : 'javascript:;' }}" @if(!Session::has('user')) id="myBtn1" @endif title="Map Track">-->
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/map-track.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/map-track.png') }}" />
				<img data-src="{{ asset('images/map-track.png') }}" data-srcset="{{ asset('images/map-track.png') }}" loading="lazy"
				class=" lazyloaded" alt="Map Track" src="{{ asset('images/map-track.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Map & Track</h2>
				<p>Track your progress for better results</p>
			</div>
		</a>
		<a class="block ajax_anchor" href="{{ url('toolbox/guide-me') }}" title="Guide Me">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/guidme.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/guidme.png') }}" />
				<img data-src="{{ asset('images/guidme.png') }}" data-srcset="{{ asset('images/guidme.png') }}" loading="lazy" class=" lazyloaded" alt="Guid Me" src="{{ asset('images/guidme.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Guide Me</h2>
				<p>Get personalized tips and tricks to help you progress</p>
			</div>
		</a>
		<a class="block ajax_anchor" href="{{ url('toolbox/talk-to-me') }}" title="Talk Me">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/talk-me.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/talk-me.png') }}" />
				<img data-src="{{ asset('images/talk-me.png') }}" data-srcset="{{ asset('images/talk-me.png') }}" loading="lazy" class=" lazyloaded" alt="Talk Me" src="{{ asset('images/talk-me.png') }}" width="75" height="75">
			</picture>
			<div class="block-body">
				<h2>Talk To Me</h2>
				<p>A guide to good conversations with your health care professional</p>
			</div>
		</a>
		<a class="block ajax_anchor" href="{{ url('toolbox/patients-like-me') }}" title="Patient Like Me">
			<picture>
				<source type="image/webp" data-srcset="{{ asset('images/patient-like-me.webp') }}" />
				<source type="image/png" data-srcset="{{ asset('images/patient-like-me.png') }}" />
				<img data-src="{{ asset('images/patient-like-me.png') }}" data-srcset="{{ asset('images/patient-like-me.png') }}" loading="lazy" class=" lazyloaded" alt="Patient Like Me" src="{{ asset('images/patient-like-me.png') }}" width="75"
				height="75">
			</picture>
			<div class="block-body">
				<h2>Patients Like Me</h2>
				<p>Learn from your health care professional about COPD</p>
			</div>
		</a>
	</div>
</div>
@endsection