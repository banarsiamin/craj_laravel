@extends('layouts.app')

@section('title', 'Apply to Join Editorial Board')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center mb-4">Apply to Join Our Editorial Board</h1>
            <div class="text-center mb-5">
                <p>We welcome applications from academics and researchers with expertise in their field. Editorial board members play a crucial role in maintaining the quality and integrity of our journal.</p>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Application Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('editorial-board.registration.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row g-3">
                            <!-- Personal Information -->
                            <div class="col-12 mb-3">
                                <h5>Personal Information</h5>
                                <hr>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="area_of_specialization" class="form-label">Area of Specialization <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('area_of_specialization') is-invalid @enderror" id="area_of_specialization" name="area_of_specialization" value="{{ old('area_of_specialization') }}" required>
                                @error('area_of_specialization')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="website" class="form-label">Website of Affiliating Institute</label>
                                <textarea class="form-control @error('website') is-invalid @enderror" id="website" name="website" rows="2">{{ old('website') }}</textarea>
                                @error('website')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Address Information -->
                            <div class="col-12 mb-3 mt-3">
                                <h5>Address Information</h5>
                                <hr>
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="street_address" class="form-label">Street Address</label>
                                <input type="text" class="form-control @error('street_address') is-invalid @enderror" id="street_address" name="street_address" value="{{ old('street_address') }}">
                                @error('street_address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="address_line2" class="form-label">Address Line 2</label>
                                <input type="text" class="form-control @error('address_line2') is-invalid @enderror" id="address_line2" name="address_line2" value="{{ old('address_line2') }}">
                                @error('address_line2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city') }}">
                                @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="state_province_region" class="form-label">State/Province/Region</label>
                                <input type="text" class="form-control @error('state_province_region') is-invalid @enderror" id="state_province_region" name="state_province_region" value="{{ old('state_province_region') }}">
                                @error('state_province_region')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="zip_postal_code" class="form-label">ZIP/Postal Code</label>
                                <input type="text" class="form-control @error('zip_postal_code') is-invalid @enderror" id="zip_postal_code" name="zip_postal_code" value="{{ old('zip_postal_code') }}">
                                @error('zip_postal_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}">
                                @error('country')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Additional Information -->
                            <div class="col-12 mb-3 mt-3">
                                <h5>Additional Information</h5>
                                <hr>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="brief_resume" class="form-label">CV/Resume (PDF) <span class="text-danger">*</span></label>
                                <input type="file" class="form-control @error('brief_resume') is-invalid @enderror" id="brief_resume" name="brief_resume" required>
                                <div class="form-text">Please upload your CV or resume in PDF format (max 10MB)</div>
                                @error('brief_resume')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="photo" class="form-label">Profile Photo</label>
                                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo">
                                <div class="form-text">Please upload a professional profile photo (JPEG, PNG, max 2MB)</div>
                                @error('photo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">Biography/Research Interests <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                                <div class="form-text">Please provide a brief biography highlighting your expertise, research interests, and notable publications</div>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-12 mt-4">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Application</button>
                                </div>
                                <p class="mt-3 text-muted small text-center">By submitting this form, you consent to our review process. Approved applications will be displayed on our editorial board page.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 