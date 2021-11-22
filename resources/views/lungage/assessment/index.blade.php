@extends('layouts.main')
@section('title','Lung Age')
@section('content')
<div class="gender">
	<div class="gender_div text-center">
		<h1>Gender</h1>
		<div class="d-flex">		
			<div class="gender_svg">			
			<label class="check_box input-one">
			<input type="radio" value="male" name="gender"/>
			<svg width="80" height="80" viewBox="0 0 80 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-svg="custom-male"><defs><polygon id="a" points="0 0 56.7017544 0 56.7017544 56.7792963 0 56.7792963"></polygon></defs><g transform="translate(12 12)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M30.8529121,25.8844377 C35.9227037,30.9611374 35.9227037,39.2217118 30.8529121,44.2984115 C25.7828715,49.3757344 17.5335376,49.3757344 12.4639949,44.2984115 C7.39358096,39.2217118 7.39358096,30.9611374 12.4639949,25.8844377 C17.5335376,20.8074887 25.7828715,20.8074887 30.8529121,25.8844377 M6.34340095,50.4270961 C14.8014763,58.8966964 28.5146839,58.8966964 36.9727593,50.4270961 C44.3830196,43.0069878 45.3002623,31.5479555 39.7264789,23.1269659 L50.0975822,12.741731 L50.0949682,22.2003716 L56.7017544,15.5840845 L56.7017544,0 L41.1390002,0 L34.5319651,6.61616244 L43.977735,6.61354494 L33.6066317,16.9986552 C25.1969764,11.4174016 13.7536613,12.3357695 6.34389884,19.7560024 C-2.11454996,28.2256027 -2.11454996,41.9572465 6.34340095,50.4270961" fill="#FFF"></path></g></svg>			
			<span class="checkmark"></span>
			<label>Male</label></label>
			</div>
		
			<div class="gender_svg">			
			<label class="check_box input-two">
			<input type="radio" value="female" name="gender" />			
			<svg width="80" height="80" viewBox="0 0 80 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-svg="custom-female"><defs><polygon id="a" points="0 0 39.7305263 0 39.7305263 68.23315 0 68.23315"></polygon></defs><g transform="translate(20 6)" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M19.9383592,31.9131835 C13.4053701,31.9131835 8.0902792,26.5480261 8.0902792,19.9529446 C8.0902792,13.3579873 13.4053701,7.99270565 19.9383592,7.99270565 C26.4714713,7.99270565 31.7864392,13.3579873 31.7864392,19.9529446 C31.7864392,26.5480261 26.4714713,31.9131835 19.9383592,31.9131835 M39.7305263,19.9540626 C39.7305263,8.93368892 30.8806144,0 19.9635859,0 C19.0367184,0 18.125356,0.0658377731 17.2323291,0.190432653 C7.5147402,1.43153679 0,9.80622575 0,19.9529446 C0,29.591843 6.78181092,37.6310078 15.7912051,39.4754592 L15.7912051,52.2999121 L6.89711561,52.2999121 L6.89711561,60.2605684 L15.7912051,60.2605684 L15.7912051,68.23315 L23.6775783,68.23315 L23.6775783,60.2605684 L32.5715448,60.2605684 L32.5715448,52.2999121 L23.6775783,52.2999121 L23.6775783,39.5549614 C32.8188899,37.8003226 39.7305263,29.6925872 39.7305263,19.9540626" fill="#FFF"></path></g></svg>
			<span class="checkmark"></span>
			<label>Female</label></label>
			</div>
		</div>
	</div>
</div>
<div class="container3 cen_btn text-center uk-margin-medium-top">
    <div class="next-button sdv-icon-button">
		<a href="{{ url('lungage/assessment/age') }}" class="uk-icon-button uk-button-primary ajax_anchor" >
			<svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-right"><polyline fill="none" stroke="#fff" stroke-width="1.03" points="7 4 13 10 7 16"></polyline></svg>
		</a>
	</div>
</div>
@endsection