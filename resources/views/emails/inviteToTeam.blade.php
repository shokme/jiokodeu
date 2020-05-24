@component('mail::message')
@lang('invite.welcome') {{ $teamName }}

@component('mail::button', ['url' => $url])
@endcomponent

@lang('invite.thanks')<br>
{{ config('app.name') }}
@endcomponent