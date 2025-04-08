@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <!-- Profile Card -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Information</h5>
                </div>
                <div class="card-body text-center">
                    @if($admin->profile_image)
                        <img src="{{ Storage::url($admin->profile_image) }}" alt="Profile Image" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    @else
                        <div class="rounded-circle bg-secondary d-inline-flex align-items-center justify-content-center mb-3" style="width: 150px; height: 150px;">
                            <i class="bi bi-person-fill text-white" style="font-size: 4rem;"></i>
                        </div>
                    @endif
                    <h5 class="card-title">{{ $admin->name }}</h5>
                    <p class="card-text">{{ $admin->email }}</p>
                    
                    @if($admin->phone)
                        <p class="card-text">
                            <i class="bi bi-telephone me-2"></i>{{ $admin->phone }}
                        </p>
                    @endif
                    
                    @if($admin->bio)
                        <div class="mt-3">
                            <h6>Bio</h6>
                            <p class="card-text">{{ $admin->bio }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Edit Profile Form -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $admin->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $admin->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone (Optional)</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $admin->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio (Optional)</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="3">{{ old('bio', $admin->bio) }}</textarea>
                            @error('bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="profile_image" class="form-label">Profile Image</label>
                            <input type="file" class="form-control @error('profile_image') is-invalid @enderror" id="profile_image" name="profile_image">
                            <small class="text-muted">Leave empty to keep current image.</small>
                            @error('profile_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <hr class="my-4">
                        <h5>Change Password</h5>
                        <p class="text-muted small">Leave these fields empty if you don't want to change your password.</p>
                        
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password">
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 