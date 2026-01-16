<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $seo['title'] ?? 'Arang Tempurung Kelapa Premium | Export Quality | Arang Kelapa Bumiayu' }}</title>
  <meta name="description" content="{{ $seo['description'] ?? 'Arang Tempurung Kelapa Premium | Export Quality' }}">
  <meta name="keywords" content="{{ $seo['keywords'] ?? 'arang kelapa, arang tempurung kelapa, briket kelapa, arang ekspor' }}">
  <meta property="og:title" content="{{ $seo['title'] ?? 'Arang Tempurung Kelapa Premium | Export Quality' }}">
  <meta property="og:description" content="{{ $seo['description'] ?? 'Arang Tempurung Kelapa Premium | Export Quality' }}">
  <meta property="og:image" content="{{ $seo['image'] ?? asset('images/briket.jpeg') }}">

    <!-- Canonical -->
  <link rel="canonical" href="{{ url()->current() }}">
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" width="50" height="50">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
        <li class="nav-item"><a href="{{ route("blog") }}" class="nav-link">Blog</a></li>
      </ul>
    </div>
  </div>
</nav>
