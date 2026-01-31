@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Hubungi Kami</h2>
        <p class="text-muted">Punya pertanyaan atau mau pesan kacang dalam jumlah besar? Kami siap membantu!</p>
    </div>

    <div class="row g-5">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm p-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama kamu...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" placeholder="nama@email.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Pesan</label>
                        <textarea class="form-control" rows="5" placeholder="Tulis pesan atau detail pesananmu di sini..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 py-2">Kirim Pesan</button>
                </form>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="ps-lg-4">
                <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                
                <div class="d-flex mb-4">
                    <div class="bg-primary text-white p-3 rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        📍
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Alamat Kantor</h6>
                        <p class="text-muted">Jl. Kacang Gurih No.15 Surakarta</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="bg-success text-white p-3 rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        📞
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">WhatsApp / Telepon</h6>
                        <p class="text-muted">+62 89528036024</p>
                    </div>
                </div>

                <div class="d-flex mb-4">
                    <div class="bg-info text-white p-3 rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                        ✉️
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Email Support</h6>
                        <p class="text-muted">halo@kacangBerkah.com</p>
                    </div>
                </div>

                <div class="mt-4 rounded shadow-sm overflow-hidden" style="height: 200px; background: #eee; display: flex; align-items: center; justify-content: center; color: #888;">
                    <p>Peta Lokasi (Google Maps)</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection