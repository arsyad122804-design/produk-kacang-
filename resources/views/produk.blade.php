@extends('layouts.main')

@section('content')
<div class="py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Katalog Produk Kami</h2>
        <p class="text-muted">Pilih varian kacang favoritmu yang dijamin bikin nagih!</p>
    </div>

   <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100 border-0 shadow-sm">
            <img src="{{ asset('img/kacang pedas daun jeruk.jfif') }}" class="card-img-top" alt="Kacang Pedas">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="card-title fw-bold mb-0">Kacang Pedas</h5>
                    <span class="badge bg-danger">Hot</span>
                </div>
                <p class="card-text text-muted small">Perpaduan cabai asli dan aroma daun jeruk yang segar.</p>
                <h5 class="text-primary fw-bold">Rp 22.500</h5>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <button class="btn btn-outline-success w-100 rounded-pill">
                    <i class="fas fa-shopping-cart me-2"></i>Tambah
                </button>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card h-100 border-0 shadow-sm">
            <img src="{{ asset('img/kacang atom.jfif') }}" class="card-img-top" alt="Kacang Atom">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-2">Kacang Atom</h5>
                <p class="card-text text-muted small">Balutan tepung bumbu yang renyah dan gurih di setiap gigitan.</p>
                <h5 class="text-primary fw-bold">Rp 15.000</h5>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <button class="btn btn-outline-success w-100 rounded-pill">
                    <i class="fas fa-shopping-cart me-2"></i>Tambah
                </button>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card h-100 border-0 shadow-sm">
            <img src="{{ asset('img/kacang bawang.jfif') }}" class="card-img-top" alt="Kacang Bawang">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-2">Kacang Bawang</h5>
                <p class="card-text text-muted small">Kacang pilihan dengan bumbu bawang putih goreng yang melimpah.</p>
                <h5 class="text-primary fw-bold">Rp 20.000</h5>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <button class="btn btn-outline-success w-100 rounded-pill">
                    <i class="fas fa-shopping-cart me-2"></i>Tambah
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-shadow:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>
@endsection
