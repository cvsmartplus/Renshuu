@extends('layout.single')

@section('content')
    <div class="bg-cyan-100 text-light p-5" style="height: 300px;">
        <div class="container">
            <div class="text-center">
                <h2 class="lead">Pekerjaan</h2>
                <h4 class="text-muted my-4">Deskripsi Pekerjaan</h4>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex align-items-center gap-2">
                <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="image" class="img-fluid" style="max-width: 200px; height: auto;">
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('pekerjaan') }}" class="btn btn-primary rounded-3 px-4 py-2 text-center" style="background-color: #002F87; width: 110px; height: 45px;">
                    <i class="ri-arrow-left-line fs-5 me-2"></i>Kembali
                </a>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h4 class="text-neutral-900 mb-4">Designer</h4>
        <p class="h6 text-neutral-900">PT ADA Indonesia [Barang Konsumen yang Bergerak Cepat]</p>

        <div class="row my-3">
            <div class="col-md-6 d-flex align-items-center">
                <i class="ri-map-pin-line me-2 fs-4"></i>
                <span>Karawang, Tanjung Pura</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <i class="ri-building-line me-2 fs-4"></i>
                <span>Designer (UI/UX Designer, Web Designer)</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <i class="ri-time-line me-2 fs-4"></i>
                <span>Purna Waktu</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <i class="ri-money-dollar-circle-line me-2 fs-4"></i>
                <span>IDR 2.000.000 - 3.000.000</span>
            </div>
        </div>

        <p class="text-muted">Diposting 1 hari yang lalu</p>

        <div class="d-flex flex-wrap gap-2 mb-3">
            <a href="#" class="btn btn-primary">Lamar Sekarang</a>
            <button class="btn btn-outline-secondary">
                <i class="ri-save-2-fill"></i> Simpan
            </button>
        </div>

        <ul class="nav border-bottom">
            <li class="nav-item">
                <p>Opsi Tempat Kerja</p>
            </li>
            <li class="nav-item ms-3">
                <p>Kantor</p>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <div class="tab-pane fade show active">
                <h4>Deskripsi</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <p class="fw-bold fs-5">Tentang Perusahaan:</p>

        <div class="card shadow p-3">
            <div class="d-flex flex-column flex-md-row align-items-md-center">
                <img src="{{ asset('images/managers/ADA-logo.png') }}" class="me-3 img-fluid mb-3" style="max-width: 200px;">
                <div>
                    <p class="fw-bold fs-4 mb-0">ADA Company</p>
                    <p class="text-muted mb-1">
                        <i class="ri-briefcase-line"></i> Designer
                    </p>
                </div>
            </div>

            <p class="mt-3">Perusahaan ADA adalah entitas bisnis yang berfokus pada penciptaan dan pengembangan...</p>

            <p class="mb-0"><strong>Alamat Perusahaan</strong></p>
            <p class="text-muted">Karawang Barat, Tanjung Pura</p>
        </div>
    </div>
@endsection
