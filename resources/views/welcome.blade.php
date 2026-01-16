@include("partial.header")
<!-- Hero Slider -->
{{-- <section id="home">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false" data-bs-touch="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="hero d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)), url('{{ asset('images/produksi arang batok.jpeg')}}');">
            <div class="container text-center">
            <h1 class="display-4 fw-bold"><span class="typing-text" data-text="Arang Tempurung Kelapa Premium"></span></h1>
            <p class="lead">Ramah Lingkungan . Panas Tahan Lama . Kualitas Ekspor</p>
            <a href="#produk" class="btn btn-success btn-lg mt-3">Lihat Produk</a>
            </div>
            </div>
            </div>
            <div class="carousel-item">
            <div class="hero d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)), url('{{ asset('images/produksi-arang-kayu.jpeg') }}');">
            <div class="container text-center text-white">
            <h1 class="display-5 fw-bold"><span class="typing-text" data-text="Arang Kelapa Kualitas Ekspor"></span></h1>
            <p class="lead">Dipercaya pasar lokal & internasional</p>
            </div>
            </div>
            </div>
            <div class="carousel-item">
            <div class="hero d-flex align-items-center" style="background-image: linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)), url('{{ asset('images/produksi-briket-dari-arang-tempurung-kelapa.jpg') }}');">
            <div class="container text-center text-white">
            <h1 class="display-5 fw-bold"><span class="typing-text" data-text="Solusi Energi Alami"></span></h1>
            <p class="lead">Untuk BBQ, Shisha & Industri</p>
            </div>
            </div>
            </div>
        </div>
    </div>
</section> --}}
 <!-- HERO SECTION -->
<section class="hero" id="home">
    <div class="hero-bg"></div>

    <div class="hero-container">
        <div class="hero-content">
            <span class="badge">Produk Unggulan</span>

                <!-- ===== TEKS ASLI DISIMPAN DI HTML ===== -->
            <h1 class="typing" data-speed="70" data-delay="1500">
                Arang Tempurung Kelapa<br>
                <span>Kualitas Premium</span>
            </h1>

            <p class="typing" data-speed="25" data-delay="2000">
                Arang tempurung kelapa berkualitas tinggi, ramah lingkungan,
                tahan lama, dan siap memenuhi kebutuhan rumah tangga hingga ekspor.
            </p>

            <div class="hero-actions">
                <a href="#produk" class="btn-primary">Lihat Produk</a>
                <a href="#kontak" class="btn-outline">Hubungi Kami</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/produksi-briket-dari-arang-tempurung-kelapa.jpg') }}"
                    alt="Produk Arang Kelapa">
        </div>
    </div>
</section>

<!-- Produk Section -->
<section id="produk" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Produk Kami</h2>
    <div class="row g-4">
        @foreach ($products as $product)
        <div class="col-md-4">
          <div class="card product-card h-100 shadow">
            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->description }}</p>
              <button class="btn btn-outline-success" onclick="showAlert('{{ $product->name }}')">Pesan</button>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>
</section>

<!-- Keunggulan -->
<section id="keunggulan" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Keunggulan Kami</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <h5>🔥 Panas Tahan Lama</h5>
        <p>Waktu bakar lebih lama dibanding arang kayu biasa.</p>
      </div>
      <div class="col-md-4">
        <h5>🌱 Ramah Lingkungan</h5>
        <p>Terbuat dari tempurung kelapa tanpa bahan kimia berbahaya.</p>
      </div>
      <div class="col-md-4">
        <h5>📦 Siap Ekspor</h5>
        <p>Kualitas dan kemasan memenuhi standar internasional.</p>
      </div>
    </div>
  </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Hubungi Kami</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form onsubmit="sendMessage(event)">
          <div class="mb-3">
            <input type="text" class="form-control" id="nama" placeholder="Nama" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" id="pesan" rows="4" placeholder="Pesan" required></textarea>
          </div>
          <button class="btn btn-success w-100">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </div>
</section>

@include("partial.footer")

