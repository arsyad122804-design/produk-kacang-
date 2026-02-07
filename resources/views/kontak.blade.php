@extends('layouts.main')

@section('content')
<div class="row py-5">
    <div class="col-md-12 text-center mb-5">
        <h2 class="fw-bold">Hubungi <span class="text-success">Kami</span></h2>
        <p class="text-muted">Punya pertanyaan atau mau pesan dalam jumlah besar? Sapa kami ya!</p>
    </div>

    <div class="col-md-5 mb-4">
        <div class="card border-0 shadow-sm p-4 bg-success text-white h-100" style="border-radius: 20px;">
            <h4 class="fw-bold mb-4">Informasi Kontak</h4>

            <div class="d-flex align-items-center mb-4">
                <div class="bg-white text-success rounded-circle p-3 me-3">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <p class="mb-0 fw-bold">Alamat Toko</p>
                    <p class="mb-0 small">Jl. Kacang Gurih No. 15, Sukoharjo, Jawa Tengah</p>
                </div>
            </div>

            <div class="d-flex align-items-center mb-4">
                <div class="bg-white text-success rounded-circle p-3 me-3">
                    <i class="fas fa-phone"></i>
                </div>
                <div>
                    <p class="mb-0 fw-bold">Telepon / WA</p>
                    <p class="mb-0 small">+62 812-3456-7890</p>
                </div>
            </div>

            <div class="d-flex align-items-center mb-4">
                <div class="bg-white text-success rounded-circle p-3 me-3">
                    <i class="fas fa-envelope"></i>
                </div>
                <div>
                    <p class="mb-0 fw-bold">Email</p>
                    <p class="mb-0 small">halo@kacangberkah.com</p>
                </div>
            </div>

            <div class="mt-auto">
                <p class="fw-bold mb-2">Ikuti Kami:</p>
                <div class="d-flex gap-3 fs-4">
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-7">
        <div class="card border-0 shadow-sm p-4 h-100" style="border-radius: 20px;">
            <form>
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Masukkan nama kamu...">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Alamat Email</label>
                    <input type="email" class="form-control form-control-lg bg-light border-0" placeholder="email@contoh.com">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Pesan</label>
                    <textarea class="form-control bg-light border-0" rows="4" placeholder="Tulis pesanmu di sini..."></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-lg w-100 fw-bold shadow-sm mt-3">Kirim Pesan Sekarang</button>
            </form>
        </div>
    </div>
</div>
@endsection
