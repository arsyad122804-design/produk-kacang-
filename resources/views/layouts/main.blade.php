<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Produk Kacang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Kacang Berkah</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/produk">Produk</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/anggota">Anggota</a>
                <a class="nav-link" href="/kontak">Kontak</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content') </div>

    <footer class="text-center mt-5 py-3 bg-light">
        <p>&copy; 2024 Projek Produk Kacang - {{ auth()->user()->name ?? 'Guest' }}</p>
    </footer>
</body>
</html>