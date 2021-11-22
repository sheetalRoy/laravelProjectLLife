@extends('layouts.main')
@section('title','better conversation')
@section('content')
<div class="container text-center">
	<p class="counter slider-count"><strong class="current-slide">current-slide</strong> of <strong class="total-slides">Total</strong></p>
	<p class="text-center m-0">TOOLBOX > TALK TO ME</p>
	<h1 class="text-center font-bold m-0 main-title mb-0">better conversation <br>WITH YOUR DOCTOR</h1>
	<p class="sub-tilte-bold smoke"><b>How to steer the conversation with your doctor:</b></p>
</div>
<div class="container">
	<div class="exercise-slider-container swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/toolbox-conversation.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/toolbox-conversation.png') }}" />
						<img data-src="{{ asset('images/toolbox-conversation.png') }}" data-srcset="{{ asset('images/toolbox-conversation.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/toolbox-conversation.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Decide on goals you want to achieve, tell your doctor and ask how they can help.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/better2.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/better2.png') }}" />
						<img data-src="{{ asset('images/better2.png') }}" data-srcset="{{ asset('images/better2.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/better2.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Prepare questions before your appointment, write them down and take them with you.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/better3.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/better3.png') }}" />
						<img data-src="{{ asset('images/better2.png') }}" data-srcset="{{ asset('images/better3.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/better3.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Prepare questions before your appointment, write them down and take them with you.</p>
			</div>
			<div class="item text-center swiper-slide">
				<div class="item-img">
					<picture>
						<source type="image/webp" data-srcset="{{ asset('images/better4.webp') }}" />
						<source type="image/png" data-srcset="{{ asset('images/better4.png') }}" />
						<img data-src="{{ asset('images/better2.png') }}" data-srcset="{{ asset('images/better4.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/better4.png') }}" width="154" height="154">
					</picture>
				</div>
				<p>Consider taking a close friend or family member with you.</p>
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
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/talk-to-me') }}" class="ajax_anchor home-link1" title="Back"><i class="arrow1 left"></i> BACK</a></div>
@endsection