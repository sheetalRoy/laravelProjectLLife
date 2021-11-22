@extends('layouts.main')
@section('title','MAP & TRACK')
@section('content')
   <div class="container">
        <p class="text-center m-0">Toolbox > Map & Track</p>
        <h1 class="text-center font-bold m-0 main-title">My result </h1>
    </div>


    <div class="container text-center">
        <div class="text-center map-track">

          <picture class="text-center">
            <!-- <source type="image/webp" data-srcset="./images/result-lung1.webp" srcset="./images/result-lung1.webp"> -->
            <!-- <source type="image/png" data-srcset="./images/result-lung1.png" srcset="./images/result-lung1.png"> -->
            <img data-src="{{ asset('images/result-lung1.png') }}" data-srcset="{{ asset('images/result-lung1.png') }}" loading="lazy" class="lazyloaded my-result" width="605" height="482" alt="Result Lung Check" title="Result Lung Check" src="{{ asset('images/result-lung1.png') }}">
        </picture>

        <div class="">
			<ul class="left_col">
                <!-- Previous Lung Check result css classname will be in $previousResult array -->
				<li class="{{ ((isset($previousResult['fatigue'])) ? $previousResult['fatigue'] : '') }} p-child"><p>fatigue</p></li>
                <li class="{{ ((isset($previousResult['emotions'])) ? $previousResult['emotions'] : '') }} p-child"><p>emotions</p></li>
				<li class="{{ ((isset($previousResult['functional'])) ? $previousResult['functional'] : '') }} p-child"><p>functional status</p></li>
				<li class="{{ ((isset($previousResult['mental'])) ? $previousResult['mental'] : '') }} p-child"><p>mental status</p></li>
				<li class="{{ ((isset($previousResult['symptoms'])) ? $previousResult['symptoms'] : '') }} p-child"><p>symtoms</p></li>
			</ul>
			<ul class="right_col">
                <li class="{{ ((isset($newResult['fatigue'])) ? $newResult['fatigue'] : '') }} p-child"><p>fatigue</p></li>
				<li class="{{ ((isset($newResult['emotions'])) ? $newResult['emotions'] : '') }} p-child"><p>emotions</p></li>
                <!-- <li class="emotions_poor emotions_needimprovement emotions_good emotions_excellent p-child"><p>emotions</p></li>
				<li class="functional_poor functional_needimprovement functional_good functional_excellent p-child"><p>functional <br> status</p></li>
				<li class="mental_poor mental_needimprovement mental_good mental_excellent p-child"><p>mental status</p></li>
				<li class="symptoms_poor symptoms_needimprovement symptoms_good symptoms_excellent p-child"><p>symtoms</p></li> -->
				<li class="{{ ((isset($newResult['functional'])) ? $newResult['functional'] : '') }} p-child"><p>functional status</p></li>
				<li class="{{ ((isset($newResult['mental'])) ? $newResult['mental'] : '') }} p-child"><p>mental status</p></li>
				<li class="{{ ((isset($newResult['symptoms'])) ? $newResult['symptoms'] : '') }} p-child"><p>symtoms</p></li>
			</ul>
		</div>
        </div>



    </div>

    <div class="container">
        <div class="result-circle">
            <ul class="nav-dots my-result-nav-dots">
              	<li><span class="my-nav-dot"><p class="text"><b id="previous_score">{{ isset($previousResult['prevScore']) ? $previousResult['prevScore'] : 0}}</b><br><strong>Previous score</strong></p></span></li>
                <li><span class="my-nav-dot"><p class="text"><b id="new_score">{{ isset($newResult['newScore']) ? $newResult['newScore'] : 0}}</b><br><strong>New score</strong></p></span></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div>
            <ul class="nav-dots result-nav-dots">
                <li><span class="nav-dot active"></span><br>POOR</li>
                <li><span class="nav-dot"></span><br>NEEDS<br>IMPROVEMENT</li>
                <li><span class="nav-dot"></span><br>GOOD</li>
                <li><span class="nav-dot"></span><br>EXCELLENT</li>
            </ul>
        </div>
    </div>

    <div class="container text-center">
		<a href="javascript:;" class="copd-link" id="what-modal-show">What does my overall score mean?</a>
	</div>

    <div class="prev-button w-100 pb-4"><a href="{{ url('toolbox/map-track') }}" class="ajax_anchor home-link1" title="Back"><i class="arrow1 left"></i> BACK</a></div>



@endsection