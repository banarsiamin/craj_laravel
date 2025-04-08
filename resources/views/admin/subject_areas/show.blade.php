@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">View Subject Area</h5>
            <div>
                <a href="{{ route('admin.subject-areas.edit', $subjectArea->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('admin.subject-areas.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4>{{ $subjectArea->name }}</h4>
                    <p class="text-muted">Slug: {{ $subjectArea->slug }}</p>
                    
                    <h5 class="mt-4">Description</h5>
                    <div class="border p-3 rounded bg-light">
                        {!! $subjectArea->description ?? '<em>No description provided</em>' !!}
                    </div>
                    
                    <div class="mt-4">
                        <h5>Created: {{ $subjectArea->created_at->format('M d, Y H:i') }}</h5>
                        <h5>Last Updated: {{ $subjectArea->updated_at->format('M d, Y H:i') }}</h5>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Image</h5>
                        </div>
                        <div class="card-body text-center">
                            @if($subjectArea->image)
                                <img src="{{ Storage::url($subjectArea->image) }}" 
                                     alt="{{ $subjectArea->name }}" 
                                     class="img-fluid rounded" 
                                     style="max-height: 300px;">
                            @else
                                <div class="alert alert-info">
                                    No image uploaded for this subject area.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4 d-flex justify-content-between">
                <form action="{{ route('admin.subject-areas.destroy', $subjectArea->id) }}" method="POST" 
                      onsubmit="return confirm('Are you sure you want to delete this subject area?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 