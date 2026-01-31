@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Produk Unggulan Kami</h2>
        <p class="text-muted">Pilih varian kacang favoritmu dan pesan langsung via WhatsApp!</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="{{ asset('img/kacang atom.jfif') }}" class="card-img-top" alt="Kacang Atom" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Kacang Atom</h5>
                    <p class="card-text text-muted">Kacang renyah dengan balutan tepung pilihan yang gurih dan bikin nagih.</p>
                    <h5 class="text-success fw-bold mt-auto mb-3">Rp 15.000</h5>
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20mau%20pesan%20Kacang%20Atom" 
                        target="_blank" class="btn btn-primary w-100">
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="{{ asset('img/kacang bawang.jfif') }}" class="card-img-top" alt="Kacang Telur" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Kacang Bawang</h5>
                    <p class="card-text text-muted">Kacang berkualitas dibumbui dengan bahan alami, gurih, dan renyah.</p>
                    <h5 class="text-success fw-bold mt-auto mb-3">Rp 18.000</h5>
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20mau%20pesan%20Kacang%20Telur" 
                        target="_blank" class="btn btn-primary w-100">
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-0">
                <img src="{{ asset('img/kacang pedas daun jeruk.jfif') }}" class="card-img-top" alt="Kacang Bawang" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Kacang Pedas Daun Jeruk</h5>
                    <p class="card-text text-muted">Kacang goreng pedas dengan daun jeruk asli yang sangat harum.</p>
                    <h5 class="text-success fw-bold mt-auto mb-3">Rp 20.000</h5>
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20mau%20pesan%20Kacang%20Bawang" 
                        target="_blank" class="btn btn-primary w-100">
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection