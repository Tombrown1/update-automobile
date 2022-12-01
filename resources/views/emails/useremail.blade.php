@component('mail::message')
# Introduction

Dear {{$emailContent['name']}}

{{$emailContent['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
