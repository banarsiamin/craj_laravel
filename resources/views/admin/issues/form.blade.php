{{-- Common form fields for creating and editing issues --}}

<div class="row mb-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Issue Details</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Title Issue <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $issue->title ?? '') }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="abstract" class="form-label">Abstract</label>
                    <textarea class="form-control @error('abstract') is-invalid @enderror" id="abstract" name="abstract" rows="5">{{ old('abstract', $issue->abstract ?? '') }}</textarea>
                    @error('abstract')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                
                
                
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Featured Image</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="featured_image" class="form-label">Featured Image for this Issue</label>
                    @if(isset($issue) && $issue->featured_image)
                        <div class="mb-2">
                            <img src="{{ Storage::url($issue->featured_image) }}" alt="{{ $issue->title }}" class="img-thumbnail" style="max-height: 200px;">
                        </div>
                    @endif
                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror" id="featured_image" name="featured_image" accept="image/*">
                    @error('featured_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Recommended size: 800x600 pixels</div>
                    <div id="imagePreview" class="mt-2 d-none">
                        <img src="" alt="Preview" class="img-thumbnail" style="max-height: 200px;">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="order" class="form-label">Issues Order</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $issue->order ?? 0) }}">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                

                @if(isset($issue) && $issue->exists)
                <div class="mb-3">
                    <label for="created_at" class="form-label">Created Date</label>
                    <input type="text" class="form-control" id="created_at" value="{{ $issue->created_at->format('Y-m-d H:i:s') }}" disabled>
                </div>
                <!-- <div class="mb-3">
                    <label for="updated_at" class="form-label">Modified Date</label>
                    <input type="text" class="form-control" id="updated_at" value="{{ $issue->updated_at->format('Y-m-d H:i:s') }}" disabled>
                </div> -->
                
                @endif
                <div class="mb-3">
                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                    <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                        <option value="draft" {{ old('status', $issue->status ?? 'draft') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $issue->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
        </div>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <h5 class="card-title">OJS Issues Fields</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="volume" class="form-label">Volume</label>
                    <input type="text" class="form-control @error('volume') is-invalid @enderror" id="volume" name="volume" value="{{ old('volume', $issue->volume ?? '') }}">
                    @error('volume')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="number" class="form-label">Number</label>
                    <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" value="{{ old('number', $issue->number ?? '') }}">
                    @error('number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('year', $issue->year ?? date('Y')) }}">
                    @error('year')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="access_status" class="form-label">Access Status <span class="text-danger">*</span></label>
                    <select class="form-select @error('access_status') is-invalid @enderror" id="access_status" name="access_status" required>
                        <option value="open_access" {{ old('access_status', $issue->access_status ?? 'open_access') == 'open_access' ? 'selected' : '' }}>Open Access</option>
                        <option value="subscription" {{ old('access_status', $issue->access_status ?? '') == 'subscription' ? 'selected' : '' }}>Subscription</option>
                    </select>
                    @error('access_status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="open_access_date" class="form-label">Open Access Date</label>
                    <input type="date" class="form-control @error('open_access_date') is-invalid @enderror" id="open_access_date" name="open_access_date" value="{{ old('open_access_date', isset($issue) && $issue->open_access_date ? $issue->open_access_date->format('Y-m-d') : '') }}">
                    @error('open_access_date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="mb-3">
            <label class="form-label d-block">OJS Issues Identification Show/Hide</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="show_volume" name="show_volume" value="1" {{ old('show_volume', $issue->show_volume ?? '1') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="show_volume">Volume</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="show_number" name="show_number" value="1" {{ old('show_number', $issue->show_number ?? '1') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="show_number">Number</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="show_year" name="show_year" value="1" {{ old('show_year', $issue->show_year ?? '1') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="show_year">Year</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="show_access" name="show_access" value="1" {{ old('show_access', $issue->show_access ?? '1') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="show_access">Access</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="show_title" name="show_title" value="1" {{ old('show_title', $issue->show_title ?? '1') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="show_title">Title Issue</label>
            </div>
        </div>
        
        @if(isset($issue) && $issue->exists && $issue->galleryImages->count() > 0)
        <div class="mb-3">
            <label class="form-label">Current Gallery Images</label>
            <div class="row">
                @foreach($issue->galleryImages as $gallery)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ Storage::url($gallery->image_path) }}" class="card-img-top" alt="Gallery Image">
                            <div class="card-body">
                                <p class="card-text">{{ $gallery->caption ?? 'No caption' }}</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="delete_gallery_{{ $gallery->id }}" name="delete_gallery[]" value="{{ $gallery->id }}">
                                    <label class="form-check-label text-danger" for="delete_gallery_{{ $gallery->id }}">
                                        Delete this image
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <div class="mb-3">
            <label class="form-label">{{ isset($issue) && $issue->exists ? 'Add New Gallery Images' : 'Gallery All (Multiple Images)' }}</label>
            <div class="gallery-container">
                <div class="gallery-item mb-2">
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
                </div>
            </div>
            <button type="button" class="btn btn-outline-primary add-gallery-item mt-2">
                <i class="bi bi-plus-circle"></i> Add Image
            </button>
        </div>
    </div>
</div>


<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save"></i> Save Issue
    </button>
</div>

<div class="card mb-4">
    <div class="card-header">
        <h5 class="card-title">Articles Items</h5>
    </div>
    <div class="card-body">
        <!-- <div class="mb-3">
            <label class="form-label">Select Multiple Articles</label>
            <select class="form-select" id="article_ids" name="article_ids[]" multiple size="10">
                @foreach($articles as $article)
                    <option value="{{ $article->id }}" {{ in_array($article->id, old('article_ids', $selectedArticleIds ?? [])) ? 'selected' : '' }}>
                        {{ $article->title }}
                    </option>
                @endforeach
            </select>
            <div class="form-text">Hold Ctrl (Cmd on Mac) to select multiple articles. Drag to reorder.</div>
        </div> -->

        <div class="mb-3">
            <!-- <label class="form-label">Selected Articles</label> -->
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Title</th>
                            <th width="15%">Date</th>
                            <th width="15%">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($attachedArticles as $article)
                            <tr>
                                <th>{{ $article->id }}</th>
                                <td>
                                    <a href="{{ route('admin.articles.edit', $article) }}" class="text-decoration-none">
                                        {{ Str::limit($article->title, 50) }}
                                    </a>
                                </td>
                                <th>
                                    @if($article->published_date)
                                        {{ Carbon\Carbon::parse($article->published_date)->format('M d, Y') }}
                                    @else
                                        <span class="text-muted">Not set</span>
                                    @endif
                                </th>
                                <th>
                                    <span class="badge bg-{{ $article->status == 'published' ? 'success' : 'warning' }}">
                                    {{ ucfirst($article->status) }}
                                    </span>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No articles assigned found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

        </div>
    </div>
</div>


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
    
    // Function to add new gallery item
    function addGalleryItem() {
        const galleryItem = document.createElement('div');
        galleryItem.className = 'gallery-item mb-2';
        galleryItem.innerHTML = `
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
        galleryContainer.appendChild(galleryItem);
        
        // Add event listener to the new remove button
        galleryItem.querySelector('.remove-gallery-item').addEventListener('click', function() {
            galleryItem.remove();
        });
    }
    
    // Add event listener to add button
    addGalleryBtn.addEventListener('click', addGalleryItem);
    
    // Add event listeners to existing remove buttons
    document.querySelectorAll('.remove-gallery-item').forEach(button => {
        button.addEventListener('click', function() {
            this.closest('.gallery-item').remove();
        });
    });
    
    // Initialize TinyMCE for abstract
    if (typeof tinymce !== 'undefined') {
        tinymce.init({
            selector: '#abstract',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic backcolor | \
                      alignleft aligncenter alignright alignjustify | \
                      bullist numlist outdent indent | removeformat | help'
        });
    }
});
</script>
@endpush 