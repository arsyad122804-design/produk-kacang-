<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Produk Kacang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
    .navbar-brand { letter-spacing: 1px; }
</style>

<style>
    .card-img-top {
        width: 100%;
        height: 200px; /* Tentukan tinggi tetap */
        object-fit: cover; /* Gambar akan terpotong rapi tanpa gepeng */
    }
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px); /* Efek melayang saat kursor di atasnya */
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-success" href="/">
            <i class="fas fa-seedling me-2"></i>Kacang Berkah
        </a>
       <div class="navbar-nav ms-auto">
    <a class="nav-link px-3 {{ Request::is('/') ? 'active fw-bold' : '' }}" href="/">Home</a>
    <a class="nav-link px-3 {{ Request::is('produk') ? 'active fw-bold' : '' }}" href="/produk">Produk</a>
    <a class="nav-link px-3 {{ Request::is('about') ? 'active fw-bold' : '' }}" href="/about">About</a>

    <a class="nav-link px-3 {{ Request::is('anggota') ? 'active fw-bold' : '' }}" href="/anggota">Anggota</a>

    <a class="nav-link px-3 {{ Request::is('kontak') ? 'active fw-bold' : '' }}" href="/kontak">Kontak</a>
</div>
    </div>
</nav>
    </nav>

    <div class="container mt-4">
        @yield('content') </div>

    <footer class="text-center py-4 mt-5 bg-white border-top">
    <p class="text-muted mb-0">&copy; 2026 <strong>Projek Produk Kacang</strong>. Dibuat dengan ❤️ untuk camilan sehat.</p>
</footer>
</body>
</html>
