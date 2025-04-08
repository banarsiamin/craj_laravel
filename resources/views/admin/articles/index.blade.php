@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Articles Management</h5>
            <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Add New Article</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->author_name }}</td>
                                <td>
                                    <span class="badge bg-{{ $article->is_published ? 'success' : 'warning' }}">
                                        {{ $article->is_published ? 'Published' : 'Draft' }}
                                    </span>
                                </td>
                                <td>{{ $article->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.articles.show', $article) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-primary">Edit</a>
                                        @if($article->manuscript_path)
                                            <a href="{{ Storage::url($article->manuscript_path) }}" class="btn btn-sm btn-secondary" target="_blank">PDF</a>
                                        @endif
                                        <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No articles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</div>
@endsection 