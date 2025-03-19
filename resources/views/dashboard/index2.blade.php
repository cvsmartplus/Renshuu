@extends('layout.layout')
@php
    $title = 'Buat Pekerjaan';
    $subTitle = 'Pekerjaan';
    $script = '<script src="' . asset('assets/js/homeTwoChart.js') . '"></script> 
    <script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="row gy-4">
        <div class="col-xxl-8">
            <div class="row gy-4">

                <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
                    {{-- card start --}}
                    <div class="col">
                        <div class="card shadow-none border bg-gradient-start-1 h-100">
                            <div class="card-body p-20">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div>
                                        <p class="fw-medium text-primary-light mb-1">Total Anggota</p>
                                        <h6 class="mb-0">10,000</h6>
                                    </div>
                                    <div
                                        class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                                        <iconify-icon icon="gridicons:multiple-users"
                                            class="text-white text-2xl mb-0"></iconify-icon>
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
                    {{-- card start --}}
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
                    {{-- card start --}}
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
                                        <iconify-icon icon="fluent:people-20-filled"
                                            class="text-white text-2xl mb-0"></iconify-icon>
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
                    {{-- card start --}}
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
                                        <iconify-icon icon="solar:wallet-bold"
                                            class="text-white text-2xl mb-0"></iconify-icon>
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
                    {{-- card start --}}
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
                                        <iconify-icon icon="solar:wallet-bold"
                                            class="text-white text-2xl mb-0"></iconify-icon>
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
            </div>
        </div>
        <!-- chart start -->
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
        <!-- chart End -->
        
        {{-- chart start --}}
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
        {{-- chart end --}}

        {{-- chart start --}}
        <div class="row gy-4">
            <div class="col-md-6">
                <div class="card h-100 p-0">
                    <div class="card-header border-bottom bg-base py-16 px-24">
                        <h6 class="text-lg fw-semibold mb-0">Default Line Chart</h6>
                    </div>
                    <div class="card-body p-24">
                        <div id="defaultLineChart" class="apexcharts-tooltip-style-1"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- chart end --}}
        
        <div class="contrainer mt-5">
            <div class="col-xxl-6">
                <div class="card h-100">
                    <div class="card-body p-24">
                        <div class="table-responsive scroll-sm">
                            <table class="table bordered-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Perusahaan</th>
                                        <th scope="col">Jumlah Unggah Lowongan</th>
                                        <th scope="col">Tanggal Buat Akun</th>
                                        <th scope="col">Tentang Perusahaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PT_ADA</td>
                                        <td>2</td>
                                        <td><span
                                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                        </td>
                                        <td class="text-center text-neutral-700 text-xl">
                                            <div class="dropdown">
                                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <iconify-icon icon="ph:dots-three-outline-vertical-fill"
                                                        class="icon"></iconify-icon>
                                                </button>
                                                <ul class="dropdown-menu p-12 border bg-base shadow">
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Action</a></li>
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Another action</a></li>
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>BUMN</td>
                                        <td>3</td>
                                        <td><span
                                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                        </td>
                                        <td class="text-center text-neutral-700 text-xl">
                                            <div class="dropdown">
                                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <iconify-icon icon="ph:dots-three-outline-vertical-fill"
                                                        class="icon"></iconify-icon>
                                                </button>
                                                <ul class="dropdown-menu p-12 border bg-base shadow">
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Action</a></li>
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Another action</a></li>
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>NASA</td>
                                        <td>5</td>
                                        <td><span
                                                class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span>
                                        </td>
                                        <td class="text-center text-neutral-700 text-xl">
                                            <div class="dropdown">
                                                <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <iconify-icon icon="ph:dots-three-outline-vertical-fill"
                                                        class="icon"></iconify-icon>
                                                </button>
                                                <ul class="dropdown-menu p-12 border bg-base shadow">
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Action</a></li>
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Another action</a></li>
                                                    <li><a class="dropdown-item px-16 py-8 rounded text-secondary-light bg-hover-neutral-200 text-hover-neutral-900"
                                                            href="javascript:void(0)">Something else here</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
        <div class="card m-3">
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

        <div class="container mt-4">
            <div class="row justify-content-left">
                <div class="col-md-6">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex">
                            <!-- Logo Perusahaan -->
                            <img src="{{ asset('images/ADA-logo.png') }}" class="me-3"
                                style="width: 50px; height: 50px; margin: 0 auto; display: block;">

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
        <div class="mt-20">
            <div class="row justify-content-left">
                <div class="col-md-6">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex">
                            <!-- Logo Perusahaan -->
                            <img src="{{ asset('images/ADA-logo.png') }}" class="me-3"
                                style="width: 50px; height: 50px; margin: 0 auto; display: block;">

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
