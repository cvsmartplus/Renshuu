@extends('layout.layout')

@php
    $title = 'Menu Utama';
    $subTitle = 'Menu Utama';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card-header d-flex flex-wrap align-items-center">
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="{{ route('invoiceAdd') }}" class="btn btn-sm btn-primary-600"><i class="ri-add-line"></i>
                            Create Invoice
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 text-end mb-4">
                <div class="card-header d-flex flex-row-reverse align-items-center gap-3">
                    <div class="d-flex felx-wrap align-items-center gap-3">
                        <a href="#" class="btn btn-sm btn-danger-600"><i class="ri-delete-bin-line"></i>
                            Hapus Loker
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="text-sm-end fw-bold d-none d-sm-block">Pilih terlebih dahulu loker apa yang ingin anda hapus
                </div>
            </div>
        </div>
        <div class="card my-3">
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
        <div class="row m-1">
            <div class="card shadow-sm border-0 position-relative" style="max-width: 450px;">
                <div class="card-body">
                    <div class="row">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-start">
                                    <!-- Logo Perusahaan -->
                                    <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" class="me-2 rounded"
                                        style="width: 100px; height: 50px;">
                                    <div class="d-flex justify-content-end">
                                        <button>
                                        <i class="ri-bookmark-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="w-100">
                                    <!-- Nama Pekerjaan -->
                                    <h6 class="text-hover-lilac-600">Sales Associate</h6>
                                    <!-- Nama Perusahaan -->
                                    <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                                    <!-- Lokasi -->
                                    <p class="text-muted mb-0">Karawang</p>
                                    <!-- Posisi -->
                                    <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between text-muted small">
                            <span class="text-start">1 Jam yang lalu</span>
                            <a href="#" class="text-decoration-none text-end">Selengkapnya &gt;</a>
                        </div>
                    </div>
                    <!-- Ikon Bookmark -->
                </div>
            </div>
            <div class="card shadow-sm border-0 position-relative ms-110" style="max-width: 450px;">
                <div class="card-body d-flex flex-row-reverse">
                    <div class="row ">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-start">
                                    <!-- Logo Perusahaan -->
                                    <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" class="me-2 rounded"
                                        style="width: 100px; height: 50px;">
                                    <div class="d-flex justify-content-end">
                                        <button>
                                        <i class="ri-bookmark-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="w-100">
                                    <!-- Nama Pekerjaan -->
                                    <h6 class="text-hover-lilac-600">Sales Associate</h6>
                                    <!-- Nama Perusahaan -->
                                    <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                                    <!-- Lokasi -->
                                    <p class="text-muted mb-0">Karawang</p>
                                    <!-- Posisi -->
                                    <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between text-muted small">
                            <span class="text-start">1 Jam yang lalu</span>
                            <a href="#" class="text-decoration-none text-end">Selengkapnya &gt;</a>
                        </div>
                    </div>
                    <!-- Ikon Bookmark -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card shadow-sm border-0 position-relative ms-110" style="max-width: 450px;">
                <div class="card-body d-flex flex-row-reverse">
                    <div class="row ">
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-between align-items-start">
                                    <!-- Logo Perusahaan -->
                                    <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" class="me-2 rounded"
                                        style="width: 100px; height: 50px;">
                                    <div class="d-flex justify-content-end">
                                        <button>
                                        <i class="ri-bookmark-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="w-100">
                                    <!-- Nama Pekerjaan -->
                                    <h6 class="text-hover-lilac-600">Sales Associate</h6>
                                    <!-- Nama Perusahaan -->
                                    <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                                    <!-- Lokasi -->
                                    <p class="text-muted mb-0">Karawang</p>
                                    <!-- Posisi -->
                                    <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between text-muted small">
                            <span class="text-start">1 Jam yang lalu</span>
                            <a href="#" class="text-decoration-none text-end">Selengkapnya &gt;</a>
                        </div>
                        <div class="card shadow-sm border-0 position-relative ms-110" style="max-width: 450px;">
                            <div class="card-body d-flex flex-row-reverse">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <!-- Logo Perusahaan -->
                                                <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" class="me-2 rounded"
                                                    style="width: 100px; height: 50px;">
                                                <div class="d-flex justify-content-end">
                                                    <button>
                                                    <i class="ri-bookmark-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="w-100">
                                                <!-- Nama Pekerjaan -->
                                                <h6 class="text-hover-lilac-600">Sales Associate</h6>
                                                <!-- Nama Perusahaan -->
                                                <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                                                <!-- Lokasi -->
                                                <p class="text-muted mb-0">Karawang</p>
                                                <!-- Posisi -->
                                                <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white d-flex justify-content-between text-muted small">
                                        <span class="text-start">1 Jam yang lalu</span>
                                        <a href="#" class="text-decoration-none text-end">Selengkapnya &gt;</a>
                                    </div>
                                <!-- Ikon Bookmark -->
                            </div>
                        </div>
                    </div>
                    <!-- Ikon Bookmark -->
                </div>
            </div>

        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-24">
            <span class="ms-1">menampilkan 1 dari 1 entri</span>
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
