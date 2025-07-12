@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Manage Pages</h4>
                    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Create New Page</a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>SEO Title</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pages as $page)
                                <tr>
                                    <td>{{ $page->id }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>{{ Str::limit($page->seo_title, 50) }}</td>
                                    <td>
                                        <span class="badge badge-{{ $page->is_active ? 'success' : 'secondary' }}">
                                            {{ $page->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>{{ date('M d, Y', strtotime($page->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this page?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No pages found.</td>
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
