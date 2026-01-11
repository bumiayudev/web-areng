@extends("admin.layout")
@section("content")

<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        @if($product->image)
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" width="100">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
@endsection
