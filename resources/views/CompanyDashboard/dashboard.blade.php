@extends('layout.layoutcompany')

@php
    $title = 'Beranda';
    $subTitle = 'Kursus';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
<div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
    <!-- Total Loker Diunggah -->
    <div class="col">
        <div class="card shadow-none border bg-gradient-start-6 h-100">
            <div class="card-body p-20">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <p class="fw-medium text-primary-light mb-1">Total Loker Diunggah</p>
                        <h6 class="mb-0">100</h6>
                    </div>
                    <div class="w-50-px h-50-px bg-success rounded-circle d-flex justify-content-center align-items-center">
                        <iconify-icon icon="fluent:briefcase-20-filled" class="text-white text-2xl mb-0"></iconify-icon>
                    </div>
                </div>
                <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                    <span class="d-inline-flex align-items-center gap-1 text-success-main">
                        <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +50
                    </span>
                    Dibandingkan bulan lalu
                </p>
            </div>
        </div><!-- card end -->
    </div>

    <!-- Total Pelamar Kerja -->
    <div class="col">
        <div class="card shadow-none border bg-gradient-start-2 h-100">
            <div class="card-body p-20">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <p class="fw-medium text-primary-light mb-1">Total Pelamar Kerja</p>
                        <h6 class="mb-0">10,000</h6>
                    </div>
                    <div class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                        <iconify-icon icon="mdi:account-group" class="text-white text-2xl mb-0"></iconify-icon>
                    </div>
                </div>
                <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                    <span class="d-inline-flex align-items-center gap-1 text-success-main">
                        <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +5000
                    </span>
                    Dibandingkan bulan lalu
                </p>
            </div>
        </div><!-- card end -->
    </div>

    <!-- Total Pelamar Diterima -->
    <div class="col">
        <div class="card shadow-none border bg-gradient-start-3 h-100">
            <div class="card-body p-20">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <p class="fw-medium text-primary-light mb-1">Total Pelamar Diterima</p>
                        <h6 class="mb-0">200</h6>
                    </div>
                    <div class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                        <iconify-icon icon="mdi:check-circle" class="text-white text-2xl mb-0"></iconify-icon>
                    </div>
                </div>
                <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                    <span class="d-inline-flex align-items-center gap-1 text-success-main">
                        <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +20
                    </span>
                    Dibandingkan bulan lalu
                </p>
            </div>
        </div><!-- card end -->
    </div>

    <!-- Total Pelamar Ditolak -->
    <div class="col">
        <div class="card shadow-none border bg-gradient-start-7 h-100">
            <div class="card-body p-20">
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                    <div>
                        <p class="fw-medium text-primary-light mb-1">Total Pelamar Ditolak</p>
                        <h6 class="mb-0">500</h6>
                    </div>
                    <div class="w-50-px h-50-px bg-danger rounded-circle d-flex justify-content-center align-items-center">
                        <iconify-icon icon="mdi:close-circle" class="text-white text-2xl mb-0"></iconify-icon>
                    </div>
                </div>
                <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                    <span class="d-inline-flex align-items-center gap-1 text-success-main">
                        <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +25
                    </span>
                    Dibandingkan bulan lalu
                </p>
            </div>
        </div><!-- card end -->
    </div>


</div>


<div class="row gy-4 mt-1">
    <!-- Chart 1: Pendaftaran -->
    <div class="col-lg-6 col-md-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <h6 class="text-lg mb-0">Perkembangan Pendaftaran</h6>
                    <select class="form-select bg-base form-select-sm w-auto">
                        <option>Tahun</option>
                        <option>Bulan</option>
                        <option>Minggu</option>
                    </select>
                </div>
                <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
                    <h6 class="mb-0">2,000</h6>
                    <span class="text-xs fw-medium">Per bulan ini</span>
                </div>
                <div id="zoomAbleLineChart" class="chart-container"></div>
            </div>
        </div>
    </div>

    <!-- Chart 2: Pendapatan -->
    <div class="col-lg-6 col-md-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <h6 class="text-lg mb-0">Jumlah Lamaran Yang Ditolak</h6>
                    <select class="form-select bg-base form-select-sm w-auto">
                        <option>Tahun</option>
                        <option>Bulan</option>
                        <option>Minggu</option>
                    </select>
                </div>
                <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
                    <h6 class="mb-0">200</h6>
                    <span class="text-xs fw-medium">Per bulan ini</span>
                </div>
                <div id="defaultLineChart" class="chart-container"></div>
            </div>
        </div>
    </div>

    <!-- Column Chart -->
    <div class="col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <h6 class="text-lg mb-0">Jumlah Lamaran Yang Diterima</h6>
                    <select id="filterWaktuColumnChart" class="form-select bg-base form-select-sm w-auto">
                        <option value="tahun">Tahun</option>
                        <option value="bulan">Bulan</option>
                        <option value="minggu">Minggu</option>
                    </select>
                </div>
                <div class="d-flex flex-wrap align-items-center gap-2 mt-3">
                    <h6 id="totalColumnChart" class="mb-0">50</h6>
                    <span class="text-xs fw-medium">Per bulan ini</span>
                </div>
                <div id="columnGroupBarChart" class="chart-container"></div>
            </div>
        </div>
    </div>
    
