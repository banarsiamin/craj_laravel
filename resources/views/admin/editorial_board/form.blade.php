{{-- Common form fields for creating and editing editorial board members --}}

<div class="row">
    <!-- Personal Information -->
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">First Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name', $editorialBoard->first_name ?? '') }}" required>
            @error('first_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="last_name">Last Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name', $editorialBoard->last_name ?? '') }}" required>
            @error('last_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $editorialBoard->email ?? '') }}" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $editorialBoard->phone ?? '') }}">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="website">Website of Affiliating Institute</label>
            <textarea class="form-control @error('website') is-invalid @enderror" id="website" name="website" rows="2">{{ old('website', $editorialBoard->website ?? '') }}</textarea>
            @error('website')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="area_of_specialization">Area of Specialization</label>
            <input type="text" class="form-control @error('area_of_specialization') is-invalid @enderror" id="area_of_specialization" name="area_of_specialization" value="{{ old('area_of_specialization', $editorialBoard->area_of_specialization ?? '') }}">
            @error('area_of_specialization')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <!-- Address Information -->
    <div class="col-md-12 mt-3 mb-2">
        <h5>Address Information</h5>
        <hr>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="street_address">Street Address</label>
            <input type="text" class="form-control @error('street_address') is-invalid @enderror" id="street_address" name="street_address" value="{{ old('street_address', $editorialBoard->street_address ?? '') }}">
            @error('street_address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="address_line2">Address Line 2</label>
            <input type="text" class="form-control @error('address_line2') is-invalid @enderror" id="address_line2" name="address_line2" value="{{ old('address_line2', $editorialBoard->address_line2 ?? '') }}">
            @error('address_line2')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" value="{{ old('city', $editorialBoard->city ?? '') }}">
            @error('city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="state_province_region">State/Province/Region</label>
            <input type="text" class="form-control @error('state_province_region') is-invalid @enderror" id="state_province_region" name="state_province_region" value="{{ old('state_province_region', $editorialBoard->state_province_region ?? '') }}">
            @error('state_province_region')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="zip_postal_code">ZIP/Postal Code</label>
            <input type="text" class="form-control @error('zip_postal_code') is-invalid @enderror" id="zip_postal_code" name="zip_postal_code" value="{{ old('zip_postal_code', $editorialBoard->zip_postal_code ?? '') }}">
            @error('zip_postal_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country', $editorialBoard->country ?? '') }}">
            @error('country')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <!-- Files and Description -->
    <div class="col-md-12 mt-3 mb-2">
        <h5>Additional Information</h5>
        <hr>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="brief_resume">Brief Resume (PDF)</label>
            <input type="file" class="form-control-file @error('brief_resume') is-invalid @enderror" id="brief_resume" name="brief_resume">
            <small class="form-text text-muted">Upload a PDF file (Max: 10MB)</small>
            
            @if(isset($editorialBoard) && $editorialBoard->brief_resume)
                <div class="mt-2">
                    <a href="{{ asset('storage/' . $editorialBoard->brief_resume) }}" target="_blank" class="btn btn-sm btn-info">
                        <i class="fas fa-file-pdf"></i> View Current Resume
                    </a>
                </div>
            @endif
            
            @error('brief_resume')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file @error('photo') is-invalid @enderror" id="photo" name="photo">
            <small class="form-text text-muted">Upload an image (Max: 2MB)</small>
            
            @if(isset($editorialBoard) && $editorialBoard->photo)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $editorialBoard->photo) }}" alt="{{ $editorialBoard->full_name }}" class="img-thumbnail" style="max-height: 100px;">
                </div>
            @endif
            
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control tinymce @error('description') is-invalid @enderror" id="description" name="description" rows="6">{{ old('description', $editorialBoard->description ?? '') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    
    <!-- Submit Button -->
    <div class="col-12 mt-4">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> {{ isset($editorialBoard) && $editorialBoard->exists ? 'Update' : 'Save' }} Member
        </button>
        <a href="{{ route('admin.editorial-board.index') }}" class="btn btn-secondary">
            <i class="fas fa-times"></i> Cancel
        </a>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize TinyMCE if available
    if (typeof tinymce !== 'undefined') {
        tinymce.init({
            selector: '.tinymce',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | ' +
                     'alignleft aligncenter alignright alignjustify | ' +
                     'bullist numlist outdent indent | removeformat | help'
        });
    }
});
</script>
@endpush 