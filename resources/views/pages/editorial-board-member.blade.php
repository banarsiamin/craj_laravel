@extends('layouts.app')

@section('title', $member->full_name . ' - Editorial Board')

@section('content')
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light py-2 px-3">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('editorial-board') }}">Editorial Board</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $member->full_name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="row">
        <!-- Profile Column -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center py-5">
                    @if($member->photo)
                        <img src="{{ asset('storage/' . $member->photo) }}" class="rounded-circle img-thumbnail mb-4" style="width: 200px; height: 200px; object-fit: cover;" alt="{{ $member->full_name }}">
                    @else
                        <div class="rounded-circle img-thumbnail d-flex align-items-center justify-content-center mb-4" style="width: 200px; height: 200px; margin: 0 auto;">
                            <i class="bi bi-person-fill" style="font-size: 120px; color: #ccc;"></i>
                        </div>
                    @endif
                    
                    <h2 class="h3 mb-3">{{ $member->full_name }}</h2>
                    <p class="text-muted font-weight-bold">{{ $member->area_of_specialization }}</p>
                    
                    @if($member->website)
                        <p class="mb-1">
                            <a href="{{ strpos($member->website, 'http') === 0 ? $member->website : 'https://' . $member->website }}" target="_blank" class="text-decoration-none">
                                <i class="fas fa-globe mr-2"></i>{{ $member->website }}
                            </a>
                        </p>
                    @endif
                    
                    <p class="mb-1">
                        <i class="fas fa-envelope mr-2"></i>{{ $member->email }}
                    </p>
                    
                    @if($member->phone)
                        <p class="mb-1">
                            <i class="fas fa-phone mr-2"></i>{{ $member->phone }}
                        </p>
                    @endif
                    
                    @if($member->street_address || $member->city || $member->country)
                        <p class="mt-3">
                            <i class="fas fa-map-marker-alt mr-2"></i>{{ $member->country }}
                        </p>
                    @endif
                    
                    @if($member->brief_resume)
                        <div class="mt-4">
                            <a href="{{ asset('storage/' . $member->brief_resume) }}" target="_blank" class="btn btn-outline-primary">
                                <i class="fas fa-file-pdf mr-2"></i>Download Resume
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Biography Column -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">Biography</h3>
                </div>
                <div class="card-body">
                    @if($member->description)
                        <div class="member-bio">
                            {!! $member->description !!}
                        </div>
                    @else
                        <p class="text-muted">No biography available.</p>
                    @endif
                </div>
            </div>
            
            @if($member->street_address || $member->address_line_2 || $member->city || $member->state || $member->zip_code || $member->country)
                <div class="card shadow-sm mt-4">
                    <div class="card-header bg-light">
                        <h3 class="h5 mb-0">Contact Address</h3>
                    </div>
                    <div class="card-body">
                        <address style="white-space: pre-line">{{ $member->formatted_address }}</address>
                    </div>
                </div>
            @endif
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12">
            <div class="text-center">
                <a href="{{ route('editorial-board') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left mr-2"></i>Back to Editorial Board
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .member-bio h1, .member-bio h2, .member-bio h3 {
        font-size: 1.5rem;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
    .member-bio p {
        margin-bottom: 1rem;
        line-height: 1.6;
    }
    .member-bio ul, .member-bio ol {
        margin-bottom: 1rem;
        padding-left: 2rem;
    }
</style>
@endsection 