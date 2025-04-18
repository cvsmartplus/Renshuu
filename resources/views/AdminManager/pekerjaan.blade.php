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
    <!-- Baris Tombol -->
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <button class="btn btn-primary">+ Create Invoice</button>
            <button class="btn btn-danger text-end" style="background-color: #D90000;">
                <i class="ri-delete-bin-6-line"></i> Hapus Loker
            </button>
        </div> 
    </div>

    <!-- Info Hapus Loker -->
    <div class="row">
        <div class="col">
            <div class="text-sm-end fw-bold d-none d-sm-block">
                Pilih terlebih dahulu loker apa yang ingin Anda hapus
            </div>
        </div>
    </div>

    <!-- Filter, Pencarian, dan Pilih -->
    <div class="card my-3">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-end gap-3">
            <div class="d-flex align-items-center text-secondary cursor-pointer">
                <i class="ri-search-line"></i> <span class="ms-2">Pencarian</span>
            </div>
            <div class="d-flex align-items-center text-secondary cursor-pointer">
                <i class="ri-filter-fill"></i> <span class="ms-2">Filter</span>
            </div>
            <div class="d-flex align-items-center text-secondary cursor-pointer">
                <i class="ri-grid-line"></i> <span class="ms-2">Pilih</span>
            </div>
        </div>
    </div>

    <!-- Daftar Loker -->
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
        <div class="col">
            <div class="card shadow-sm border-0 position-relative w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" 
                                 class="me-2 rounded" style="width: 100px; height: 50px;">
                        </div>
                    </div>

                    <div class="w-100 mt-2">
                        <h6 class="text-hover-lilac-600">Sales Associate</h6>
                        <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                        <p class="text-muted mb-0">Karawang</p>
                        <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                    </div>
                    <hr>
                    <div class="bg-white d-flex justify-content-between text-muted small">
                        <span class="text-start me-1">1 Jam yang lalu</span>
                        <a href="{{route('singleloker')}}" class="text-decoration-none text-end ms-1 hover-text-primary">Selengkapnya &gt;</a>
                    </div>
                    
                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <button class="btn btn-light"><i class="ri-bookmark-line"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm border-0 position-relative w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" 
                                 class="me-2 rounded" style="width: 100px; height: 50px;">
                        </div>
                    </div>

                    <div class="w-100 mt-2">
                        <h6 class="text-hover-lilac-600">Sales Associate</h6>
                        <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                        <p class="text-muted mb-0">Karawang</p>
                        <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                    </div>
                    <hr>
                    <div class="bg-white d-flex justify-content-between text-muted small">
                        <span class="text-start me-1">1 Jam yang lalu</span>
                        <a href="{{route('singleloker')}}" class="text-decoration-none text-end ms-1 hover-text-primary">Selengkapnya &gt;</a>
                    </div>

                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <button class="btn btn-light"><i class="ri-bookmark-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card shadow-sm border-0 position-relative w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" 
                                 class="me-2 rounded" style="width: 100px; height: 50px;">
                        </div>
                    </div>

                    <div class="w-100 mt-2">
                        <h6 class="text-hover-lilac-600">Sales Associate</h6>
                        <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                        <p class="text-muted mb-0">Karawang</p>
                        <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                    </div>
                    <hr>
                    <div class="bg-white d-flex justify-content-between text-muted small">
                        <span class="text-start me-1">1 Jam yang lalu</span>
                        <a href="{{route('singleloker')}}" class="text-decoration-none text-end ms-1 hover-text-primary">Selengkapnya &gt;</a>
                    </div>

                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <button class="btn btn-light"><i class="ri-bookmark-line"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm border-0 position-relative w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" 
                                 class="me-2 rounded" style="width: 100px; height: 50px;">
                        </div>
                    </div>

                    <div class="w-100 mt-2">
                        <h6 class="hover-text-primary">Sales Associate</h6>
                        <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                        <p class="text-muted mb-0">Karawang</p>
                        <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                    </div>
                    <hr>
                    <div class="bg-white d-flex justify-content-between text-muted small">
                        <span class="text-start me-1">1 Jam yang lalu</span>
                        <a href="{{route('singleloker')}}" class="text-decoration-none text-end ms-1 hover-text-primary">Selengkapnya &gt;</a>
                    </div>

                    <div class="position-absolute top-0 end-0 mt-2 me-2">
                        <button class="btn btn-light"><i class="ri-bookmark-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
