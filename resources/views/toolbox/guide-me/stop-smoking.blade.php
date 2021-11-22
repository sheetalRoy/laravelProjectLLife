@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')
<div class="container text-center">
	<p class="counter slider-count"><strong class="current-slide">current-slide</strong> of <strong class="total-slides">Total</strong></p>
	<p class="text-center m-0">TOOLBOX > GUIDE ME</p>
	<h1 class="text-center font-bold m-0 main-title mb-0">stopping smoking</h1>
	<p class="sub-tilte-bold smoke"><b>Stopping isn’t easy but the health benefits are huge:</b></p>
</div>
<div class="container">
	<div class="exercise-slider-container swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/smoke-one.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/smoke-one.png') }}" />
						<img data-src="{{ asset('images/smoke-one.png') }}" data-srcset="{{ asset('images/smoke-one.png') }}" loading="lazy" class=" lazyloaded" alt="Stopping Smoking" src="{{ asset('images/smoke-one.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Decide on a date to stop smoking. Plan this around any social events coming up so it’s easier to
				stick with it.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/smoke-two.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/smoke-two.png') }}" />
						<img data-src="{{ asset('images/smoke-two.png') }}" data-srcset="{{ asset('images/smoke-two.png') }}" loading="lazy" class=" lazyloaded" alt="Stopping Smoking" src="{{ asset('images/smoke-two.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Do you know anyone who might want to stop smoking too? Quitting with someone else can be a huge
				support.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/smop-three.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/smop-three.png') }}" />
						<img data-src="{{ asset('images/smop-three.png') }}" data-srcset="{{ asset('images/smop-three.png') }}" loading="lazy" class=" lazyloaded" alt="Stopping Smoking" src="{{ asset('images/smop-three.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Try a local NHS stop smoking service or look for support online. Why not take a look at the NHS
				Smokefree Website?</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/smoke-four.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/smoke-four.png') }}" />
						<img data-src="{{ asset('images/smoke-four.png') }}" data-srcset="{{ asset('images/smoke-four.png') }}" loading="lazy" class=" lazyloaded" alt="Stopping Smoking" src="{{ asset('images/smoke-four.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Speak to a health care professional about nicotine replacement, like patches, mints or sprays.
				They can reduce cravings and help you cope.</p>
			</div>
		</div>
		  <!-- If we need navigation buttons -->
		  <div class="swiper-button-prev"><i class="arrow1 left" style="margin-right: 6px;"></i>  prev</div>
          <div class="swiper-button-next">next  <i class="arrow1 right" style="margin-left: 6px;"></i></div>
          
		<!-- If we need pagination -->
		<div class="swiper-pagination swiper-pagination-clickable"></div>
		<!-- If we need scrollbar -->
		<div class="swiper-scrollbar"></div>
	</div>
</div>
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/guide-me') }}" class="ajax_anchor home-link1" title="Back"><i class="arrow1 left"></i> BACK</a></div>
@endsection