@component('mail::message')
# New Contact Form Submission

**From:** {{ $contact->name }}  
**Email:** {{ $contact->email }}  
**Subject:** {{ $contact->subject }}

@if($contact->phone)
**Phone:** {{ $contact->phone }}  
@endif

@if($contact->organization)
**Organization:** {{ $contact->organization }}  
@endif

@if($contact->country)
**Country:** {{ $contact->country }}  
@endif

**Message:**  
{{ $contact->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent 