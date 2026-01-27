@if (count($galleries) > 0)
@foreach ($galleries as $row )
    <div class="col-md-4 mb-4 mt-4">
       <div class="gallery-card">
        <img src="{{ asset('storage/' . $row->image_path) }}" alt="{{ $row->title }}">
       </div>
    </div>
@endforeach
@else
    <p class="text-center mt-4">Tidak ada galeri untuk ditampilkan.</p>
@endif
