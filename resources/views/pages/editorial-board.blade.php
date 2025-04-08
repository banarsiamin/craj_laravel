@extends('layouts.app')

@section('title', 'Editorial Board')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center mb-4">Editorial Board</h1>
            <div class="text-center mb-5">
                <p>Our editorial board consists of distinguished academics and researchers from around the world who are committed to maintaining the highest standards of scholarly publication.</p>
                <a href="{{ route('editorial-board.registration') }}" class="btn btn-primary mt-3">Apply to Join Our Editorial Board</a>
            </div>
        </div>
    </div>

    @if(count($members) > 0)
        <div class="row">
            @foreach($members as $member)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="text-center pt-4">
                            @if($member->photo)
                                <img src="{{ asset('storage/' . $member->photo) }}" class="rounded-circle img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;" alt="{{ $member->full_name }}">
                            @else
                                <div class="rounded-circle img-thumbnail d-flex align-items-center justify-content-center" style="width: 150px; height: 150px; margin: 0 auto;">
                                    <i class="bi bi-person-fill" style="font-size: 80px; color: #ccc;"></i>
                                </div>
                            @endif
                        </div>
                        
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $member->full_name }}</h5>
                            <p class="card-text text-muted">{{ $member->area_of_specialization }}</p>
                            <p class="card-text small">
                                <i class="fas fa-envelope mr-1"></i> {{ $member->email }}
                            </p>
                            @if($member->country)
                                <p class="card-text small">
                                    <i class="fas fa-map-marker-alt mr-1"></i> {{ $member->country }}
                                </p>
                            @endif
                        </div>
                        
                        <div class="card-footer bg-white text-center border-top-0">
                            <a href="{{ route('editorial-board.member', $member->id) }}" class="btn btn-primary btn-sm">
                                View Profile
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $members->links() }}
        </div>
    @else
        <div class="text-center py-5">
            <div class="alert alert-info">
                <h5>No editorial board members available at this time.</h5>
                <p>Please check back later for updates.</p>
            </div>
        </div>
    @endif
</div>
@endsection 