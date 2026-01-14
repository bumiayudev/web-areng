@extends("admin.layout")
@section("content")
    <div class="container">
        <h1>Product List</h1>
        <div class="float-right"><a href="{{ route('product.create') }}" class="btn btn-outline-info mb-4">Add Product</a></div>
       <div class="table-responsive">
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-primary">Edit</a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                            <!-- Add action buttons here -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       </div>

        {{ $products->links() }} <!-- Pagination links -->
    </div>
@endsection
