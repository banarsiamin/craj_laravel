@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Journal Indexing</h3>
                        <a href="{{ route('admin.journal-indexing.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-lg"></i> Add New
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($indexings as $indexing)
                                    <tr>
                                        <td>{{ $indexing->order }}</td>
                                        <td>
                                            @if($indexing->image)
                                                <img src="{{ Storage::url($indexing->image) }}" 
                                                     alt="{{ $indexing->title }}" 
                                                     class="img-thumbnail" 
                                                     style="max-height: 50px;">
                                            @else
                                                <span class="text-muted">No image</span>
                                            @endif
                                        </td>
                                        <td>{{ $indexing->title }}</td>
                                        <td>
                                            <a href="{{ $indexing->link }}" target="_blank">
                                                {{ $indexing->link }}
                                            </a>
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $indexing->status ? 'success' : 'danger' }}">
                                                {{ $indexing->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.journal-indexing.edit', $indexing) }}" 
                                                   class="btn btn-sm btn-info">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form action="{{ route('admin.journal-indexing.destroy', $indexing) }}" 
                                                      method="POST" 
                                                      class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-danger" 
                                                            onclick="return confirm('Are you sure you want to delete this item?')">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No journal indexing found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 