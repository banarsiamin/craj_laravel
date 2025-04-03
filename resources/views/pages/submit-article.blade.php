@extends('layouts.app')

@section('title', 'Submit Article - CRAJ')

@section('body-class', 'submit-page')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Submit Your Article</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div class="mb-4">
                            <h4>Author Information</h4>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="author_name" class="form-label">Author Name *</label>
                                    <input type="text" class="form-control" id="author_name" name="author_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="affiliation" class="form-label">Affiliation *</label>
                                    <input type="text" class="form-control" id="affiliation" name="affiliation" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label">Country *</label>
                                    <select class="form-select" id="country" name="country" required>
                                        <option value="">Select Country</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="India">India</option>
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <!-- Add more countries as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h4>Article Information</h4>
                            <hr>
                            <div class="mb-3">
                                <label for="title" class="form-label">Article Title *</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="abstract" class="form-label">Abstract *</label>
                                <textarea class="form-control" id="abstract" name="abstract" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="keywords" class="form-label">Keywords * (comma separated)</label>
                                <input type="text" class="form-control" id="keywords" name="keywords" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Subject Category *</label>
                                <select class="form-select" id="category" name="category" required>
                                    <option value="">Select Category</option>
                                    <option value="Medicine">Medicine</option>
                                    <option value="Science">Science</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Arts">Arts</option>
                                    <option value="Humanities">Humanities</option>
                                    <option value="Social Sciences">Social Sciences</option>
                                    <option value="Business">Business</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Education">Education</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Law">Law</option>
                                    <!-- Add more categories as needed -->
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h4>Upload Files</h4>
                            <hr>
                            <div class="mb-3">
                                <label for="manuscript" class="form-label">Manuscript File (PDF only) *</label>
                                <input type="file" class="form-control" id="manuscript" name="manuscript" accept=".pdf" required>
                                <div class="form-text">Please upload your complete manuscript in PDF format.</div>
                            </div>
                            <div class="mb-3">
                                <label for="cover_letter" class="form-label">Cover Letter (PDF only)</label>
                                <input type="file" class="form-control" id="cover_letter" name="cover_letter" accept=".pdf">
                                <div class="form-text">Optional: Upload a cover letter to the editor.</div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <h4>Declarations</h4>
                            <hr>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="declaration" name="declaration" required>
                                <label class="form-check-label" for="declaration">
                                    I confirm that this work is original and has not been published elsewhere, nor is it currently under consideration for publication elsewhere.
                                </label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                                <label class="form-check-label" for="consent">
                                    I agree to the journal's publication terms and conditions.
                                </label>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Submit Article</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 