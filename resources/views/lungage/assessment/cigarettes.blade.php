@extends('layouts.main')
@section('title','Lung Age')
@section('content')


<div class="range_slide">
	<div class="gender_div text-center cigarete-head">
		<h1>NUMBER OF CIGARETTES SMOKED PER DAY</h1>
				
		<div class="circular-progress">
			<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' aria-labelledby='title' role='graphic'>

				<defs>
					<linearGradient id="cl1">
						<stop offset="0%" stop-color="#AFD7B8" />
					</linearGradient>
				</defs>

				<circle cx="50" cy="50" r="40"></circle>
				<circle cx="50" cy="50" r="40" id='pct-ind'></circle>

			</svg>
            <p class="age_pect">0</p>
        </div>
		<input type="range" min="0" max="100"  step="0" id='slider' value='0' class="slider custom-range" name="lungageCigarettes" onchange="lungageChange(this,'cigarettes')" />
		<div class="values_div">
		<div class="min">0</div>
        <div class="max">100</div>
        <div class="pb-2"></div></div>
		
		
	</div>
</div>



<div class="container3 text-center">
    <div class="prev-button"><a href="javascript:;" data-for="lungage/assessment/height" class="uk-icon-button uk-button-primary ajax_anchor cookie-check"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-left"><polyline fill="none" stroke="#fff" stroke-width="1.03" points="13 16 7 10 13 4"></polyline></svg></a></div>
    <div class="next-button"><a href="javascript:;" data-for="lungage/assessment/smoking" class="uk-icon-button uk-button-primary ajax_anchor cookie-check" onclick="lungageClick('lungageCigarettes','cigarettes')"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-right"><polyline fill="none" stroke="#fff" stroke-width="1.03" points="7 4 13 10 7 16"></polyline></svg></a></div>
</div>
@endsection