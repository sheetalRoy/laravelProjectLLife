@extends('layouts.main')
@section('title','Select Language')
@section('content')
<div class="container">
    <h1 class="text-center font-bold">{{ __('select_language') }}</h1>
    <a href="{{ url('benl') }}" class="ajax_anchor">Dutch</a>
    <a href="{{ url('befr') }}" class="ajax_anchor">French</a>
    <a href="{{ url('dk') }}" class="ajax_anchor">Danish</a>
    <a href="{{ url('fi') }}" class="ajax_anchor">Finnish</a>
    <a href="{{ url('se') }}" class="ajax_anchor">Swedish</a>
    <a href="{{ url('en') }}" class="ajax_anchor">English</a>
</div>
@endsection