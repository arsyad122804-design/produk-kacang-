@extends('layouts.main')

@section('content')
    <div class="text-center mb-5">
        <h2>Tim Pengembang</h2>
        <p class="text-muted">Orang-orang di balik layar pembuatan Web Produk Kacang</p>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered border-primary">
            <thead class="table-primary text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Peran (Jobdesk)</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td><strong>Sayyid</strong></td>
                    <td>Lead Developer</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Naufal</td>
                    <td>Database Designer</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Arsyad</td>
                    <td>UI/UX Designer</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection