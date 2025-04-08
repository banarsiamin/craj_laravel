@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Journal Indexing</h5>
                    <a href="{{ route('journal-indexing.create') }}" class="btn btn-primary">Add New</a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($indexings as $indexing)
                                    <tr>
                                        <td>{{ $indexing->title }}</td>
                                        <td>{{ $indexing->description }}</td>
                                        <td>
                                            <span class="badge bg-{{ $indexing->status === 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($indexing->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('journal-indexing.edit', $indexing) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('journal-indexing.destroy', $indexing) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No journal indexing found.</td>
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