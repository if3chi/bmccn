@component('mail::message')
# Dear {{ $name }},

Thank you for your interest in the Essay Writing competition.

This is to confirm that we have received your entry submission 
and is now in the process of shortlisting. 

Wishing you all the best.

Kind regards,<br>
<strong>{{ config('app.name') }}</strong>

<font size="2">*Terms &amp; Conditions apply.*</font>
@endcomponent
