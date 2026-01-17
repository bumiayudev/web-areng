@include("partial.header")
<section class="blog-hero">
    <h1>Artikel & Edukasi</h1>
    <p>Informasi seputar arang tempurung kelapa & industri</p>
</section>

<section class="blog-container" id="blogList">
    @include('blog-card', ['blogs' => $blogs])
</section>

<!-- LOAD MORE BUTTON -->
<div class="load-more-wrapper">
    @if ($total > count($blogs))
        <button id="loadMore"
                class="btn btn-success px-5 py-3 rounded-pill"
                data-offset="{{ count($blogs) }}">
            Lihat Selengkapnya
        </button>
    @endif
</div>
@push('scripts')
<script>
    document.getElementById('loadMore')?.addEventListener('click', function() {
        const button = this;
        const offset = button.getAttribute('data-offset');

        fetch(`{{ route('blog.load_more') }}?offset=${offset}`)
            .then(response => response.text())
            .then(data => {
                const blogList = document.getElementById('blogList');
                blogList.insertAdjacentHTML('beforeend', data);

                const newOffset = parseInt(offset) + 3;
                button.setAttribute('data-offset', newOffset);

                if (newOffset >= {{ $total }}) {
                    button.style.display = 'none';
                }
            })
            .catch(error => console.error('Error loading more blogs:', error));
    });
</script>
@endpush
@include("partial.footer")
