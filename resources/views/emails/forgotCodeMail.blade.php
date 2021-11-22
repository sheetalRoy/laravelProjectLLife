@component('mail::message')
@component('mail::panel')
    {{ __('forgot_code_subject') }}
@endcomponent

{!! __('forgot_code_text', ['code' => $code]) !!}
@endcomponent
