
@component('mail::message')


@component('mail::panel')
    {{ __('register_subject') }}
    

@endcomponent

{!! __('register_text', ['code' => $code]) !!}

@endcomponent

