<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Basic Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Article Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $article->title ?? '') }}">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="abstract" class="form-label">Article Abstract <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('abstract') is-invalid @enderror" id="abstract" name="abstract" rows="4">{{ old('abstract', $article->abstract ?? '') }}</textarea>
                    @error('abstract')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="references" class="form-label">Article References</label>
                    <textarea class="form-control @error('references') is-invalid @enderror" id="references" name="references" rows="4">{{ old('references', $article->references ?? '') }}</textarea>
                    @error('references')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="author_contributor_list" class="form-label">Author Contributor List</label>
                    <textarea class="form-control @error('author_contributor_list') is-invalid @enderror" id="author_contributor_list" name="author_contributor_list" rows="3">{{ old('author_contributor_list', $article->author_contributor_list ?? '') }}</textarea>
                    @error('author_contributor_list')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title">Assign Article Issues</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="issues" class="form-label">Issues</label>
                        <select multiple12 class="form-select @error('issues') is-invalid @enderror" id="issues" name="issues[]">
                            @foreach($issues as $issue)
                            <option value="{{ $issue->id }}" {{ in_array($issue->id, old('issues', $selectedIssues ?? [])) ? 'selected' : '' }}>
                                {{ $issue->title }} ({{ $issue->volume ? 'Vol '.$issue->volume : '' }}{{ $issue->number ? ', No '.$issue->number : '' }}{{ $issue->year ? ', '.$issue->year : '' }})
                            </option>
                            @endforeach
                        </select>
                        <div class="form-text">Hold Ctrl/Cmd to select multiple issues</div>
                        @error('issues')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pages" class="form-label">Pages <span>(e.g. 123-145)</span></label>
                                <input type="text" class="form-control @error('pages') is-invalid @enderror" id="pages" name="pages" value="{{ old('pages', $article->pages ?? '') }}" placeholder="e.g. 123-145">
                                @error('pages')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="published_date" class="form-label">Published Date</label>
                                <input type="date" class="form-control @error('published_date') is-invalid @enderror" id="published_date" name="published_date" value="{{ old('published_date', isset($article) && $article->published_date ? $article->published_date->format('Y-m-d') : '') }}">
                                @error('published_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="has_permissions" class="form-check-label d-block mb-2">Permissions</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('has_permissions') is-invalid @enderror" type="checkbox" id="has_permissions" name="has_permissions" value="1" {{ old('has_permissions', isset($article) && $article->has_permissions) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="has_permissions">
                                        Attach permissions to the submission
                                    </label>
                                    @error('has_permissions')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="license_url" class="form-label">License URL</label>
                                <input type="url" class="form-control @error('license_url') is-invalid @enderror" id="license_url" name="license_url" value="{{ old('license_url', $article->license_url ?? '') }}">
                                @error('license_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="copyright_holder" class="form-label">Copyright Holder</label>
                                <input type="text" class="form-control @error('copyright_holder') is-invalid @enderror" id="copyright_holder" name="copyright_holder" value="{{ old('copyright_holder', $article->copyright_holder ?? '') }}">
                                @error('copyright_holder')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="copyright_year" class="form-label">Copyright Year</label>
                                <input type="number" class="form-control @error('copyright_year') is-invalid @enderror" id="copyright_year" name="copyright_year" value="{{ old('copyright_year', $article->copyright_year ?? date('Y')) }}" min="1900" max="{{ date('Y') + 1 }}">
                                @error('copyright_year')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Main Author Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="author_name" class="form-label">Author Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('author_name') is-invalid @enderror" id="author_name" name="author_name" value="{{ old('author_name', $article->author_name ?? '') }}">
                    @error('author_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $article->email ?? '') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="affiliation" class="form-label">Affiliation <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('affiliation') is-invalid @enderror" id="affiliation" name="affiliation" value="{{ old('affiliation', $article->affiliation ?? '') }}">
                    @error('affiliation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country', $article->country ?? '') }}">
                    @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Featured Image & Research category</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="featured_image" class="form-label">Image</label>
                    @if(isset($article) && $article->featured_image)
                    <div class="mb-3">
                        <img src="{{ Storage::url($article->featured_image) }}" alt="Featured Image" class="img-thumbnail" style="max-height: 200px;">
                    </div>
                    @endif
                    <input type="file" class="form-control @error('featured_image') is-invalid @enderror" id="featured_image" name="featured_image">
                    @error('featured_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Research Category <span class="text-danger"></span></label>                    
                    <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
                        <option value="">– Select subject –</option>
                        <option value="Research Articles" {{ old('category', $article->category ?? '') == 'Research Articles' ? 'selected' : '' }}>Research Articles</option>
                        <option value="Case Study" {{ old('category', $article->category ?? '') == 'Case Study' ? 'selected' : '' }}>Case Study</option>
                        <option value="Reviewed Articles" {{ old('category', $article->category ?? '') == 'Reviewed Articles' ? 'selected' : '' }}>Reviewed Articles</option>
                        <option value="Short Notes" {{ old('category', $article->category ?? '') == 'Short Notes' ? 'selected' : '' }}>Short Notes</option>
                        <option value="Book Reviews" {{ old('category', $article->category ?? '') == 'Book Reviews' ? 'selected' : '' }}>Book Reviews</option>
                        <option value="Theses Dissertations" {{ old('category', $article->category ?? '') == 'Theses Dissertations' ? 'selected' : '' }}>Theses Dissertations</option>
                        <option value="Economics Finance" {{ old('category', $article->category ?? '') == 'Economics Finance' ? 'selected' : '' }}>Economics Finance</option>
                        <option value="Health and Medical Science" {{ old('category', $article->category ?? '') == 'Health and Medical Science' ? 'selected' : '' }}>Health and Medical Science</option>
                        <option value="Life science" {{ old('category', $article->category ?? '') == 'Life science' ? 'selected' : '' }}>Life science</option>
                        <option value="Physical, Chemical Sciences, Engineering Technology" {{ old('category', $article->category ?? '') == 'Physical, Chemical Sciences, Engineering Technology' ? 'selected' : '' }}>Physical, Chemical Sciences, Engineering Technology</option>
                        <option value="Social Science Humanities" {{ old('category', $article->category ?? '') == 'Social Science Humanities' ? 'selected' : '' }}>Social Science Humanities</option>
                    </select>
                    <!-- <div class="form-text">Separate multiple categories with commas</div> -->
                    @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Select Subject Areas</h5>
            </div>
            <div class="card-body">
                
                <div class="mb-3">
                    <label for="subject_areas" class="form-label">Subjects Areas</label>
                    <select multiple class="form-select @error('subject_areas') is-invalid @enderror" id="subject_areas" name="subject_areas[]">
                        @foreach($subjectAreas as $subjectArea)
                        <option value="{{ $subjectArea->id }}" {{ in_array($subjectArea->id, old('subject_areas', $selectedSubjectAreas ?? [])) ? 'selected' : '' }}>
                            {{ $subjectArea->name }}
                        </option>
                        @endforeach
                    </select>
                    <div class="form-text">Hold Ctrl/Cmd to select multiple subject areas</div>
                    @error('subject_areas')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Publication Status</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ old('is_published', isset($article) && $article->is_published) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_published">Publish this article</label>
                    </div>
                    <div class="form-text">When checked, the article will be available to the public.</div>
                </div>
                
                @if(isset($article))
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Created Date</label>
                            <input type="text" class="form-control" value="{{ $article->created_at->format('Y-m-d H:i:s') }}" readonly disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Last Modified</label>
                            <input type="text" class="form-control" value="{{ $article->updated_at->format('Y-m-d H:i:s') }}" readonly disabled>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Article Upload Submission & Keywords</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="doi" class="form-label">DOI</label>
                    <input type="text" class="form-control @error('doi') is-invalid @enderror" id="doi" name="doi" value="{{ old('doi', $article->doi ?? '') }}">
                    @error('doi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="pdf_file" class="form-label">PDF File</label>
                            @if(isset($article) && $article->pdf_file)
                            <div class="mb-2">
                                <a href="{{ Storage::url($article->pdf_file) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-file-pdf"></i> View Current PDF
                                </a>
                            </div>
                            @endif
                            <input type="file" class="form-control @error('pdf_file') is-invalid @enderror" id="pdf_file" name="pdf_file">
                            @error('pdf_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- <div class="col-md-7"> -->

                        <div class="mb-3">
                            <label for="keywords" class="form-label">Keywords <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="keywords" name="keywords" value="{{ old('keywords', $article->keywords ?? '') }}">
                            <div class="form-text">Separate multiple keywords with commas</div>
                            @error('keywords')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    <!-- </div> -->
                    <?php /*
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="html_file" class="form-label">HTML File</label>
                            @if(isset($article) && $article->html_file)
                            <div class="mb-2">
                                <a href="{{ Storage::url($article->html_file) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-file-code"></i> View Current HTML
                                </a>
                            </div>
                            @endif
                            <input type="file" class="form-control @error('html_file') is-invalid @enderror" id="html_file" name="html_file">
                            @error('html_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="docx_file" class="form-label">DOCX File</label>
                            @if(isset($article) && $article->docx_file)
                            <div class="mb-2">
                                <a href="{{ Storage::url($article->docx_file) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                                    <i class="bi bi-file-word"></i> View Current DOCX
                                </a>
                            </div>
                            @endif
                            <input type="file" class="form-control @error('docx_file') is-invalid @enderror" id="docx_file" name="docx_file">
                            @error('docx_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> */ ?>
                    <input type="hidden" class="form-control @error('docx_file') is-invalid @enderror" id="docx_file" name="docx_file">
                    <input type="hidden" class="form-control @error('html_file') is-invalid @enderror" id="html_file" name="html_file">

                </div>

                <div class="mb-3">
                    <label for="html_content" class="form-label">HTML Format Content</label>
                    <textarea class="form-control @error('html_content') is-invalid @enderror" id="html_content" name="html_content" rows="5">{{ old('html_content', $article->html_content ?? '') }}</textarea>
                    @error('html_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>




<div class="d-flex justify-content-end">
    <a href="{{ route('admin.articles.index') }}" class="btn btn-outline-secondary me-2">Cancel</a>
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save"></i> {{ isset($article) ? 'Update' : 'Save' }} Article
    </button>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize TinyMCE for the rich text editors
        tinymce.init({
            selector: '#abstract, #references, #author_contributor_list, #html_content',
            plugins: 'autoresize anchor autolink charmap code codesample directionality fullscreen help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars wordcount',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            height: 300
        });
    });
</script>
@endpush 