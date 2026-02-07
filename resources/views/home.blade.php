@extends('layouts.main')

@section('content')
<div class="row align-items-center py-5" style="min-height: 70vh;">
    <div class="col-md-6">
        <h1 class="display-4 fw-bold text-dark mb-3">
            Camilan <span class="text-success">Sehat</span>, <br>Rasa Berkelas!
        </h1>
        <p class="lead text-muted mb-4">
            Nikmati sensasi kacang pilihan yang diproses dengan resep rahasia.
            Tanpa pengawet, tinggi protein, dan pastinya bikin nagih!
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="/produk" class="btn btn-success btn-lg px-4 me-md-2 shadow">Beli Sekarang</a>
            <a href="/about" class="btn btn-outline-secondary btn-lg px-4">Tentang Kami</a>
        </div>
    </div>
    <div class="col-md-6 mt-4 mt-md-0 text-center">
        <img src="{{ asset('img/kacang.png')  }}"
             alt="Produk Kacang"
             class="img-fluid rounded-4 shadow-lg"
             style="max-height: 400px; object-fit: cover;">
    </div>
</div>

<div class="row text-center mt-5 py-5 bg-light rounded-4">
    <div class="col-md-4 mb-4">
        <div class="p-3">
            <i class="fas fa-leaf fa-3x text-success mb-3"></i>
            <h5 class="fw-bold">100% Organik</h5>
            <p class="text-muted small">Bahan baku pilihan langsung dari petani lokal.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="p-3">
            <i class="fas fa-fire fa-3x text-warning mb-3"></i>
            <h5 class="fw-bold">Disangrai Sempurna</h5>
            <p class="text-muted small">Lebih sehat karena minim penggunaan minyak.</p>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="p-3">
            <i class="fas fa-truck fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Pengiriman Cepat</h5>
            <p class="text-muted small">Kacang tetap renyah sampai ke depan pintu rumahmu.</p>
        </div>
    </div>
</div>
@endsection
