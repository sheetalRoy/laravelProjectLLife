@extends('layouts.main')
@section('title','Results')
@section('content')
<div class="copd_div">
	<p>If you've been diagnosed with COPD, then explore how Lung Check could help you.</p>
	<a href="javascript:;" data-for="lungcheck" class="uk-button-primary uk-button uk-button-large ajax_anchor cookie-check">Go to lung check</a>
	<a href="javascript:;" id="popup_cpod" class="uk-button-primary uk-button uk-button-large ajax_anchor">What is COPD?</a>
</div>

<div class="container3 text-center btn_1">
    <div class="prev-button"><a href="javascript:;" data-for="lungage/what-does-this-mean" class=" cookie-check uk-button-primary uk-icon-button ajax_anchor"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-left"><polyline fill="none" stroke="#fff" stroke-width="1.03" points="13 16 7 10 13 4"></polyline></svg></a></div>
</div>

@endsection