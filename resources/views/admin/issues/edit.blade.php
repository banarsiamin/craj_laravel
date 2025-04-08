@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Issue</h1>
        <a href="{{ route('admin.issues.index') }}" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back to Issues
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.issues.update', $issue) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                @include('admin.issues.form')
                
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .remove-gallery-item {
        width: 100%;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image preview
    const featuredImage = document.getElementById('featured_image');
    const imagePreview = document.getElementById('imagePreview');
    
    featuredImage.addEventListener('change', function(event) {
        if (event.target.files.length > 0) {
            const src = URL.createObjectURL(event.target.files[0]);
            imagePreview.querySelector('img').src = src;
            imagePreview.classList.remove('d-none');
        } else {
            imagePreview.classList.add('d-none');
        }
    });
    
    // Gallery items
    const galleryContainer = document.querySelector('.gallery-container');
    const addGalleryBtn = document.querySelector('.add-gallery-item');
    
    addGalleryBtn.addEventListener('click', function() {
        const newItem = document.createElement('div');
        newItem.className = 'gallery-item mb-2';
        newItem.innerHTML = `
            <div class="row g-2">
                <div class="col-md-5">
                    <input type="file" class="form-control" name="gallery_images[]" accept="image/*">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="gallery_captions[]" placeholder="Caption">
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-outline-danger remove-gallery-item"><i class="bi bi-trash"></i></button>
                </div>
            </div>
        `;
        galleryContainer.appendChild(newItem);
        
        newItem.querySelector('.remove-gallery-item').addEventListener('click', function() {
            newItem.remove();
        });
    });
    
    // Add remove event listener to initial gallery item
    document.querySelectorAll('.remove-gallery-item').forEach(btn => {
        btn.addEventListener('click', function() {
            if (galleryContainer.querySelectorAll('.gallery-item').length > 1) {
                this.closest('.gallery-item').remove();
            }
        });
    });
});
</script>
@endpush 