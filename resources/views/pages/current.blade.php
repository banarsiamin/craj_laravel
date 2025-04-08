@extends('layouts.app')

@section('title', 'Current Issue - CRAJ')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="mb-4">Current Issue</h1>
            
            @if($currentIssue)
            <div class="alert alert-primary mb-4">
                    <h4 class="alert-heading">{{ $currentIssue->title }}</h4>
                    <p class="mb-1">Volume {{ $currentIssue->volume }}, Issue {{ $currentIssue->issue }} - {{ $currentIssue->year }}</p>
                    @if($currentIssue->published_date)
                        <p class="mb-0">Published: {{ \Carbon\Carbon::parse($currentIssue->published_date)->format('F d, Y') }}</p>
                    @endif
                </div>
                
                @if(isset($currentIssue->description) && !empty($currentIssue->description))
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Issue Description</h5>
                            <p class="card-text">{!! $currentIssue->description !!}</p>
                        </div>
                    </div>
                @endif
            @else
                <div class="alert alert-warning mb-4">
                    <h4 class="alert-heading">No Current Issue Selected</h4>
                    <p class="mb-0">The administrator has not selected a current issue yet.</p>
            </div>
            @endif
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            @if(isset($currentIssueArticles) && $currentIssueArticles->count() > 0)
                <h3 class="mb-4">Articles in this Issue</h3>
                
                @foreach($currentIssueArticles as $article)
                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h2 class="card-title fs-4">
                                <a href="{{ route('article.detail', $article->id) }}" class="text-decoration-none">{{ $article->title }}</a>
                            </h2>
                            <p class="card-text text-muted mb-2">{{ $article->author_name ?? $article->author }}</p>
                            
                            @if($article->affiliation)
                                <p class="card-text text-muted mb-2">{{ $article->affiliation }}</p>
                            @endif
                            
                            <div class="mb-3">
                                <span class="badge bg-primary">Vol {{ $article->volume }} Issue {{ $article->issue }}</span>
                                
                                @if($article->pages)
                                    <span class="badge bg-secondary">Pages: {{ $article->pages }}</span>
                                @endif
                                
                                @if($article->doi)
                                <span class="badge bg-info text-dark">DOI: {{ $article->doi }}</span>
                                @endif
                            </div>
                            
                            <p class="card-text">{{ Str::limit(strip_tags($article->abstract), 250) }}</p>
                            
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('article.detail', $article->id) }}" class="btn btn-sm btn-outline-primary">View Details</a>
                                
                                @if($article->pdf_file)
                                    <a href="{{ Storage::url($article->pdf_file) }}" class="btn btn-sm btn-outline-secondary" target="_blank">Download PDF</a>
                                @elseif($article->manuscript_path)
                                    <a href="{{ Storage::url($article->manuscript_path) }}" class="btn btn-sm btn-outline-secondary" target="_blank">Download Manuscript</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <nav aria-label="Pagination">
                    <ul class="pagination justify-content-center">
                        {{ $currentIssueArticles->links() }}
                    </ul>
                </nav>
            @elseif($currentIssue)
                <div class="alert alert-info">
                    <p class="mb-0">There are no articles available in this issue yet.</p>
                </div>
            @else
                <div class="alert alert-info">
                    <p class="mb-0">Please check back later for current issue articles.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 