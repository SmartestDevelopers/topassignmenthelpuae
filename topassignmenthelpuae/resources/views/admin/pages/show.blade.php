@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Page Details: {{ $page->title }}</h4>
                    <div>
                        <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary btn-sm">Back to Pages</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Basic Information</h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Title:</th>
                                    <td>{{ $page->title }}</td>
                                </tr>
                                <tr>
                                    <th>Slug:</th>
                                    <td>
                                        <code>{{ $page->slug }}</code>
                                        <a href="{{ url('/' . $page->slug) }}" target="_blank" class="btn btn-sm btn-outline-primary ms-2">
                                            <i class="fas fa-external-link-alt"></i> View Page
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>
                                        @if($page->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created:</th>
                                    <td>{{ $page->created_at ? date('M d, Y H:i', strtotime($page->created_at)) : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Updated:</th>
                                    <td>{{ $page->updated_at ? date('M d, Y H:i', strtotime($page->updated_at)) : 'N/A' }}</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="col-md-6">
                            <h5>SEO Information</h5>
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">SEO Title:</th>
                                    <td>{{ $page->seo_title ?: 'Not set' }}</td>
                                </tr>
                                <tr>
                                    <th>SEO Keywords:</th>
                                    <td>{{ $page->seo_keywords ?: 'Not set' }}</td>
                                </tr>
                                <tr>
                                    <th>SEO Description:</th>
                                    <td>{{ $page->seo_description ?: 'Not set' }}</td>
                                </tr>
                                <tr>
                                    <th>Meta Image:</th>
                                    <td>
                                        @if($page->meta_image)
                                            <img src="{{ asset('storage/' . $page->meta_image) }}" alt="Meta Image" class="img-thumbnail" style="max-width: 200px;">
                                        @else
                                            <span class="text-muted">No image set</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>Page Content</h5>
                            <div class="card">
                                <div class="card-body">
                                    @if($page->content)
                                        <div class="content-preview">
                                            {!! nl2br(e($page->content)) !!}
                                        </div>
                                    @else
                                        <p class="text-muted">No content available</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>SEO Preview</h5>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <div class="seo-preview">
                                        <h6 class="text-primary mb-1">{{ $page->seo_title ?: $page->title }}</h6>
                                        <small class="text-success">{{ url('/' . $page->slug) }}</small>
                                        <p class="mb-0 mt-1">{{ $page->seo_description ?: 'No meta description available' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <div>
                            <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit Page
                            </a>
                            <a href="{{ url('/' . $page->slug) }}" target="_blank" class="btn btn-info">
                                <i class="fas fa-eye"></i> Preview Page
                            </a>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('admin.pages.destroy', $page->id) }}" class="d-inline" 
                                  onsubmit="return confirm('Are you sure you want to delete this page?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Delete Page
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.content-preview {
    max-height: 300px;
    overflow-y: auto;
    border: 1px solid #dee2e6;
    padding: 15px;
    border-radius: 5px;
    background-color: #f8f9fa;
}

.seo-preview {
    font-family: arial, sans-serif;
}

.seo-preview h6 {
    font-size: 18px;
    line-height: 1.2;
}

.seo-preview small {
    font-size: 14px;
}

.seo-preview p {
    font-size: 13px;
    color: #545454;
    line-height: 1.4;
}
</style>
@endsection
