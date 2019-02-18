@component('mail::message')
# {{ $header }}

Full name: {{ $fullName }}

@component('mail::button', ['url' => ''])
{{ $message }}
@endcomponent

Thanks,<br>
Coloreal
@endcomponent
