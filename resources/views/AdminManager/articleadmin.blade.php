@extends('layout.layout')

@section('content')
    <div class=" d-flex justify-content-end d-none d-sm-block text-sm-end">
        <p class="text-neutral-500">"Pilih artikel terlebih dahulu untuk menghapus"</p>
    </div>
    <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3 mb-20">
        <div class="d-flex flex-wrap align-items-center gap-3">
            <a href="{{ route('buatarticle') }}" class="btn btn-sm btn-primary-600"><i class="ri-add-line"></i> Tambah
                Artikel</a>
        </div>
        <div class="d-flex flex-nowrap align-items-center gap-3">
            <a href="{{ route('invoiceAdd') }}" class="btn btn-sm btn-danger-600"><i class="ri-delete-bin-line"></i> Hapus
                Artikel</a>
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
    <div class="row gy-4 mt-4">
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Rumah.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Selengkapnya
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Rumah.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Selengkapnya
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Rumah.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Selengkapnya
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Rumah.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Selengkapnya
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Radio2.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Radio2.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Radio2.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Radio2.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-20">
        <div class="d-flex justify-content-center">
            <div class="card w-100 p-2 text-center shadow-sm">
                <h5 class="fw-bold">Postingan Terbaru</h5>
            </div>
        </div>
    </div>
    <div class="row gy-4 mt-4">
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Gedung.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                Mar 3, 2025
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Gedung.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Gedung.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-4 col-sm-6">
            <div class="card h-100 p-0 radius-12 overflow-hidden">
                <div class="card-body p-24">
                    <a href="{{ route('singleartikel') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                        <img src="{{ asset('images/managers/Gedung.png') }}" alt=""
                            class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="mt-20">
                        <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                            <a href="blog-details"
                                class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                            <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                <i class="ri-calendar-2-line"></i>
                                20 Apr, 2023
                            </div>
                        </div>
                        <h6 class="mb-16">
                            <a href="{{ route('singleartikel') }}"
                                class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan:
                                Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                        </h6>
                        <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan
                            Pendidikan Modern.</p>
                        <a href="{{ route('singleartikel') }}"
                            class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                            Read More
                            <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
