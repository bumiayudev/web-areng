<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bumiayu Arang – Bahan Bakar Alami Berkualitas</title>
<!-- SEO Meta -->
<meta name="description" content="Supplier arang tempurung kelapa, arang kayu, dan briket berkualitas tinggi. Panas tinggi, abu rendah, siap suplai industri, UMKM, restoran, dan ekspor." />
<meta name="keywords" content="arang tempurung kelapa, arang kayu, briket arang, supplier arang, arang ekspor, arang industri" />
<meta name="author" content="Arang Nusantara" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }


    /* HERO TWO FRAME */
    .hero-two-frame {
    background: linear-gradient(120deg, #f8f9fa 50%, #ffffff 50%);
    position: relative;
    }


    /* HERO SLIDER IMAGE */
    .carousel-inner img {
    height: 420px;
    object-fit: cover;
    border-radius: 1rem;
    }


    /* PARALLAX PERFORMANCE OPTIMIZATION */
    .parallax-img,
    .parallax-text {
    will-change: transform;
    }


    /* PRODUCT IMAGE */
    .product-img {
    height: 220px;
    object-fit: cover;
    }


    /* ICON */
    .icon-box {
    font-size: 40px;
    color: #198754;
    }


    /* FLOATING WHATSAPP CTA */
    .wa-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 25px;
    right: 25px;
    background-color: #25D366;
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999;
    animation: pulse 1.8s infinite;
    }


    .wa-float img {
    width: 34px;
    height: 34px;
    }


    @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
    }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Bumiayu Arang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#keunggulan">Keunggulan</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link btn btn-success text-white ms-lg-3" href="#kontak">Hubungi</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section / Two Frame + Slider + Parallax -->
<section class="hero-two-frame py-5 overflow-hidden parallax-hero">
<div class="container">
<div class="row align-items-center min-vh-100">


<!-- Frame Slider Gambar -->
<div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
<div id="heroImageSlider" class="carousel slide parallax-img" data-bs-ride="carousel">
<div class="carousel-inner rounded-4 shadow">
<div class="carousel-item active">
<img src="{{ asset("images/batok kelapa.jpeg") }}" class="d-block w-100" alt="Arang Tempurung Kelapa">
</div>
<div class="carousel-item">
<img src="{{ asset("images/produksi arang batok.jpeg") }}" class="d-block w-100" alt="Arang Kayu Berkualitas">
</div>
<div class="carousel-item">
<img src="{{ asset("images/produksi-arang-kayu.jpeg") }}" class="d-block w-100" alt="Briket Arang Premium">
</div>
</div>
</div>
</div>


<!-- Frame Konten -->
<div class="col-lg-6 parallax-text" data-aos="fade-left">
<span class="badge bg-success mb-3">Supplier Terpercaya</span>
<h1 class="fw-bold display-6 mb-3">Arang Tempurung Kelapa & Kayu untuk Kebutuhan Industri & Ekspor</h1>
<p class="lead">Kami menyediakan arang alami berkualitas tinggi dengan standar industri. Cocok untuk BBQ, restoran, UMKM, manufaktur, hingga pasar ekspor.</p>


<ul class="list-unstyled mt-4">
<li class="mb-2">🔥 Panas tinggi & pembakaran stabil</li>
<li class="mb-2">🌱 Ramah lingkungan & rendah abu</li>
<li class="mb-2">📦 Kapasitas suplai besar & konsisten</li>
</ul>


<div class="mt-4">
<a href="#produk" class="btn btn-success btn-lg me-2">Lihat Produk</a>
<a href="#kontak" class="btn btn-outline-success btn-lg">Hubungi Kami</a>
</div>
</div>


</div>
</div>
</section>

<!-- Produk -->
<section id="produk" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Produk Kami</h2>
      <p class="text-muted">Arang alami dengan kualitas terbaik</p>
    </div>
    <div class="row g-4">
    @foreach($products as $product)
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset("storage/".$product->image) }}" class="card-img-top product-img" alt="{{ $product->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
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
    <div class="text-center mb-5">
      <h2 class="fw-bold">Keunggulan Kami</h2>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="icon-box">🔥</div>
        <h5 class="mt-3">Panas Tinggi</h5>
        <p>Efisiensi pembakaran maksimal.</p>
      </div>
      <div class="col-md-4">
        <div class="icon-box">🌱</div>
        <h5 class="mt-3">Ramah Lingkungan</h5>
        <p>100% bahan alami dan berkelanjutan.</p>
      </div>
      <div class="col-md-4">
        <div class="icon-box">📦</div>
        <h5 class="mt-3">Siap Kirim</h5>
        <p>Melayani pengiriman lokal & ekspor.</p>
      </div>
    </div>
  </div>
</section>

<!-- Tentang Kami -->
<section id="tentang" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2 class="fw-bold">Tentang Bumiayu Arang</h2>
        <p>Kami adalah penyedia bahan bakar arang tempurung kelapa dan kayu dengan standar kualitas tinggi. Berpengalaman melayani kebutuhan industri, UMKM, hingga pasar ekspor.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset("images/briket.jpeg") }}" class="img-fluid rounded" alt="Tentang Kami">
      </div>
    </div>
  </div>
</section>

<!-- Kontak -->
<section id="kontak" class="py-5 bg-dark text-white">
  <div class="container text-center">
    <h2 class="fw-bold">Hubungi Kami</h2>
    <p class="mb-4">Dapatkan penawaran terbaik untuk kebutuhan Anda</p>
    <button class="btn btn-success btn-lg" onclick="hubungiKami()">Hubungi via WhatsApp</button>
  </div>
</section>

<!-- Footer -->
<footer class="py-3 bg-black text-center text-white">
  <small>© <span id="copyright"></span> Bumiayu Arang. All Rights Reserved.</small>
</footer>

<!-- Floating WhatsApp CTA -->
<a href="https://wa.me/6281466863157?text=Halo%20saya%20tertarik%20dengan%20produk%20arang" class="wa-float" target="_blank" aria-label="Chat WhatsApp">
<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
</a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
const d = new Date();
const currentYear = d.getFullYear();
document.getElementById('copyright').innerHTML = currentYear;

function hubungiKami() {
window.open('https://wa.me/6281466863157?text=Halo%20saya%20tertarik%20dengan%20produk%20arang', '_blank');
}
// Parallax Hero Effect (Vanilla JS)
const parallaxImg = document.querySelector('.parallax-img');
const parallaxText = document.querySelector('.parallax-text');


window.addEventListener('scroll', () => {
const scrollY = window.scrollY;
if (parallaxImg && parallaxText) {
parallaxImg.style.transform = `translateY(${scrollY * 0.08}px)`;
parallaxText.style.transform = `translateY(${scrollY * 0.05}px)`;
}
});


window.addEventListener('scroll', () => {
const scrollY = window.scrollY;
if (parallaxImg && parallaxText) {
parallaxImg.style.transform = `translateY(${scrollY * 0.08}px)`;
parallaxText.style.transform = `translateY(${scrollY * 0.05}px)`;
}
});


// JS Slider (tanpa plugin)
const slides = document.querySelectorAll('#heroImageSlider .carousel-item');
let currentSlide = 0;


function showSlide(index) {
slides.forEach((slide, i) => {
slide.classList.remove('active');
if (i === index) slide.classList.add('active');
});
}


setInterval(() => {
currentSlide = (currentSlide + 1) % slides.length;
showSlide(currentSlide);
}, 4000);
</script>

</body>
</html>
