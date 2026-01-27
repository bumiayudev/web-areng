@include("partial.header")
<section class="blog-hero">
    <h1>Galeri</h1>
    <p>Informasi seputar kegiatan dan proyek kami</p>
</section>
<div class="container">
    <div class="row" id="galleryList">
        @include('gallery-card', ['galleries' => $galleries])
    </div>

    <!-- LOAD MORE BUTTON -->
    <div class="load-more-wrapper text-center my-4">
        @if ($total > count($galleries))
            <button id="loadMore"
                    class="btn btn-success px-5 py-3 rounded-pill"
                    data-offset="{{ count($galleries) }}">
                Lihat Selengkapnya
            </button>
        @endif
    </div>
</div>

@push('scripts')
<script>
    document.getElementById('loadMore')?.addEventListener('click', function() {
        const button = this;
        const offset = button.getAttribute('data-offset');
        fetch(`{{ route('gallery.load_more') }}?offset=${offset}`)
            .then(response => response.text())
            .then(data => {
                const galleryList = document.getElementById('galleryList');
                galleryList.insertAdjacentHTML('beforeend', data);
                const newOffset = parseInt(offset) + 6;
                button.setAttribute('data-offset', newOffset);

                if (newOffset >= {{ $total }}) {
                    button.style.display = 'none';
                }
            })
            .catch(error => console.error('Error loading more galleries:', error));
    });
</script>
@include("partial.footer")
