@extends('layouts.app')

@section('title', 'Thank You for Your Application')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body text-center p-5">
                    <div class="mb-4">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                    </div>
                    
                    <h1 class="h3 mb-4">Thank You for Your Application!</h1>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <p class="mb-4">Your application to join our editorial board has been received and is now under review. Our team will carefully evaluate your qualifications and experience.</p>
                    
                    <p class="mb-4">You will be notified by email about the status of your application once the review process is complete.</p>
                    
                    <div class="mt-5">
                        <a href="{{ route('home') }}" class="btn btn-primary">Return to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 