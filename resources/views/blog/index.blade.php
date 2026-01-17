@extends("admin.layout")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blogs</h1>
              <div class="float-right"><a href="{{ route('blog.create') }}" class="btn btn-outline-info mb-4">Add Blog</a></div>
            <div class="table-responsive">
                <table class="table table-bordered" id="tb-post">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Published At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute('content')
    }
});
</script>
<script>
    let table = new DataTable('#tb-post', {
        processing: true,
        serverSide: true,
        ajax: '{{ route('blog.data') }}',
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'title', name: 'title' },
            { data: 'slug', name: 'slug' },
            { data: 'created_at', name: 'created_at' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
    $(document).on('click', '.btn-delete', function() {
        if (!confirm('Are you sure you want to delete this post?')) {
            return;
        }

        const blogId = $(this).data('id');

        $.ajax({
            url: "{{ url('/blogs') }}/" + blogId + "/delete",
            type: 'DELETE',
            success: function(result) {
               window.location.reload();
            },
            error: function(xhr, status, error) {
                console.error('Error deleting blog post:', error);
            }
        });
    });
</script>
@endpush
