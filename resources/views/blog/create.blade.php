@extends("admin.layout")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create New Blog</h1>
            <form action="{{  route("blog.store") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="editor" name="content" rows="10"></textarea>
                    @error('content')
                        <div class="alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="is_published" class="form-label">Publish Now?</label>
                    <select class="form-control" id="is_published" name="is_published">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    @error('is_published')
                        <div class="alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image_path">Upload</label>
                    <input type="file" class="form-control" id="image_path" name="image_path">
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
<script>
$(document).ready(function () {
    $('#editor').summernote({
        height: 300,
        placeholder: 'Tulis konten blog...'
    });
});
</script>
@endpush
@endsection
