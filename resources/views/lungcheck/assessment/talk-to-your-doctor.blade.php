@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')
<div class="container">
	<h1>TALK TO YOUR DOCTOR</h1>
	<p>Your scores look ok, you may still engage in a conversation with your doctor about the management of your COPD.</p>
	<div class="container3 text-center">
	    <div class="prev-button"><a href="{{ url('lungcheck/assessment/save-results') }}" class="home-link1 ajax_anchor"><i class="arrow1 right"></i> </a></div>
	</div>
</div>
@endsection