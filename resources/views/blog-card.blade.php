@if (count($blogs) > 0)
    @foreach ($blogs as $blog)
    <article class="blog-card">
        <img src="{{ asset('storage/' . $blog->image_path) }}" alt="{{ $blog->title }}">

        <div class="blog-content">
            <h3>{{ $blog->title }}</h3>
            <p>{{ Str::limit(strip_tags($blog->content), 100) }}</p>

            <a href="{{ route('blog.detail', $blog->slug) }}">
                Baca Selengkapnya →
            </a>
        </div>
    </article>
    @endforeach
@else
    <div class="text-center"><b>Tidak ada artikel yang dipublikasikan.</b></div>
@endif
