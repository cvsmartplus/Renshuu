@extends('layout.layout')

@php
    $title='Menu Utama';
    $subTitle = 'Menu Utama';
    $script= '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3"> 
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a  href="{{ route('invoiceAdd') }}" class="btn btn-sm btn-primary-600"><i class="ri-add-line"></i> Create Invoice</a>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3 mt-4">
                    <div class="d-flex flex-wrap align-items-center gap-3"></div>
                    <div class="d-flex align-items-center gap-2 mt-4">
                        <span>Show</span>
                            <select class="form-select form-select-sm w-auto">
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                            </select>
                    </div>
                </div>  
            </div>
            <div class="row gy-4 mt-4">
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        Mar 3, 2025
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka.</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern.</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Read More
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
@endsection