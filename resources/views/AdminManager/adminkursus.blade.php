@extends('layout.layout')

@php
    $title = 'Halaman Kursus';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3 mb-20">
        <div class="d-flex flex-wrap align-items-center gap-3">
            <a href="{{ route('tambahkursus') }}" class="btn btn-sm btn-primary-600" style="background-color: blue;"><i class="ri-add-line"></i> Tambah
                Kursus</a>
        </div>
        <div class="d-flex flex-nowrap align-items-center gap-3">
            <a href="#" class="btn btn-sm btn-danger-600"><i class="ri-delete-bin-line" style="background-color: #"></i> Hapus
                Kursus</a>
        </div>
    </div>

     <div class="d-flex justify-content-between align-items-center flex-wrap my-3">

        <!-- Kiri: Filter + Status -->
        <div class="d-flex align-items-center gap-2">
            <!-- Filter Button -->
            <button
                class="btn btn-light border shadow-sm d-flex align-items-center gap-2">
                <iconify-icon icon="tabler:filter"></iconify-icon>
                Filter
            </button>
        </div>

        <!-- Kanan: Search Box -->
        <div class="input-group shadow-sm" style="max-width: 250px;">
            <span class="input-group-text bg-white border-end-0">
                <iconify-icon icon="tabler:search"></iconify-icon>
            </span>
            <input type="text" class="form-control border-start-0"
                placeholder="Pencarian">
        </div>
    </div>
    <div class="row gy-4">
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-90 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singlekursus') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Foto-aja.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <h6 class="mb-16">
                        <a href="{{ route('singlekursus') }}"
                            class="text-line-2 text-hover-primary-600 text-xl transition-2">Smart Factory</a>
                    </h6>
                    <div class="mt-20">
                        <p class="text-line-3 text-neutral-500">Transformasi Digital di Pabrik: Implementasi Smart
                            Factory.
                        </p>
                        <div class="d-flex text-neutral-500 fw-medium">
                            <i class="ri-user-line">
                                404
                            </i>
                        </div>
                        <span class="d-flex border-bottom border-neutral-300 border-dashed my-20"></span>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Harga: <strong>Rp.10.000</strong></span>
                            <a href="{{route('singlekursus')}}" class="text-decoration-none text-hover-primary-600">Selengkapnya &rsaquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-90 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singlekursus') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Foto.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <h6 class="mb-16">
                        <a href="{{ route('singlekursus') }}"
                            class="text-line-2 text-hover-primary-600 text-xl transition-2">Smart Home</a>
                    </h6>
                    <div class="mt-20">
                        <p class="text-line-3 text-neutral-500">Membangun Rumah Cerdas: Teknologi dan Integrasi Sistem.
                        </p>
                        <div class="d-flex text-neutral-500 fw-medium">
                            <i class="ri-user-line">
                                5
                            </i>
                        </div>
                        <span class="d-flex border-bottom border-neutral-300 border-dashed my-20"></span>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Harga: <strong>Rp.10.000</strong></span>
                            <a href="{{route('singlekursus')}}" class="text-decoration-none text-hover-primary-600">Selengkapnya &rsaquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-90 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singlekursus') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Tanam.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <h6 class="mb-16">
                        <a href="{{ route('singlekursus') }}"
                            class="text-line-2 text-hover-primary-600 text-xl transition-2">Smart Farming</a>
                    </h6>
                    <div class="mt-20">
                        <p class="text-line-3 text-neutral-500">Pertanian Cerdas:Inovasi Teknologi untuk Efisiensi.
                        </p>
                        <div class="d-flex text-neutral-500 fw-medium">
                            <i class="ri-user-line">
                                5
                            </i>
                        </div>
                        <span class="d-flex border-bottom border-neutral-300 border-dashed my-20"></span>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Harga: <strong>Rp.10.000</strong></span>
                            <a href="{{route('singlekursus')}}" class="text-decoration-none text-hover-primary-600">Selengkapnya &rsaquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-90 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singlekursus') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Teknologi.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <h6 class="mb-16">
                        <a href="{{ route('singlekursus') }}"
                            class="text-line-2 text-hover-primary-600 text-xl transition-2">Smart City</a>
                    </h6>
                    <div class="mt-20">
                        <p class="text-line-3 text-neutral-500"> "Kota Pintar: Solusi Teknologi untuk Perkotaan yang Lebih Baik.
                        </p>
                        <div class="d-flex text-neutral-500 fw-medium">
                            <i class="ri-user-line">
                                404
                            </i>
                        </div>
                        <span class="d-flex border-bottom border-neutral-300 border-dashed my-20"></span>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Harga: <strong>Rp.10.000</strong></span>
                            <a href="{{route('singlekursus')}}" class="text-decoration-none text-hover-primary-600">Selengkapnya &rsaquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-24">
        <span class="ms-1">Showing 1 to 10 of 12 entries</span>
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
@endsection
