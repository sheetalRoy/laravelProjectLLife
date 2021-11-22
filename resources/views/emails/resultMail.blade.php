@component('mail::message')
@component('mail::panel')
    {{ __('results_subject') }}
@endcomponent

{!! __('results_text') !!}

@endcomponent