</div>

<div class="row mb-5 pb-5" style="min-height: 80px;"></div>






    <div class="row mb-3">
        <div class="col-6">
        </div>
        <div class="col-6 d-flex d-inline-flex align-items-center flex-row-reverse">
            <a href="#" class="btn btn-primary" style="background-color: rgb(6, 42, 120); color: rgb(255, 255, 255)">
                <div class="d-inline-flex align-items-center text-light cursor-pointer">
                    <i class="ri-add-line"></i>
                    <span class="ms-2">Tambah Pekerjaan</span>
                </div>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-end gap-3">
            <div class="d-flex flex-wrap align-items-center gap-3">
                <div class="d-flex justify-content-end align-items-center gap-3">
                    <!-- Pencarian -->
                    <div class="d-flex align-items-center text-secondary cursor-pointer">
                        <i class="ri-search-line"></i>
                        <span class="ms-2">Pencarian</span>
                    </div>
                    <!-- Filter -->
                    <div class="d-flex align-items-center text-secondary cursor-pointer">
                        <i class="ri-filter-fill"></i>
                        <span class="ms-2">Filter</span>
                    </div>
                    <!-- Pilih -->
                    <div class="d-flex align-items-center text-secondary cursor-pointer">
                        <i class="ri-grid-line"></i>
                        <span class="ms-2">Pilih</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid mt-4">
        <div class="row justify-content-start">
            <div class="col-md-6">
                <div class="card shadow-sm p-3 custom-card">
                    <div class="d-flex align-items-center">
                        <!-- Logo Perusahaan -->
                        <img src="{{ asset('images/ADA Logo.png') }}" class="company-logo">
                        
                        <!-- Konten Lowongan -->
                        <div class="card-body text-left">
                            <div class="flex-grow-1">
                                <h6 class="text-danger fw-bold">Sales Associate</h6>
                                <p class="mb-0">PT Astra International Tbk</p>
                                <p class="text-muted small mb-0">Karawang</p>
                                <p class="text-muted small">Designer(UI/UX Designer, Web Designer)</p>
                            </div>
                        </div>
                        
                        <!-- Tombol Bookmark -->
                        <div>
                            <button>
                                <iconify-icon icon="bi-bookmark"></iconify-icon>
                            </button>
                        </div>
                    </div>
    
                    <!-- Informasi Tambahan -->
                    <div class="d-flex justify-content-between mt-2">
                        <small class="text-muted">1 jam yang lalu</small>
                        <a href="#" class="text-primary text-decoration-none">Selengkapnya ></a>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-start mt-3"> <!-- Tambahkan margin-top untuk jarak antar card -->
            <div class="col-md-6">
                <div class="card shadow-sm p-3 custom-card">
                    <div class="d-flex align-items-center">
                        <!-- Logo Perusahaan -->
                        <img src="{{ asset('images/ADA Logo.png') }}" class="company-logo">
                        
                        <!-- Konten Lowongan -->
                        <div class="card-body text-left">
                            <div class="flex-grow-1">
                                <h6 class="text-danger fw-bold">Sales Associate</h6>
                                <p class="mb-0">PT Astra International Tbk</p>
                                <p class="text-muted small mb-0">Karawang</p>
                                <p class="text-muted small">Designer(UI/UX Designer, Web Designer)</p>
                            </div>
                        </div>
                        
                        <!-- Tombol Bookmark -->
                        <div>
                            <button>
                                <iconify-icon icon="bi-bookmark"></iconify-icon>
                            </button>
                        </div>
                    </div>
    
                    <!-- Informasi Tambahan -->
                    <div class="d-flex justify-content-between mt-2">
                        <small class="text-muted">1 jam yang lalu</small>
                        <a href="#" class="text-primary text-decoration-none">Selengkapnya ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="mt-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-24">
            <span>Showing 1 to 10 of 12 entries</span>
            <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                <li class="page-item">
                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                        href="javascript:void(0)">
                        <iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                        href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                        href="javascript:void(0)">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                        href="javascript:void(0)">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                        href="javascript:void(0)">
                        <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection
