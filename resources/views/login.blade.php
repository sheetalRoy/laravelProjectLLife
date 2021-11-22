@extends('layouts.main')
@section('title','Login / Register')
@section('content')
<style type="text/css">
    #forgot-userid-button:disabled{
        background-color: #dcdcdc;
        color: #7a7a7a;
        cursor: no-drop;
    }
</style>
<div class="container log-page">
    <h1 class="text-center font-bold main-title">LOGIN / REGISTER</h1>
</div>
<div class="container text-center">
    <div class="login-form-section">
        @if(Session::has('success_message'))
        <p>{{ Session::get('success_message') }}</p>
        @endif
        <p>If you already have a login ID, please enter it below.</p>
        <form action="{{ url('login') }}" class="login-form" autocomplete="off" method="post">
            @csrf
            <input type="text" id="user-id" name="code" placeholder="USER ID">
            <br>
            <input type="submit" value="Submit" id="log-me-in" />
        </form>
        <a href="javascript:;" id="forgot-password" class="ajax_anchor">Forgot my user id</a>
        <p>If you’d like to create an account, please register below.</p>
        <a href="{{ url('register') }}" class="ajax_anchor">Register</a>
    </div>
</div>
@endsection