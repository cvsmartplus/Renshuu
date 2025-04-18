@extends('layout.layoutcompany')

@section('content')
<div class="d-flex flex-column align-items-start mb-3">
    <h5 class="fw-bold">Kelola Pelamar</h5>
</div> 

<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-sm-start fw-bold d-none d-sm-block mb-2">
                Pilih loker yang ingin dikelola kandidatnya
            </div>
        </div>
    </div>

    <!-- Pemberitahuan Penting -->
    <div class="position-relative mt-3 mb-3 p-3" style="background-color: #ffffff; border-left: 5px solid #062a78; border-radius: 6px;">
        <div class="d-flex justify-content-between align-items-start">
            <strong class="text-dark d-flex align-items-center">
                <i class="ri-information-line me-2"></i>Pemberitahuan Penting
            </strong>
            <button class="btn btn-sm" style="background-color: #062a78; color: white;" data-bs-toggle="collapse" data-bs-target="#infoCollapse" aria-expanded="false" aria-controls="infoCollapse">
                <i class="ri-arrow-down-s-line"></i>
            </button>
        </div>
        <div class="collapse mt-2" id="infoCollapse">
            <p class="mb-0 small text-dark">
                Admin perusahaan dapat melihat dan meninjau pelamar yang telah disortir oleh admin loker. Jika pelamar tersebut cocok dengan kebutuhan perusahaan, admin perusahaan dapat melanjutkan sesuai kebijakan perusahaan, termasuk menghubungi pelamar untuk wawancara langsung.
            </p>
        </div>
    </div>

    <!-- Filter, Pencarian, dan Pilih -->
    <div class="card mb-3">
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

    <!-- Card List -->
    <div class="row row-cols-1 row-cols-md-2 g-3 mb-3">
        @for ($i = 0; $i < 4; $i++)
        <div class="col">
            <div class="card shadow-sm border-0 position-relative w-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="Logo" class="me-2 rounded"
                                style="width: 100px; height: 50px;">
                        </div>
                    </div>

                    <div class="w-100 mt-2">
                        <h6 class="text-hover-lilac-600">Sales Associate</h6>
                        <p class="mb-0 fw-bold">PT Astra International Tbk</p>
                        <p class="text-muted mb-0">Karawang</p>
                        <p class="text-muted mb-1">Designer (UI/UX Designer, Web Designer)</p>
                    </div>
                    <hr>
                    <div class="bg-white d-flex justify-content-between text-muted small align-items-center mt-3">
                        <span class="text-start me-1">1 Jam yang lalu</span>
                        <a href="{{ route('singlekelolapelamar') }}"
                            class="btn btn-primary d-flex align-items-center justify-content-center gap-2"
                            style="width: 200px; background-color: #062a78;">
                            <i class="ri-user-line"></i>
                            Kelola Pelamar &gt;
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
</div>

<!-- Pagination -->
<div class="mt-3">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-3">
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