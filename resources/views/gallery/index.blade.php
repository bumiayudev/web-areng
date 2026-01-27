@extends('admin.layout')
@section('title', 'Gallery')
@section('content')
<div class="container mt-5">
    <h2>Gallery</h2>
    <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-3">Add New Item</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="gallery-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated by DataTables -->
            </tbody>

        </table>
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
let imgUrl = "{{ asset('storage') }}/";
let table = new DataTable('#gallery-table', {
    processing: true,
    serverSide: true,
    ajax: '{{ route('gallery.data') }}',
    columns: [
        { data: 'DT_RowIndex', orderable: false, searchable: false },
        { data: 'title', name: 'title' },
        { data: 'description', name: 'description' },
        { data: 'image_path', name: 'image_path', render: function(data) {
            return `<img src="${imgUrl}/${data}" alt="${data}" class="img-thumbnail" style="max-width: 50px; height: auto;">`;
        }},
        { data: 'action', name: 'action', orderable: false, searchable: false }
    ]
});
$(document).on('click', '.btn-delete', function() {
    if (!confirm('Are you sure you want to delete this gallery item?')) {
        return;
    }
    const galleryId = $(this).data('id');
    $.ajax({
        url: "{{ url('/galleries') }}/" + galleryId + "/delete",
        type: 'DELETE',
        success: function(result) {
            window.location.reload();
        },
        error: function(xhr, status, error) {
            console.error('Error deleting gallery item:', error);
        }
    });
});
</script>
@endpush
