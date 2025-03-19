@extends('layout.layout')

@section('content')
    <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3 mb-20">
        <div class="d-flex flex-wrap align-items-center gap-3">
            <a href="{{ route('invoiceAdd') }}" class="btn btn-sm btn-primary-600"><i class="ri-add-line"></i> Tambah
                Artikel</a>
        </div>
        <div class="d-flex flex-nowrap align-items-center gap-3">
            <a href="{{ route('invoiceAdd') }}" class="btn btn-sm btn-danger-600"><i class="ri-delete-bin-line"></i> Hapus
                Artikel</a>
        </div>
    </div>

    <div class="card mb-20">
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
                        <p class="text-line-3 text-neutral-500">Transformasi Digital di Pabrik: Implementasi Smart Factory.
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
                        <p class="text-line-3 text-neutral-500">Membangun Rumah Cerdas: Teknologi dan Integrasi Sistem.</p>
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
                        <p class="text-line-3 text-neutral-500"> "Kota Pintar: Solusi Teknologi untuk Perkotaan yang Lebih
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
