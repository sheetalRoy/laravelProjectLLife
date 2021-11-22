@extends('layouts.main')
@section('title','CONCERNED ABOUT Breath')
@section('content')
<div class="container">
	<h1>WOULD YOU LIKE TO CREATE AN ACCOUNT?</h1>
	<p>To keep track of your progress or view your results in the future, please create an account.</p>
	<a href="{{ url('lungcheck/create-account') }}" class="ajax_anchor">Create an account</a>
	<a href="{{ url(app()->getLocale()) }}" class="ajax_anchor">Not Right Now</a>
</div>
@endsection