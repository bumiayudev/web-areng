@include("partial.header")
<!-- HERO BLOG DETAIL -->
<section class="blog-hero">
    <div class="container">
        {{-- <span class="blog-category">Artikel</span> --}}
        <h1>{{ $blog->title }}</h1>
        <p class="blog-meta">
            Diposting pada {{ date('d F Y', strtotime($blog->published_at)) }} oleh {{ $blog->author_name }}
        </p>
    </div>
</section>

<!-- CONTENT -->
<section class="blog-detail-content">
    <div class="container">
        <div class="blog-detail-wrapper">

            <!-- FEATURE IMAGE -->
            <img
                src="{{ asset('storage/' . $blog->image_path) }}"
                class="blog-thumbnail"
                alt="{{ $blog->title }}"
                fetchpriority="high"
                decoding="async"
                width="1200"
                height="600"
            >

            <!-- CONTENT BODY -->
            <article class="blog-content">
                {!! $blog->content !!}
            </article>

            <!-- SHARE -->
            <div class="blog-share">
                <span>Bagikan:</span>
                <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank">WhatsApp</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank">Facebook</a>
            </div>

        </div>
    </div>
</section>

@include("partial.footer")
