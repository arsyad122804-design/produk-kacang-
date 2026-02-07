@extends('layouts.main')

@section('content')
<div class="row py-5 align-items-center">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <span class="text-success fw-bold text-uppercase" style="letter-spacing: 2px;">Tentang Kami</span>
        <h2 class="display-5 fw-bold mt-2 mb-4">Membawa <span class="text-warning">Kelezatan Tradisional</span> ke Meja Anda</h2>
        <p class="text-muted mb-4" style="line-height: 1.8;">
            Berawal dari dapur kecil di rumah, **Kacang Berkah** hadir dengan misi sederhana: menyajikan camilan kacang yang tidak hanya gurih, tapi juga sehat dan berkualitas tinggi. Kami percaya bahwa bahan pilihan adalah kunci dari rasa yang tak terlupakan.
        </p>
        <p class="text-muted">
            Setiap butir kacang kami pilih secara manual, disangrai dengan suhu yang tepat, dan dikemas dengan cinta agar keaslian rasanya tetap terjaga sampai ke tangan Anda.
        </p>
    </div>
    <div class="col-lg-6 text-center">
        <img src="{{ asset('img/kacang.png') }}" alt="Our Story" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px; object-fit: cover;">
    </div>
</div>

<div class="row g-4 py-5 bg-light rounded-4 mb-5">
    <div class="col-md-6">
        <div class="p-4 bg-white h-100 rounded-3 shadow-sm border-start border-warning border-5">
            <h4 class="fw-bold"><i class="fas fa-eye text-warning me-2"></i>Visi Kami</h4>
            <p class="text-muted mb-0">Menjadi produsen camilan kacang nomor satu yang dikenal karena kejujuran kualitas dan rasa yang autentik.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-4 bg-white h-100 rounded-3 shadow-sm border-start border-success border-5">
            <h4 class="fw-bold"><i class="fas fa-bullseye text-success me-2"></i>Misi Kami</h4>
            <p class="text-muted mb-0">Memberdayakan petani lokal dan menyajikan produk camilan tanpa pengawet yang aman dikonsumsi seluruh keluarga.</p>
        </div>
    </div>
</div>

<div class="row text-center py-4">
    <div class="col-4">
        <h2 class="fw-bold text-success mb-0">5+</h2>
        <p class="text-muted small uppercase">Tahun Pengalaman</p>
    </div>
    <div class="col-4">
        <h2 class="fw-bold text-success mb-0">10k+</h2>
        <p class="text-muted small uppercase">Produk Terjual</p>
    </div>
    <div class="col-4">
        <h2 class="fw-bold text-success mb-0">50+</h2>
        <p class="text-muted small uppercase">Reseller Aktif</p>
    </div>
</div>
@endsection
