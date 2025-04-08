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
            <h5 class="mb-0">Subject Areas Management</h5>
            <a href="{{ route('admin.subject-areas.create') }}" class="btn btn-primary">Add New Subject Area</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subjectAreas as $subjectArea)
                            <tr>
                                <td>{{ $subjectArea->name }}</td>
                                <td>{{ $subjectArea->slug }}</td>
                                <td>
                                    @if($subjectArea->image)
                                        <img src="{{ Storage::url($subjectArea->image) }}" alt="{{ $subjectArea->name }}" width="50" height="50" class="rounded">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </td>
                                <td>{{ $subjectArea->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.subject-areas.show', $subjectArea->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('admin.subject-areas.edit', $subjectArea->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('admin.subject-areas.destroy', $subjectArea->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subject area?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No subject areas found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 d-flex justify-content-center">
                {{ $subjectAreas->links() }}
            </div>
        </div>
    </div>
</div>
@endsection 