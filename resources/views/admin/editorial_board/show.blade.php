@extends('admin.layouts.app')

@section('title', 'Editorial Board Member Details')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editorial Board Member Details</h1>
        <div>
            <a href="{{ route('admin.editorial-board.edit', $editorialBoard) }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
            </a>
            <a href="{{ route('admin.editorial-board.index') }}" class="btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to List
            </a>
        </div>
    </div>

    <!-- Member Details -->
    <div class="row">
        <!-- Left Column - Personal Info -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Profile Photo -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body text-center">
                    @if($editorialBoard->photo)
                        <img class="img-profile rounded-circle img-thumbnail" style="width: 200px; height: 200px; object-fit: cover;" src="{{ asset('storage/' . $editorialBoard->photo) }}" alt="{{ $editorialBoard->full_name }}">
                    @else
                        <img class="img-profile rounded-circle img-thumbnail" style="width: 200px; height: 200px; object-fit: cover;" src="{{ asset('img/undraw_profile.svg') }}" alt="Default Profile">
                    @endif
                    
                    <h4 class="mt-3">{{ $editorialBoard->full_name }}</h4>
                    <p class="text-muted">{{ $editorialBoard->area_of_specialization }}</p>
                    
                    <div class="mt-4">
                        <h6 class="font-weight-bold">Contact Information</h6>
                        <p><i class="fas fa-envelope mr-2"></i> {{ $editorialBoard->email }}</p>
                        @if($editorialBoard->phone)
                            <p><i class="fas fa-phone mr-2"></i> {{ $editorialBoard->phone }}</p>
                        @endif
                    </div>
                    
                    @if($editorialBoard->brief_resume)
                        <div class="mt-3">
                            <a href="{{ asset('storage/' . $editorialBoard->brief_resume) }}" target="_blank" class="btn btn-info btn-sm">
                                <i class="fas fa-file-pdf"></i> View Resume
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Right Column - Details -->
        <div class="col-xl-8 col-lg-7">
            <!-- Address Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-map-marker-alt mr-1"></i> Address
                    </h6>
                </div>
                <div class="card-body">
                    @if($editorialBoard->street_address || $editorialBoard->city || $editorialBoard->country)
                        <p style="white-space: pre-line">{{ $editorialBoard->formatted_address }}</p>
                    @else
                        <p class="text-muted">No address information provided.</p>
                    @endif
                </div>
            </div>
            
            <!-- Institution Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-university mr-1"></i> Affiliating Institute
                    </h6>
                </div>
                <div class="card-body">
                    @if($editorialBoard->website)
                        <p>{{ $editorialBoard->website }}</p>
                    @else
                        <p class="text-muted">No institution website provided.</p>
                    @endif
                </div>
            </div>
            
            <!-- Description/Bio Card -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        <i class="fas fa-user-circle mr-1"></i> Biography
                    </h6>
                </div>
                <div class="card-body">
                    @if($editorialBoard->description)
                        <div>{!! $editorialBoard->description !!}</div>
                    @else
                        <p class="text-muted">No biography provided.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 