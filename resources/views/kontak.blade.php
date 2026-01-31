@extends('layouts.main')

@section('content')
    <h2 class="text-center mb-5">Hubungi Kami</h2>
    <div class="row">
        <div class="col-md-5">
            <h4>Informasi Kontak</h4>
            <ul class="list-unstyled mt-3">
                <li><strong>📍 Alamat:</strong> Jl. Kacang Panjang No. 123, Indonesia</li>
                <li><strong>📞 WhatsApp:</strong> 0812-3456-7890</li>
                <li><strong>✉️ Email:</strong> halo@kacangberkah.com</li>
            </ul>
        </div>
        <div class="col-md-7">
            <div class="card p-4 shadow-sm">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" rows="3" placeholder="Tulis pesan untuk kami"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
@endsection