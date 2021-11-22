@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')
<div class="container text-center">
	<p class="counter slider-count"><strong class="current-slide">current-slide</strong> of <strong class="total-slides">Total</strong></p>
	<p class="text-center m-0">TOOLBOX > GUIDE ME</p>
	<h1 class="text-center font-bold m-0 main-title mb-0">environmental</h1>
	<p class="sub-tilte-bold"><b>Do an online search or have a look on the App store for air quality trackers. On high pollution days:</b></p>
</div>
<div class="container">
	<div class="exercise-slider-container swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/environmental.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/environmental.png') }}" />
						<img data-src="{{ asset('images/environmental.png') }}" data-srcset="{{ asset('images/environmental.png') }}" loading="lazy" class=" lazyloaded" alt="Environmental" src="{{ asset('images/environmental.png') }}"
						width="154" height="154">
					</picture>
				</div>
				<p>Reduce or avoid strenuous outdoor exercise. Protect yourself on high pollution days by moving
				your exercise indoors instead.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/environmental-two.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/environmental-two.png') }}" />
						<img data-src="{{ asset('images/environmental-two.png') }}" data-srcset="{{ asset('images/environmental-two.png') }}" loading="lazy" class=" lazyloaded" alt="Environmental" src="{{ asset('images/environmental-two.png') }}" width="154" height="154" />
					</picture>
				</div>
				<p>Keep away from busy roads and other pollution hotspots. If possible, use your phone’s maps app to plan alternative routes.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/environmental-three.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/environmental-three.png') }}" />
						<img data-src="{{ asset('images/environmental-three.png') }}" data-srcset="{{ asset('images/environmental-three.png') }}" loading="lazy" class=" lazyloaded" alt="Environmental" src="{{ asset('images/environmental-three.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Plan your morning to get to work before rush hour begins. This will help you avoid times of high
				pollution build up.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/environmental-four.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/environmental-four.png') }}" />
						<img data-src="{{ asset('images/environmental-four.png') }}" data-srcset="{{ asset('images/environmental-four.png') }}" loading="lazy" class=" lazyloaded" alt="Environmental" src="{{ asset('images/environmental-four.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Keep your medication with you at all times. If you use an inhaler, ensure you place it in your
				bag or pocket before you set off.</p>
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
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/guide-me') }}" class="ajax_anchor home-link1" title="Back"><i class="arrow1 left"></i> BACK</a>
</div>
@endsection