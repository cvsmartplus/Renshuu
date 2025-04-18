@extends('layout.layoutcompany')

@section('content')
<div class="d-flex flex-column align-items-start mb-3">
    <h5 class="fw-bold">Kelola Pekerjaan</h5>
</div>

<div class="container py-4">
    <!-- Tombol Aksi -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="#" class="btn" style="background-color: rgb(6, 42, 120); color: white; border: none;">
            <div class="d-inline-flex align-items-center text-light cursor-pointer">
                <i class="ri-add-line"></i>
                <span class="ms-2">Tambah Pekerjaan</span>
            </div>
        </a>

        <div class="d-flex flex-column align-items-end">
            <a href="#" class="btn" style="background-color: #b30202; color: white; border: none;">
                <div class="d-inline-flex align-items-center text-light cursor-pointer">
                    <i class="ri-delete-bin-line"></i>
                    <span class="ms-2">Hapus Pekerjaan</span>
                </div>
            </a>
        </div>
    </div>

    <!-- Search & Filter -->
    <div class="card my-3">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-end gap-3">
            <div class="d-flex flex-wrap align-items-center gap-3">
                <div class="d-flex justify-content-end align-items-center gap-3">
                    <div class="d-flex align-items-center text-secondary cursor-pointer">
                        <i class="ri-search-line"></i>
                        <span class="ms-2">Pencarian</span>
                    </div>
                    <div class="d-flex align-items-center text-secondary cursor-pointer">
                        <i class="ri-filter-fill"></i>
                        <span class="ms-2">Filter</span>
                    </div>
                    <div class="d-flex align-items-center text-secondary cursor-pointer">
                        <i class="ri-grid-line"></i>
                        <span class="ms-2">Pilih</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Daftar Card Loker -->
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-3 mt-4">
        @for ($i = 0; $i < 4; $i++)
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
                            <a href="{{ route('singleloker') }}" class="text-decoration-none text-end ms-1 hover-text-primary">
                                Selengkapnya &gt;
                            </a>
                        </div>

                        <div class="position-absolute top-0 end-0 mt-2 me-2">
                            <button class="btn btn-light"><i class="ri-bookmark-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- Pagination -->
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
</div>
@endsection
