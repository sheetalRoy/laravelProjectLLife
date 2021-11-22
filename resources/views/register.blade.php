@extends('layouts.main')
@section('title','REGISTER NOW')
@section('content')
<style type="text/css">
    #register-me-in:disabled{
        background-color: #dcdcdc;
        color: #7a7a7a;
        cursor: no-drop;
    }
</style>
<div class="container reg-page">
    <h1 class="text-center font-bold main-title">REGISTER NOW</h1>
</div>
<div class="container text-center">
    <div class="register-form-section">
        <p>To get the benefits of Lung Life register for your free account. Track your progress and access the most helpful content for you.</p><br>
        <p>Please enter your email and we’ll send your login to you.</p>
        <form action="{{ url('register') }}" class="register-form" autocomplete="off" method="POST">
            @csrf
            <input type="text" id="email-id" name="email" placeholder="Email ID" />
            @if($errors->any())
                {!! implode('', $errors->all('<div class="invalid-feedback">:message</div>')) !!}
            @endif
            <br>
            <input type="submit" disabled="true" value="Send" id="register-me-in" />
			<br>
			<input type="checkbox" id="check_box" name="checkbox" value="register">
			<label class="check-box"> I consent to the <a href="javascript:;" id="process-of-my-personal-data">process of my personal data</a></label>
        </form>
    </div>
</div>
@endsection