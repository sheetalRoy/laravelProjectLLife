@extends('layouts.main')
@section('title','Exercise Tips')
@section('content')
<div class="container text-center">
	<p class="counter slider-count"><strong class="current-slide">current-slide</strong> of <strong class="total-slides">Total</strong></p>
	<p class="text-center m-0">TOOLBOX > GUIDE ME</p>
	<h1 class="text-center font-bold m-0 main-title">exercise tips</h1>
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
                        <source type="image/webp" data-srcset="{{ asset('images/tips-one.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/tips-one.png') }}" />
                        <img data-src="{{ asset('images/tips-one.png') }}" data-srcset="{{ asset('images/tips-one.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/tips-one.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>At your local gym try mixing rowing or cycling, with some weights. Cardio and strength training can be a good way to build up overall fitness, which is helpful when managing your COPD.</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/tips-two.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/tips-two.png') }}" />
                        <img data-src="{{ asset('images/tips-two.png') }}" data-srcset="{{ asset('images/tips-two.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/tips-two.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Swimming is really good exercise and good breathing training, which could be beneficial for your COPD. Why not check your nearest swimming pool to see if they have classes?</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/tips-three.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/tips-three.png') }}" />
                        <img data-src="{{ asset('images/tips-three.png') }}" data-srcset="{{ asset('images/tips-three.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/tips-three.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Classes in Tai Chi, Yoga or Pilates can be great exercise. Why not have a look online to find where your nearest classes are? You could probably try one out before committing, to see what you enjoy most.</p>
            </div>
            @elseif($result >= 20 && $result <= 39)
			<div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/exercise-tips-midum-one.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/exercise-tips-midum-one.png') }}" />
                        <img data-src="{{ asset('images/exercise-tips-midum-one.png') }}" data-srcset="{{ asset('images/exercise-tips-midum-one.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/exercise-tips-midum-one.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>You don’t have to go outside to exercise. Even getting up to do your normal housework can help you feel better. If you can, gardening is a great way to get some movement and fresh air at the same time.</p>
            </div>
			<div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/exercise-tips-midum-two.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/exercise-tips-midum-two.png') }}" />
                        <img data-src="{{ asset('images/exercise-tips-midum-two.png') }}" data-srcset="{{ asset('images/exercise-tips-midum-two.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/exercise-tips-midum-two.png') }}">
                    </picture>
                </div>
                <p>Singing classes can be good fun and great exercise for your lungs. One of the benefits of learning to sing is that you learn to control your breathing, which can be helpful for people with COPD.</p>
            </div>
			<div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/exercise-tips-midum-three.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/exercise-tips-midum-three.png') }}" />
                        <img data-src="{{ asset('images/exercise-tips-midum-three.png') }}" data-srcset="{{ asset('images/exercise-tips-midum-three.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/exercise-tips-midum-three.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>You don’t have to exercise alone. Why not go for a walk with a friend? If the weather isn’t good, then why not find somewhere indoors like a shopping mall?</p>
            </div>
            @elseif($result >= 40 && $result <= 100)
			<div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/exercise-tips-strong-one.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/exercise-tips-strong-one.png') }}" />
                        <img data-src="{{ asset('images/exercise-tips-strong-one.png') }}" data-srcset="{{ asset('images/exercise-tips-strong-one.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/exercise-tips-strong-one.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Why not take a walk up and down the road? Next time, if you feel more confident, why not do it twice and time yourself?</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/exercise-tips-strong-two.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/exercise-tips-strong-two.png') }}" />
                        <img data-src="{{ asset('images/exercise-tips-strong-two.png') }}" data-srcset="{{ asset('images/exercise-tips-strong-two.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/exercise-tips-strong-two.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>You don’t have to go far to exercise, you can do it from your living room. Why not see how many times you can stand up and sit down during the ad breaks?</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/exercise-tips-strong-three.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/exercise-tips-strong-three.png') }}" />
                        <img data-src="{{ asset('images/exercise-tips-strong-three.png') }}" data-srcset="{{ asset('images/exercise-tips-strong-three.png') }}" loading="lazy" class="lazyloaded" alt="Exercise Tips" src="{{ asset('images/exercise-tips-strong-three.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p>Lay on your bed, now sit on the edge, now stand up. And repeat. How many sets can you do? Try doing this every other morning. It can help to give yourself a specific time to exercise.</p>
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
<div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/guide-me') }}" class="ajax_anchor home-link1"><i class="arrow1 left" title="Back"></i> BACK</a></div>
@endsection