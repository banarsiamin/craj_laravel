@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Manage Issues</h1>
        <a href="{{ route('admin.issues.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Issue
        </a>
    </div>

    <!-- @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif -->

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <!-- <th width="15%">Featured Image</th> -->
                            <th width="25%">Title</th>
                            <th width="15%">Volume/Number</th>
                            <th width="10%">Year</th>
                            <th width="10%">Status</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($issues as $issue)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <!-- <td>
                                @if($issue->featured_image)
                                    <img src="{{ Storage::url($issue->featured_image) }}" alt="{{ $issue->title }}" class="img-thumbnail" style="max-height: 60px;">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td> -->
                            <td>{{ $issue->title }}</td>
                            <td>
                                @if($issue->volume || $issue->number)
                                    Vol {{ $issue->volume ?? 'N/A' }}, No {{ $issue->number ?? 'N/A' }}
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $issue->year ?? 'N/A' }}</td>
                            <td>
                                <span class="badge bg-{{ $issue->status === 'published' ? 'success' : 'warning' }}">
                                    {{ ucfirst($issue->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.issues.edit', $issue) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.issues.destroy', $issue) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this issue?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <div class="d-flex flex-column align-items-center">
                                    <i class="bi bi-journal-x fs-1 text-muted mb-2"></i>
                                    <p class="text-muted">No issues found</p>
                                    <a href="{{ route('admin.issues.create') }}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-plus-circle"></i> Add Your First Issue
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $issues->links() }}
            </div>
        </div>
    </div>
</div>
@endsection 