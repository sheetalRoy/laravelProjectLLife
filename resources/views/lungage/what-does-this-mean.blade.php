@extends('layouts.main')
@section('title','Results')
@section('content')
<div class="what-does">
	<p>Smoking accelerates the natural ageing process of your lungs, making them older than you are. It is important to discuss these results with your doctor so they can guide you on what to do next.</p>
	<a href="javascript:;" data-for="lungage/share-my-results" class="uk-button-primary uk-button uk-button-large ajax_anchor cookie-check">Share my results</a>
	<a href="javascript:;" class="uk-button-primary uk-button uk-button-large ajax_anchor" id="download_lungage_report">
              SAVE MY RESULTS (PDF)
            </a>
	<a href="javascript:;" id="popup_lungage_report_email" class="uk-button-primary uk-button uk-button-large ajax_anchor">            
              EMAIL ME MY RESULTS          
            </a>
	
</div>

<div class="container3 text-center btn_1">
    <div class="next-button"><a href="javascript:;" data-for="lungage/what-is-copd" class="uk-icon-button uk-button-primary ajax_anchor cookie-check"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-right"><polyline fill="none" stroke="#fff" stroke-width="1.03" points="7 4 13 10 7 16"></polyline></svg></a></div>
</div>

@endsection