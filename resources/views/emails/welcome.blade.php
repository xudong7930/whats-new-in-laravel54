@component('mail::message')
# Introduction

The body of your message.

- one 
- two 
- three

@component('mail::button', ['url' => ''])
Start Browsing
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
