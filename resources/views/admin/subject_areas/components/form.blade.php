@php
    $isEdit = isset($subjectArea) && $subjectArea->exists;
    $route = $isEdit 
        ? route('admin.subject-areas.update', $subjectArea->id) 
        : route('admin.subject-areas.store');
    $method = $isEdit ? 'PUT' : 'POST';
    $buttonText = $isEdit ? 'Update Subject Area' : 'Create Subject Area';
@endphp

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">{{ $isEdit ? 'Edit' : 'Create New' }} Subject Area</h5>
    </div>
    <div class="card-body">
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($isEdit)
                @method($method)
            @endif
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                       id="name" name="name" value="{{ old('name', $subjectArea->name ?? '') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                       id="slug" name="slug" value="{{ old('slug', $subjectArea->slug ?? '') }}" required>
                <small class="text-muted">URL-friendly version of the name. Use lowercase letters, numbers, and hyphens only.</small>
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control tinymce-editor @error('description') is-invalid @enderror" 
                          id="description" name="description" rows="6">{{ old('description', $subjectArea->description ?? '') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                
                @if($isEdit && $subjectArea->image)
                    <div class="mb-2">
                        <img src="{{ Storage::url($subjectArea->image) }}" 
                             alt="{{ $subjectArea->name }}" 
                             class="img-thumbnail" 
                             style="max-height: 150px;">
                        <div class="form-text mt-1">Current image</div>
                    </div>
                @endif
                
                <input type="file" class="form-control @error('image') is-invalid @enderror" 
                       id="image" name="image" accept="image/*">
                <small class="text-muted">
                    {{ $isEdit ? 'Optional. Leave empty to keep the current image.' : 'Optional.' }} 
                    Max file size: 2MB. Accepted formats: JPEG, PNG, JPG, GIF
                </small>
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.subject-areas.index') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    // Auto-generate slug from name
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');
    
    @if($isEdit)
    const originalSlug = '{{ $subjectArea->slug ?? "" }}';
    const originalName = '{{ $subjectArea->name ?? "" }}';
    
    // Only auto-generate if user hasn't customized the slug
    if (nameInput.value === originalName && slugInput.value === originalSlug) {
        setupSlugGenerator();
    }
    @else
    setupSlugGenerator();
    @endif
    
    function setupSlugGenerator() {
        nameInput.addEventListener('input', function() {
            slugInput.value = nameInput.value
                .toLowerCase()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        });
    }
    
    // Initialize TinyMCE editor for description field
    tinymce.init({
        selector: '.tinymce-editor',
        plugins: 'autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table help wordcount',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image media | removeformat help',
        height: 300,
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
</script>
@endpush 