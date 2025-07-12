@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Create New Page</h4>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Back to Pages</a>
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

                    <form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Page Title *</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Page Slug *</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                           id="slug" name="slug" value="{{ old('slug') }}" required>
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
                                           id="seo_title" name="seo_title" value="{{ old('seo_title') }}" maxlength="60">
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
                                           id="seo_keywords" name="seo_keywords" value="{{ old('seo_keywords') }}">
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
                                      id="seo_description" name="seo_description" rows="3" maxlength="160">{{ old('seo_description') }}</textarea>
                            <small class="form-text text-muted">Recommended: 150-160 characters</small>
                            @error('seo_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Page Content</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" 
                                      id="content" name="content" rows="10">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="meta_image" class="form-label">Meta Image</label>
                            <input type="file" class="form-control @error('meta_image') is-invalid @enderror" 
                                   id="meta_image" name="meta_image" accept="image/*">
                            <small class="form-text text-muted">Recommended: 1200x630px for social media sharing</small>
                            @error('meta_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" 
                                       {{ old('is_active', 1) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">
                                    Active (visible on website)
                                </label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
});

// Auto-generate SEO title from title if empty
document.getElementById('title').addEventListener('input', function() {
    const seoTitle = document.getElementById('seo_title');
    if (!seoTitle.value) {
        seoTitle.value = this.value;
    }
});
</script>
@endsection
