@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Edit Page: {{ $page->title }}</h4>
                    <div>
                        <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary btn-sm">Back to Pages</a>
                    </div>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.pages.update', $page->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Page Title *</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title', $page->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Page Slug *</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" name="slug" value="{{ old('slug', $page->slug) }}" required>
                                    <small class="form-text text-muted">URL-friendly version (e.g., about-us)</small>
                                    @error('slug')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="seo_title" class="form-label">SEO Title</label>
                                    <input type="text" class="form-control @error('seo_title') is-invalid @enderror" 
                                           id="seo_title" name="seo_title" value="{{ old('seo_title', $page->seo_title) }}" maxlength="60">
                                    <small class="form-text text-muted">Recommended: 50-60 characters</small>
                                    @error('seo_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="seo_keywords" class="form-label">SEO Keywords</label>
                                    <input type="text" class="form-control @error('seo_keywords') is-invalid @enderror" 
                                           id="seo_keywords" name="seo_keywords" value="{{ old('seo_keywords', $page->seo_keywords) }}">
                                    <small class="form-text text-muted">Comma-separated keywords</small>
                                    @error('seo_keywords')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="seo_description" class="form-label">SEO Description</label>
                            <textarea class="form-control @error('seo_description') is-invalid @enderror" 
                                      id="seo_description" name="seo_description" rows="3" maxlength="160">{{ old('seo_description', $page->seo_description) }}</textarea>
                            <small class="form-text text-muted">Recommended: 150-160 characters</small>
                            @error('seo_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Page Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                      id="content" name="content" rows="10">{{ old('content', $page->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="meta_image" class="form-label">Meta Image</label>
                            @if($page->meta_image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $page->meta_image) }}" alt="Current Meta Image" class="img-thumbnail" style="max-width: 200px;">
                                    <p class="small text-muted">Current image</p>
                                </div>
                            @endif
                            <input type="file" class="form-control @error('meta_image') is-invalid @enderror" 
                                   id="meta_image" name="meta_image" accept="image/*">
                            <small class="form-text text-muted">Recommended: 1200x630px for social media sharing. Leave empty to keep current image.</small>
                            @error('meta_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" 
                                       {{ old('is_active', $page->is_active) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active (visible on website)
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h5>SEO Preview</h5>
                                <div class="card bg-light mb-3">
                                    <div class="card-body">
                                        <div class="seo-preview">
                                            <h6 class="text-primary mb-1" id="preview-title">{{ $page->seo_title ?: $page->title }}</h6>
                                            <small class="text-success" id="preview-url">{{ url('/' . $page->slug) }}</small>
                                            <p class="mb-0 mt-1" id="preview-description">{{ $page->seo_description ?: 'No meta description available' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div>
                                <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-info">View Page</a>
                                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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

<script>
// Auto-generate slug from title
document.getElementById('title').addEventListener('input', function() {
    const title = this.value;
    const slug = title.toLowerCase()
        .replace(/[^a-z0-9 -]/g, '') // Remove invalid chars
        .replace(/\s+/g, '-') // Replace spaces with -
        .replace(/-+/g, '-') // Replace multiple - with single -
        .trim('-'); // Trim - from start and end
    document.getElementById('slug').value = slug;
    
    // Update preview
    updatePreview();
});

// Update SEO preview
function updatePreview() {
    const title = document.getElementById('seo_title').value || document.getElementById('title').value;
    const slug = document.getElementById('slug').value;
    const description = document.getElementById('seo_description').value || 'No meta description available';
    
    document.getElementById('preview-title').textContent = title;
    document.getElementById('preview-url').textContent = '{{ url("/") }}/' + slug;
    document.getElementById('preview-description').textContent = description;
}

// Add event listeners for preview updates
document.getElementById('seo_title').addEventListener('input', updatePreview);
document.getElementById('slug').addEventListener('input', updatePreview);
document.getElementById('seo_description').addEventListener('input', updatePreview);
</script>
@endsection
