@extends('layouts.main')
@section('title','Results')
@section('content')
<div class="share_result">
	<h1 class="text-center">SHARE YOUR RESULTS<br/>ON SOCIAL MEDIA</h1>
	<picture>
        <source type="image/webp" data-srcset="{{url('images/lung_logo_blue.webp')}}" srcset="{{url('images/lung_logo_blue.webp')}}">
       <source type="image/png" data-srcset="{{url('images/lung_logo_blue.png')}}" srcset="{{url('images/lung_logo_blue.png')}}">
      <img data-src="{{url('images/lung_logo_blue.png')}}" data-srcset="{{url('images/lung_logo_blue.png')}}" loading="lazy" class="lazyloaded" width="auto" height="auto" alt="LUNG LOGO" title="LUNG LOGO" src="{{url('images/lung_logo_blue.png')}}">
    </picture>
	
	<p>I just used Lung Life and found out my lungs seem to be one year older than me. Find out yours</p>
	<div class="text-center">
	<a href="#" class="uk-icon-button uk-button-primary uk-icon fb-modal" id="fb-modal">
	<svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="facebook"><path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path></svg>
	</a>
	<a  id="tw-modal" href="{{ url(app()->getLocale()) }}" class="uk-icon-button uk-button-primary uk-icon ajax_anchor"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="twitter"><path d="M19,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"></path></svg></a><br/>
	
	<a href="javascript:;" data-for="lungage/what-does-this-mean" class="cookie-check uk-icon uk-icon-button uk-button-primary ajax_anchor"><svg width="30" height="30" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="chevron-left"><polyline fill="none" stroke="#fff" stroke-width="1.03" points="13 16 7 10 13 4"></polyline></svg></a>
	</div>
</div>
@endsection