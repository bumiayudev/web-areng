<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $seo['title'] }}</title>
  <meta name="description" content="{{ $seo['description'] }}">
  <meta name="keywords" content="{{ $seo['keywords'] }}">
  <meta property="og:title" content="{{ $seo['title'] }}">
  <meta property="og:description" content="{{ $seo['description'] }}">
  <meta property="og:image" content="{{ $seo['image'] }}">

    <!-- Canonical -->
  <link rel="canonical" href="{{ url()->current() }}">
  <link rel="icon" href="{{ asset('images/briket.jpeg') }}" type="image/x-icon">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      scroll-behavior: smooth;
    }
    .hero {
      background-size: cover;
      background-position: center;
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
    .product-card:hover {
      transform: translateY(-8px);
      transition: 0.3s;
    }
    footer {
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #e0e0e0;
    }
    .gradient-navbar {
      background: linear-gradient(135deg, #1f4037, #99f2c8);
    }
    .gradient-navbar .nav-link,
    .gradient-navbar .navbar-brand {
      color: #ffffff !important;
      font-weight: 500;
    }
    .gradient-navbar .nav-link:hover {
      color: #ffe082 !important;
    }
    .wa-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      background: #25d366;
      border-radius: 50%;
      padding: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      transition: transform 0.3s ease;
      animation: wa-pulse 2s infinite;
    }
    .wa-float:hover {
      transform: scale(1.1);
    }
     @keyframes wa-pulse {
      0% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
      }
      70% {
        transform: scale(1.08);
        box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
      }
      100% {
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top gradient-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Arang Kelapa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#keunggulan">Keunggulan</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Slider -->
<section id="home">
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

<!-- Footer -->
<footer class="py-5">
<div class="container">
<div class="row">
<!-- Sitemap -->
<div class="col-md-4 mb-3">
<h5 class="fw-bold">Sitemap</h5>
<ul class="list-unstyled">
<li><a href="#home" class="text-decoration-none text-light">Home</a></li>
<li><a href="#produk" class="text-decoration-none text-light">Produk</a></li>
<li><a href="#keunggulan" class="text-decoration-none text-light">Keunggulan</a></li>
<li><a href="#kontak" class="text-decoration-none text-light">Kontak</a></li>
</ul>
</div>


<!-- Sosial Media -->
<div class="col-md-4 mb-3">
<h5 class="fw-bold">Sosial Media</h5>
<ul class="list-unstyled">
<li>📘 <a href="#" class="text-decoration-none text-light">Facebook</a></li>
<li>📸 <a href="#" class="text-decoration-none text-light">Instagram</a></li>
<li>🎥 <a href="#" class="text-decoration-none text-light">YouTube</a></li>
<li>💬 <a href="https://wa.me/6281386053773" target="_blank" class="text-decoration-none text-light">WhatsApp</a></li>
</ul>
</div>


<!-- Alamat Produksi -->
<div class="col-md-4 mb-3">
<h5 class="fw-bold">Alamat Produksi</h5>
<p class="mb-1">CV Arang Kelapa Bumiayu</p>
<p class="mb-1">Desa Babakan, Kec. Mustika Jaya</p>
<p class="mb-1">Kota Bekasi</p>
<p class="mb-1">Jawa Barat, Indonesia</p>
</div>
</div>


<hr class="border-light">
<p class="text-center mb-0">© 2026 Arang Tempurung Kelapa | Indonesia</p>
</div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/6281386053773?text=Halo%20saya%20tertarik%20dengan%20produk%20arang%20tempurung%20kelapa%20Anda.Terima%20kasih!"
   class="wa-float" target="_blank" aria-label="Chat WhatsApp">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="55">
</a>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "CV Arang Kelapa Bumiayu",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/briket.jpeg') }}",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Kota Bekasi",
    "addressRegion": "Jawa Barat",
    "addressCountry": "ID"
  }
}
</script>
<script>
    // Typing effect
  document.addEventListener('DOMContentLoaded', function() {
     function typeText(element) {
    const text = element.getAttribute('data-text');
    let index = 0;
    element.textContent = '';

    const interval = setInterval(() => {
      element.textContent += text[index];
      index++;
      if (index === text.length) {
        clearInterval(interval);
      }
    }, 80);
  }

  document.querySelectorAll('.typing-text').forEach(el => {
    typeText(el);
  });

  document.getElementById('heroCarousel').addEventListener('slid.bs.carousel', function () {
    document.querySelectorAll('.typing-text').forEach(el => {
      typeText(el);
    });
  });
});
  function showAlert(produk) {
    alert('Anda memilih produk: ' + produk + '\nSilakan hubungi kami untuk pemesanan.');
  }

  function sendMessage(e) {
    e.preventDefault();
    const nama = document.getElementById('nama').value;
    alert('Terima kasih ' + nama + ', pesan Anda telah dikirim!');
    e.target.reset();
  }
</script>
</body>
</html>
