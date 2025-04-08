@extends('layouts.app')

@section('title', 'Contact Us - CRAJ')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 mb-5">
            <h1 class="mb-4">Contact Us</h1>
            <p class="lead">We'd love to hear from you. Whether you have a question about submissions, subscriptions, or any other inquiry, our team is ready to assist you.</p>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h2 class="mb-3">Send us a message</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                   id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="organization" class="form-label">Organization</label>
                            <input type="text" class="form-control @error('organization') is-invalid @enderror" 
                                   id="organization" name="organization" value="{{ old('organization') }}">
                            @error('organization')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control @error('country') is-invalid @enderror" 
                                   id="country" name="country" value="{{ old('country') }}">
                            @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                                   id="subject" name="subject" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" 
                                      id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h2 class="mb-3">Contact Information</h2>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <i class="bi bi-envelope fs-2 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5">Email</h3>
                            <p class="mb-0">General Inquiries: <a href="mailto:info@crajour.org">info@crajour.org</a></p>
                            <p class="mb-0">Submissions: <a href="mailto:editor@crajour.org">editor@crajour.org</a></p>
                            <p class="mb-0">Support: <a href="mailto:support@crajour.org">support@crajour.org</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <i class="bi bi-telephone fs-2 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5">Phone</h3>
                            <p class="mb-0">+1 (555) 123-4567</p>
                            <p class="mb-0">Monday - Friday: 9:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <i class="bi bi-geo-alt fs-2 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5">Address</h3>
                            <p class="mb-0">
                                Contemporary Research Analysis Journal<br>
                                123 Academic Boulevard<br>
                                Research Park, NY 10001<br>
                                United States
                            </p>
                        </div>
                    </div>
                    
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <i class="bi bi-globe fs-2 text-primary"></i>
                        </div>
                        <div class="ms-3">
                            <h3 class="fs-5">Social Media</h3>
                            <div class="d-flex gap-3 fs-4">
                                <a href="#" class="text-primary"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="mb-3">FAQ</h2>
                    
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I submit an article?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can submit your article by clicking on the "Submit Article" button on our website. Follow the instructions on the submission page to complete your submission.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is the peer review process like?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our peer review process is double-blind, meaning both the reviewer and author identities are concealed. Each submission is reviewed by at least two subject matter experts who evaluate the quality, originality, and significance of the research.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How long does the review process take?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The typical review process takes between 4-8 weeks. However, this timeline may vary depending on the complexity of the research and the availability of reviewers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection