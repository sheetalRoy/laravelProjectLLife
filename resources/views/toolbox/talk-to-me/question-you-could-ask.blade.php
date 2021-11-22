@extends('layouts.main')
@section('title','Questions you might like to ask your doctor')
@section('content')
<div class="container text-center">
    <p class="counter slider-count"><strong class="current-slide">current-slide</strong> of <strong class="total-slides">Total</strong></p>
    <p class="text-center m-0">TOOLBOX > TALK TO ME</p>
    <h1 class="text-center font-bold m-0 main-title mb-0">QUESTIONS YOU SHOULD ASK</h1>
    <p class="sub-tilte-bold smoke"><b>Questions you might like to ask your doctor:</b></p>
</div>
<div class="container">
    <div class="exercise-slider-container swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/ques.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/ques.png') }}" />
                        <img data-src="{{ asset('images/ques.png') }}" data-srcset="{{ asset('images/ques.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/ques.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p class="bold-txt"><b>What treatment do you recommend for me and why?</b></p>
                <p class="question-para">This is to help you understand what your doctor wants to achieve with your
                treatment.</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/ques1.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/ques1.png') }}" />
                        <img data-src="{{ asset('images/ques1.png') }}" data-srcset="{{ asset('images/ques1.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/ques1.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p class="bold-txt"><b>What lifestyle changes can I make that will help me?</b></p>
                <p class="question-para">It’s important to know what you can do to help manage your COPD.</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/ques2.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/ques2.png') }}" />
                        <img data-src="{{ asset('images/ques2.png') }}" data-srcset="{{ asset('images/ques2.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/ques2.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p class="bold-txt"><b>How can you help me stop smoking?</b></p>
                <p class="question-para">If you do smoke and you’ve decided to stop your doctor could help you be
                successful.</p>
            </div>
            <div class="item text-center swiper-slide">
                <div class="item-img">
                    <picture>
                        <source type="image/webp" data-srcset="{{ asset('images/ques3.webp') }}" />
                        <source type="image/png" data-srcset="{{ asset('images/ques3.png') }}" />
                        <img data-src="{{ asset('images/ques3.png') }}" data-srcset="{{ asset('images/ques3.png') }}" loading="lazy" class=" lazyloaded" alt="Better Conversation With Your Doctor" src="{{ asset('images/ques3.png') }}" width="154" height="154">
                    </picture>
                </div>
                <p class="bold-txt"><b>How do I deal with a breathlessness attack?</b></p>
                <p class="question-para">Also known as ‘exacerbations’ these can be worrying but your doctor can
                advise you.</p>
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