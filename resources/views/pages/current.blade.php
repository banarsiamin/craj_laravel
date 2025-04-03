@extends('layouts.app')

@section('title', 'Current Issue - CRAJ')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mb-4">Current Issue</h1>
            <div class="alert alert-primary mb-4">
                <h4 class="alert-heading">Volume 8, Issue 3 - March 2025</h4>
                <p class="mb-0">Published: March 15, 2025</p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            @if(isset($currentIssueArticles) && $currentIssueArticles->count() > 0)
                @foreach($currentIssueArticles as $article)
                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="card-title fs-4">
                                <a href="{{ route('article.detail', $article->id) }}" class="text-decoration-none">{{ $article->title }}</a>
                            </h2>
                            <p class="card-text text-muted mb-2">{{ $article->author_name }} - {{ $article->affiliation }}</p>
                            
                            <div class="mb-3">
                                <span class="badge bg-primary">{{ $article->volume }} {{ $article->issue }}</span>
                                <span class="badge bg-secondary">Pages: {{ $article->page_no }}</span>
                                <span class="badge bg-info text-dark">DOI: {{ $article->doi }}</span>
                            </div>
                            
                            <p class="card-text">{{ Str::limit($article->abstract, 250) }}</p>
                            
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('article.detail', $article->id) }}" class="btn btn-sm btn-outline-primary">View Details</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary">Download PDF</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- Default articles when no data is available from database -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title fs-4">
                            <a href="#" class="text-decoration-none">Financial Governance in Africa In the Digital Age: Financial Governance of Academic Institutions</a>
                        </h2>
                        <p class="card-text text-muted mb-2">Ikrame HAI, Hicham OUZIF, Mohammed ABDELLAOUI, Hayat EL BOUKHARI</p>
                        
                        <div class="mb-3">
                            <span class="badge bg-primary">Vol 8 No 3(2025)</span>
                            <span class="badge bg-secondary">Pages: 995-1005</span>
                            <span class="badge bg-info text-dark">DOI: 10.55677/CRAJ/v8i3.01</span>
                        </div>
                        
                        <p class="card-text">This research examines the digital transformation of financial governance in African academic institutions. The study investigates how digital technologies are reshaping financial management, transparency, and accountability in higher education across the continent...</p>
                        
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Download PDF</a>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title fs-4">
                            <a href="#" class="text-decoration-none">Climate Change Impact on Agricultural Productivity in Southeast Asia</a>
                        </h2>
                        <p class="card-text text-muted mb-2">Sarah Johnson, Michael Chen, Anwar Rahman</p>
                        
                        <div class="mb-3">
                            <span class="badge bg-primary">Vol 8 No 3(2025)</span>
                            <span class="badge bg-secondary">Pages: 1006-1018</span>
                            <span class="badge bg-info text-dark">DOI: 10.55677/CRAJ/v8i3.02</span>
                        </div>
                        
                        <p class="card-text">This study analyzes the effects of changing climate patterns on agricultural yields across Southeast Asian countries. Using data collected between 2010-2024, researchers identify significant correlations between temperature increases, rainfall pattern changes, and crop productivity...</p>
                        
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Download PDF</a>
                        </div>
                    </div>
                </div>
                
                <div class="card shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h2 class="card-title fs-4">
                            <a href="#" class="text-decoration-none">Emerging Trends in Healthcare Robotics: A Systematic Review</a>
                        </h2>
                        <p class="card-text text-muted mb-2">Elena Petrova, David Williams</p>
                        
                        <div class="mb-3">
                            <span class="badge bg-primary">Vol 8 No 3(2025)</span>
                            <span class="badge bg-secondary">Pages: 1019-1032</span>
                            <span class="badge bg-info text-dark">DOI: 10.55677/CRAJ/v8i3.03</span>
                        </div>
                        
                        <p class="card-text">This systematic review examines recent developments in healthcare robotics between 2020-2025. The paper categorizes innovations in surgical robotics, rehabilitation systems, patient care automation, and telemedicine robots, highlighting technological advances and clinical applications...</p>
                        
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">Download PDF</a>
                        </div>
                    </div>
                </div>
            @endif
            
            <nav aria-label="Pagination">
                <ul class="pagination justify-content-center">
                    @if(isset($currentIssueArticles) && $currentIssueArticles instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        {{ $currentIssueArticles->links() }}
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection 