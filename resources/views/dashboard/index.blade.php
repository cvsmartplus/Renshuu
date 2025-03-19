@extends('layout.layout')

@php
    $title = 'Buat Kursus';
    $subTitle = 'Kursus';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-1 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Anggota</p>
                            <h6 class="mb-0">10,000</h6>
                        </div>
                        <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
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
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-2 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Kursus yang aktif</p>
                            <h6 class="mb-0">200</h6>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon>
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
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-3 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Kursus</p>
                            <h6 class="mb-0">500</h6>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="fluent:people-20-filled" class="text-white text-2xl mb-0"></iconify-icon>
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
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-4 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Total Pendapatan Kursus</p>
                            <h6 class="mb-0">Rp.3.000.000</h6>
                        </div>
                        <div
                            class="w-50-px h-50-px bg-success-main rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                    <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
                        <span class="d-inline-flex align-items-center gap-1 text-success-main">
                            <iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +Rp.1.000.000
                        </span>
                        Dibandingkan bulan lalu
                    </p>
                </div>
            </div><!-- card end -->
        </div>
    </div>

    <div class="row gy-4 mt-1">
        <div class="col-md-6">
            <div class="col-xxl-6 col-xl-12">
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
                        <div class="d-flex flex-wrap align-items-center gap-2 mt-8">
                            <h6 class="mb-0">2,000</h6>
                            <span class="text-xs fw-medium">Per bulan ini</span>
                        </div>
                        <div id="zoomAbleLineChart" class="pt-28 apexcharts-tooltip-style-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="col-xxl-6 col-xl-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <h6 class="text-lg mb-0">Perkembangan Pendapatan</h6>
                            <select class="form-select bg-base form-select-sm w-auto">
                                <option>Tahun</option>
                                <option>Bulan</option>
                                <option>Minggu</option>
                            </select>
                        </div>
                        <div class="d-flex flex-wrap align-items-center gap-2 mt-8">
                            <h6 class="mb-0">2,000</h6>
                            <span class="text-xs fw-medium">Per bulan ini</span>
                        </div>
                        <div id="defaultLineChart" class="apexcharts-tooltip-style-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 p-0">
                <div class="card-header border-bottom bg-base py-16 px-24">
                    <h6 class="text-lg fw-semibold mb-0">Column Charts</h6>
                </div>
                <div class="card-body p-24">
                    <div id="columnGroupBarChart" class=""></div>
                </div>
            </div>
        </div>
    </div>
    <p class="fw-muted text-xxl text-primary-light mt-110">
        Daftar admin kursus yang berhasil ditambahkan
    </p>
    <div class="col-xxl-6">
        <div class="table-responsive scroll-sm">
            <table class="table bordered-table mb-0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Admin Kursus</th>
                        <th scope="col">Jumlah Kursus Dibuat</th>
                        <th scope="col">Tanggal Akun Dibuat</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Habib Agan</td>
                        <td>12</td>
                        <td>20/02/2020</td>
                        <td><span
                                class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Masuul</td>
                        <td>15</td>
                        <td>12/09/2001</td>
                        <td><span
                                class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Rejected</span>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Aziz</td>
                        <td>29</td>
                        <td>31/12/2025</td>
                        <td><span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Completed</span>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Helnah</td>
                        <td>51</td>
                        <td>10/10/2010</td>
                        <td><span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Completed</span>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mas Agus</td>
                        <td>90</td>
                        <td>12/12/2012</td>
                        <td><span
                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Completed</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-110 mt-10 m-2">
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
                <a class="page-link bg-secondary-light text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                    href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
                <a class="page-link bg-secondary-light text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
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
    <div class="row mb-3">
        <div class="col-6">
            <p class="text-md text-primary-light m-2">
                Kursus yang berhasil anda tambahkan
            </p>
        </div>
        <div class="col-6 d-flex d-inline-flex align-items-center flex-row-reverse">
            <a href="#" class="btn btn-primary" style="background-color: blue">
                <div class="d-inline-flex align-items-center text-light cursor-pointer">
                    <i class="ri-add-line"></i>
                    <span class="ms-2">Tambah Kursus</span>
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
    <div class="mt-12">
        <div class="row gy-4">
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
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
                            <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Harga:Rp.10.000</span>
                                <a href="{{ route('singlekursus') }}" class="fw-bold">
                                    <span class=" text-hover-primary-600 transition-2">Selengkapnya</span>
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
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
                            <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Harga:Rp.10.000</span>
                                <a href="{{ route('singlekursus') }}" class="fw-bold">
                                    <span class=" text-hover-primary-600 transition-2">Selengkapnya</span>
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
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
                            <p class="text-line-3 text-neutral-500">Pertanian Cerdas: Inovasi Teknologi untuk Efisiensi dan
                                Produktivitas.</p>
                            <div class="d-flex text-neutral-500 fw-medium">
                                <i class="ri-user-line">
                                    5
                                </i>
                            </div>
                            <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Harga:Rp.10.000</span>
                                <a href="{{ route('singlekursus') }}" class="fw-bold">
                                    <span class=" text-hover-primary-600 transition-2">Selengkapnya</span>
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
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
                            <p class="text-line-3 text-neutral-500"> "Kota Pintar: Solusi Teknologi untuk Perkotaan yang
                                Lebih
                                Baik.</p>
                            <div class="d-flex text-neutral-500 fw-medium">
                                <i class="ri-user-line">
                                    5
                                </i>
                            </div>
                            <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Harga:Rp.10.000</span>
                                <a href="{{ route('singlekursus') }}" class="fw-bold">
                                    <span class=" text-hover-primary-600 transition-2">Selengkapnya</span>
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
