@extends('layouts.app')

@section('title', 'Aims & Scope - CRAJ')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mb-4">Aims & Scope</h1>
            
            <div class="card shadow-sm mb-5">
                <div class="card-body p-4">
                    <h2 class="mb-3">Journal Aims</h2>
                    <p>Contemporary Research Analysis Journal (CRAJ) aims to publish high-quality, original research from a wide range of academic disciplines and perspectives. Our journal serves as a platform for interdisciplinary dialogue and knowledge exchange, bridging various fields of study to foster innovative approaches and solutions to complex issues.</p>
                    
                    <p>The journal aims to:</p>
                    <ul class="mb-4">
                        <li>Promote the dissemination of quality research with global relevance</li>
                        <li>Facilitate international academic collaboration across disciplines</li>
                        <li>Provide a platform for both established and emerging scholars</li>
                        <li>Ensure rapid publication of important findings</li>
                        <li>Contribute to the advancement of knowledge in various fields</li>
                        <li>Bridge the gap between theoretical research and practical applications</li>
                    </ul>
                </div>
            </div>
            
            <div class="card shadow-sm mb-5">
                <div class="card-body p-4">
                    <h2 class="mb-3">Scope</h2>
                    <p>CRAJ welcomes submissions from all fields of academic inquiry, with a particular emphasis on interdisciplinary research. The journal publishes original research articles, review papers, case studies, and theoretical frameworks that contribute significantly to their respective fields.</p>
                    
                    <p>Our scope encompasses, but is not limited to, the following disciplines:</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h3 class="mb-0 fs-5">Sciences</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Biology</li>
                                        <li>Chemistry</li>
                                        <li>Physics</li>
                                        <li>Environmental Science</li>
                                        <li>Computer Science</li>
                                        <li>Mathematics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h3 class="mb-0 fs-5">Social Sciences</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Economics</li>
                                        <li>Political Science</li>
                                        <li>Sociology</li>
                                        <li>Psychology</li>
                                        <li>Anthropology</li>
                                        <li>Education</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h3 class="mb-0 fs-5">Humanities</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Philosophy</li>
                                        <li>Literature</li>
                                        <li>History</li>
                                        <li>Arts</li>
                                        <li>Cultural Studies</li>
                                        <li>Religious Studies</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h3 class="mb-0 fs-5">Applied Sciences</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Engineering</li>
                                        <li>Technology</li>
                                        <li>Architecture</li>
                                        <li>Agriculture</li>
                                        <li>Food Science</li>
                                        <li>Information Technology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h3 class="mb-0 fs-5">Health Sciences</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Medicine</li>
                                        <li>Public Health</li>
                                        <li>Nursing</li>
                                        <li>Pharmacy</li>
                                        <li>Dentistry</li>
                                        <li>Veterinary Science</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-primary text-white">
                                    <h3 class="mb-0 fs-5">Business & Management</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li>Business Administration</li>
                                        <li>Marketing</li>
                                        <li>Finance</li>
                                        <li>Human Resources</li>
                                        <li>Entrepreneurship</li>
                                        <li>International Business</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="mb-3">Publication Ethics</h2>
                    <p>CRAJ is committed to upholding the highest ethical standards in academic publishing. We follow the guidelines and best practices established by the Committee on Publication Ethics (COPE). All submissions undergo rigorous peer review, and we maintain a strict policy against plagiarism, data fabrication, and other forms of academic misconduct.</p>
                    
                    <p>Authors submitting to CRAJ must ensure that their work:</p>
                    <ul>
                        <li>Is original and has not been published elsewhere</li>
                        <li>Acknowledges all sources and references properly</li>
                        <li>Adheres to relevant ethical guidelines for research involving human subjects and animals</li>
                        <li>Discloses any potential conflicts of interest</li>
                        <li>Represents accurate and verifiable research findings</li>
                    </ul>
                    
                    <div class="mt-4">
                        <a href="{{ route('article.submit') }}" class="btn btn-primary btn-lg">Submit Your Manuscript</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 