@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <p class="mb-0 text-muted">Welcome back, {{ Auth::guard('admin')->user()->name }}!</p>
        </div>
    </div>

    <div class="row">
        <!-- Articles Stats Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow border-left-primary h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Article::count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-file-earmark-text text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Published Articles Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow border-left-success h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Published Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Article::where('is_published', true)->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-check-circle text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Draft Articles Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow border-left-warning h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Draft Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Article::where('is_published', false)->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-pencil-square text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Placeholder for Under Review or another metric -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow border-left-info h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Recent Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Article::latest()->take(5)->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-clock-history text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Recent Articles -->
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Articles</h6>
                    <a href="{{ route('admin.articles.index') }}" class="btn btn-sm btn-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Article::latest()->take(5)->get() as $article)
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
                                        <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-sm btn-info">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                                @if(\App\Models\Article::count() === 0)
                                <tr>
                                    <td colspan="5" class="text-center">No articles found.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 