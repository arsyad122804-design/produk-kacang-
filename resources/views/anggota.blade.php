@extends('layouts.main')

@section('content')
<div class="text-center py-5">
    <h2 class="fw-bold">Anngota <span class="text-success">Kacang Berkah</span></h2>
    <p class="text-muted">Kenalan yuk sama enam orang keren di balik layar proyek ini!</p>
</div>

<div class="row justify-content-center g-4 mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
            <div class="mb-3">
                <img src="https://ui-avatars.com/api/?name=Anggota+1&background=FFC107&color=fff&size=150" class="rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff;">
            </div>
            <h6 class="fw-bold mb-1">Nama Anggota 1</h6>
            <p class="text-success small fw-bold mb-2">Project Leader</p>
            <p class="text-muted small mb-0">"Memastikan semua kacang tetap garing dan kode tetap running."</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
            <div class="mb-3">
                <img src="https://ui-avatars.com/api/?name=Anggota+2&background=28A745&color=fff&size=150" class="rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff;">
            </div>
            <h6 class="fw-bold mb-1">Nama Anggota 2</h6>
            <p class="text-success small fw-bold mb-2">UI Designer</p>
            <p class="text-muted small mb-0">"Bikin tampilan web seestetik warna kacang bawang pilihan."</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
            <div class="mb-3">
                <img src="https://ui-avatars.com/api/?name=Anggota+3&background=17A2B8&color=fff&size=150" class="rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff;">
            </div>
            <h6 class="fw-bold mb-1">Nama Anggota 3</h6>
            <p class="text-success small fw-bold mb-2">Backend Dev</p>
            <p class="text-muted small mb-0">"Ngelas database biar data pelanggan aman terkendali."</p>
        </div>
    </div>
</div>

<div class="row justify-content-center g-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
            <div class="mb-3">
                <img src="https://ui-avatars.com/api/?name=Anggota+4&background=E83E8C&color=fff&size=150" class="rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff;">
            </div>
            <h6 class="fw-bold mb-1">Nama Anggota 4</h6>
            <p class="text-success small fw-bold mb-2">Frontend Dev</p>
            <p class="text-muted small mb-0">"Tukang ngerapiin Blade CSS biar enak dipandang."</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
            <div class="mb-3">
                <img src="https://ui-avatars.com/api/?name=Anggota+5&background=6F42C1&color=fff&size=150" class="rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff;">
            </div>
            <h6 class="fw-bold mb-1">Nama Anggota 5</h6>
            <p class="text-success small fw-bold mb-2">Content Writer</p>
            <p class="text-muted small mb-0">"Penyusun kata-kata manis yang bikin pembeli laper."</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
            <div class="mb-3">
                <img src="https://ui-avatars.com/api/?name=Anggota+6&background=FD7E14&color=fff&size=150" class="rounded-circle shadow" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #fff;">
            </div>
            <h6 class="fw-bold mb-1">Nama Anggota 6</h6>
            <p class="text-success small fw-bold mb-2">Quality Control</p>
            <p class="text-muted small mb-0">"Tukang cek produk & bug sampai bener-bener bersih."</p>
        </div>
    </div>
</div>
@endsection
