@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Article Details</h5>
            <div>
                <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
            </div>
        </div>
        <div class="card-body">
            <h2 class="mb-3">{{ $article->title }}</h2>
            
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5>Author Information</h5>
                    <p><strong>Author:</strong> {{ $article->author_name }}</p>
                    <p><strong>Email:</strong> {{ $article->email }}</p>
                    <p><strong>Country:</strong> {{ $article->country }}</p>
                    <div>
                        <strong>Affiliation:</strong>
                        <div class="mt-2">{!! $article->affiliation !!}</div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h5>Publication Details</h5>
                    <p>
                        <strong>Status:</strong>
                        <span class="badge bg-{{ $article->is_published ? 'success' : 'warning' }}">
                            {{ $article->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </p>
                    <p><strong>Category:</strong> {{ $article->category }}</p>
                    <p>
                        <strong>Keywords:</strong>
                        @foreach(explode(',', $article->keywords) as $keyword)
                            <span class="badge bg-secondary">{{ trim($keyword) }}</span>
                        @endforeach
                    </p>
                    <p><strong>Created At:</strong> {{ $article->created_at->format('M d, Y') }}</p>
                    @if($article->is_published && $article->published_date)
                        <p><strong>Published At:</strong> {{ \Carbon\Carbon::parse($article->published_date)->format('M d, Y') }}</p>
                    @endif
                </div>
            </div>
            
            <div class="mb-4">
                <h5>Abstract</h5>
                <div class="card">
                    <div class="card-body">
                        {!! $article->abstract !!}
                    </div>
                </div>
            </div>
            
            @if($article->manuscript_path)
            <div class="mb-4">
                <h5>Manuscript</h5>
                <a href="{{ Storage::url($article->manuscript_path) }}" target="_blank" class="btn btn-info">
                    <i class="bi bi-file-earmark-pdf"></i> View PDF
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection 