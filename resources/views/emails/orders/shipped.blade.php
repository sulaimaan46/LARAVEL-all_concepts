@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'index'])
Button Text
@endcomponent

Thanks Regards,<br>
By Sulaimaan,<br>
{{ config('app.name') }}
@endcomponent
