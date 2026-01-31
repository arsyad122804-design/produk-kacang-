@extends('layouts.main')

@section('content')
    <h2 class="text-center mb-4">Katalog Produk Kacang</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Kacang Atom">
                <div class="card-body text-center">
                    <h5 class="card-title">Kacang Atom Super</h5>
                    <p class="card-text text-muted">Kacang garing dengan balutan tepung bumbu rahasia.</p>
                    <p class="fw-bold text-success">Rp 15.000</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Kacang Bawang">
                <div class="card-body text-center">
                    <h5 class="card-title">Kacang Bawang Gurih</h5>
                    <p class="card-text text-muted">Digoreng dengan irisan bawang putih asli yang melimpah.</p>
                    <p class="fw-bold text-success">Rp 18.000</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Kacang Pedas">
                <div class="card-body text-center">
                    <h5 class="card-title">Kacang Pedas Daun Jeruk</h5>
                    <p class="card-text text-muted">Sensasi pedas nendang dengan aroma daun jeruk segar.</p>
                    <p class="fw-bold text-success">Rp 20.000</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection