@extends('admin.layout')
@section('title', 'Edit Gallery Item')
@section('content')
<div class="container mt-5">
    <h2>Edit Gallery Item</h2>
    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $gallery->title }}">
            @error('title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $gallery->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image_path" accept="image/*">
            <small class="form-text text-muted">Leave blank to keep the current image.</small>
            @error('image_path')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
