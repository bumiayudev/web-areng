@include("partial.header")
<section class="blog-hero">
    <h1>Artikel & Edukasi</h1>
    <p>Informasi seputar arang tempurung kelapa & industri</p>
</section>

<section class="blog-container">

    <article class="blog-card">
        <img src="https://media.istockphoto.com/id/937183680/id/foto/penambang-batubara-penambang-batubara-di-tangan-pria-berlatar-belakang-batubara-ide-gambar.webp?a=1&b=1&s=612x612&w=0&k=20&c=wVehV1M1kHZx5eUWTL4Qtp9O2E6g4pVclBx3fxTym6s=">
        <div class="blog-content">
            <h3>Manfaat Arang Tempurung Kelapa</h3>
            <p>Kenali keunggulan arang kelapa dibanding jenis lainnya.</p>
            <a href="{{ route('blog.detail', ['slug' => 'manfaat-arang-tempurung-kelapa']) }}">Baca Selengkapnya →</a>
        </div>
    </article>

    <article class="blog-card">
        <img src="https://media.istockphoto.com/id/1397454073/id/foto/arang-batok-kelapa-latar-belakang.webp?a=1&b=1&s=612x612&w=0&k=20&c=ug2sU-467-mFcdOEp40SY5KNkBuaWEjI542Wh_QKJ5Y=">
        <div class="blog-content">
            <h3>Proses Produksi Arang Berkualitas</h3>
            <p>Dari bahan baku hingga siap ekspor.</p>
            <a href="{{ route('blog.detail', ['slug' => 'proses-produksi-arang-berkualitas']) }}">Baca Selengkapnya →</a>
        </div>
    </article>

      <article class="blog-card">
        <img src="https://images.pexels.com/photos/6456251/pexels-photo-6456251.jpeg">
        <div class="blog-content">
            <h3>Tips Penyimpanan Arang</h3>
            <p>Cara menyimpan arang agar tetap kering dan awet.</p>
            <a href="{{ route('blog.detail', ['slug' => 'tips-penyimpanan-arang']) }}">Baca Selengkapnya →</a>
        </div>
    </article>

</section>

<!-- LOAD MORE BUTTON -->
<div class="load-more-wrapper">
    <button id="loadMore" class="btn-load">Lihat Selengkapnya</button>
</div>

<script>
    const cards = document.querySelectorAll('.blog-card');
    const loadBtn = document.getElementById('loadMore');

    let visible = 2; // tampil awal

    function showCards() {
        cards.forEach((card, index) => {
            if (index < visible) {
                card.classList.add('show');
            }
        });

        if (visible >= cards.length) {
            loadBtn.style.display = 'none';
        }
    }

    loadBtn.addEventListener('click', () => {
        visible += 3; // tampilkan 3 lagi
        showCards();
    });

    showCards();
</script>
@include("partial.footer")
