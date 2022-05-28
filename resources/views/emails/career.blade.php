@component('mail::message')
# Introduction

Hi ,

Appreciated for applying, Our team review your request. We 'll connect back shortly. 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
