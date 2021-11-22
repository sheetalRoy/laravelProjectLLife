@extends('layouts.main')
@section('title','Mindfullness Tips')
@section('content')
<div class="container text-center">
	<p class="counter slider-count">
		<strong class="current-slide">current-slide</strong> of <strong class="total-slides">Total</strong>
	</p>
	<p class="text-center m-0">TOOLBOX > GUIDE ME</p>
	<h1 class="text-center font-bold m-0 main-title">Mindfullness</h1>
</div>
<div class="container">
	<div class="exercise1-slider-container swiper-container">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
            @php($user_data = Session::get('user'))
            @php($user_results = json_decode($user_data->results))
            @php($user_result_last = end($user_results))
            @php($r = $user_result_last->symptoms + $user_result_last->mental + $user_result_last->functional + $user_result_last->emotions + $user_result_last->fatigue)
            @php($result = floor(($r - 14) / 84 * 100))
            @if($result >= 0 && $result <= 19)
			<div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/mindfullness-light-one.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/mindfullness-light-one.png') }}" />
                        <img data-src="{{ asset('images/mindfullness-light-one.png') }}" data-srcset="{{ asset('images/mindfullness-light-one.png') }}" loading="lazy" class=" lazyloaded" alt="Mindfullness" src="{{ asset('images/mindfullness-light-one.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Why not take a walk up and down the road? Next time, if you feel more confident, why not do it
                    twice and time yourself?</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/mindfullness-light-two.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/mindfullness-light-two.png') }}" />
                        <img data-src="{{ asset('images/mindfullness-light-two.png') }}" data-srcset="{{ asset('images/mindfullness-light-two.png') }}" loading="lazy" class=" lazyloaded" alt="Mindfullness" src="{{ asset('images/mindfullness-light-two.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>You don’t have to go far to exercise, you can do it from your living room. Why not see how many times you can stand up and sit down during the ad breaks?</p>
            </div>
            @elseif($result >= 20 && $result <= 39)
			<div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/mindfullness-medium-one.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/mindfullness-medium-one.png') }}" />
                        <img data-src="{{ asset('images/mindfullness-medium-one.png') }}" data-srcset="{{ asset('images/mindfullness-medium-one.png') }}" loading="lazy" class=" lazyloaded" alt="Mindfullness" src="{{ asset('images/mindfullness-medium-one.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Keeping a ‘Mood Diary’ can help you express your feelings. At the end of each day write down 3
                    good points and 3 difficult points. Give the day an overall score out of 10 with 1 being bad and
                    10 being great.</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/mindfullness-medium-two.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/mindfullness-medium-two.png') }}" />
                        <img data-src="{{ asset('images/mindfullness-medium-two.png') }}" data-srcset="{{ asset('images/mindfullness-medium-two.png') }}" loading="lazy" class="lazyloaded" alt="Mindfullness" src="{{ asset('images/mindfullness-medium-two.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Meditation can really help clear your mind if you’re a bit stressed or anxious. It’s also very
                    good for your breathing because you focus on breaths in and out during the meditation. Why not
                    check out an app like Headspace or Calm?</p>
            </div>
            @elseif($result >= 40 && $result <= 100)
			<div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/mindfullness-strong-two.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/mindfullness-strong-two.png') }}" />
                        <img data-src="{{ asset('images/mindfullness-strong-two.png') }}" data-srcset="{{ asset('images/mindfullness-strong-two.png') }}" loading="lazy" class="lazyloaded" alt="Mindfullness" src="{{ asset('images/mindfullness-strong-two.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Mindfulness can help with anxiety, do a search online for ‘guided meditation’ or explore your
                    phone’s app store. There are lots of good instructional apps out there which you may find
                    useful.</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/mindfullness-strong-one.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/mindfullness-strong-one.png') }}" />
                        <img data-src="{{ asset('images/mindfullness-strong-one.png') }}" data-srcset="{{ asset('images/mindfullness-strong-one.png') }}" loading="lazy" class=" lazyloaded" alt="Mindfullness" src="{{ asset('images/mindfullness-strong-one.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>If you find yourself frequently feeling down try talking to your doctor. They will be able to
                    help in a way that you’re comfortable with. Please don’t just put up with it and hope it will go
                    away.</p>
            </div>
            @endif
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
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/guide-me') }}" class="ajax_anchor home-link1" title="Back"><i
	class="arrow1 left"></i> BACK</a>
</div>
@endsection