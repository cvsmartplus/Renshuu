@extends('layout.single')

@section('content')
<div class="card p-0 radius-12 overflow-hidden m-5">
    <div class="card-body p-0">
        <img src="{{ asset('managers/Radio.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        <div class="p-32">
            <h4 class="mb-36 mt-20"> Masa Depan Pendidikan: Pembelajaran Online dan Tatap Muka</h4>
            <p class="text-neutral-500 mb-16">Di era digital, pendidikan telah mengalami transformasi yang signifikan dengan menggabungkan pembelajaran online dan tatap muka. Model pembelajaran hibrida ini menawarkan fleksibilitas dan aksesibilitas yang belum pernah terjadi sebelumnya. Siswa dapat menikmati keunggulan dari kedua dunia, mengakses materi pelajaran kapan saja dan di mana saja melalui platform online, sambil tetap mendapatkan manfaat dari interaksi tatap muka yang mendukung perkembangan sosial dan emosional mereka. Dengan kemajuan teknologi, pembelajaran online kini dapat menyediakan pengalaman belajar yang interaktif dan menarik, dengan bantuan video konferensi, modul interaktif, dan diskusi virtual. Hal ini memungkinkan guru untuk memberikan bimbingan dan umpan balik secara real-time, serta memfasilitasi kolaborasi antar siswa yang lebih dinamis. Dalam konteks pembelajaran tatap muka, siswa dapat lebih mudah berpartisipasi dalam kegiatan praktis, seperti eksperimen laboratorium dan proyek kelompok, yang memperkaya pemahaman mereka terhadap materi pelajaran.</p>
            <h4 class="mb-36">Mengapa Pembelajaran Hibrida Adalah Masa Depan?</h4>

            <div class="float-end">
                <img src="{{ asset('managers/Radio.png')}}" class="object-fit-scale" style="width: 250px; height: 250px;">
            </div>
            <div>
                <p class="text-neutral-500 mb-36 me-3">Di era digital, pendidikan telah mengalami transformasi yang signifikan dengan menggabungkan pembelajaran online dan tatap muka. Model pembelajaran hibrida ini menawarkan fleksibilitas dan aksesibilitas yang belum pernah terjadi sebelumnya. Siswa dapat menikmati keunggulan dari kedua dunia, mengakses materi pelajaran kapan saja dan di mana saja melalui platform online, sambil tetap mendapatkan manfaat dari interaksi tatap muka yang mendukung perkembangan sosial dan emosional mereka. Dengan kemajuan teknologi, pembelajaran online kini dapat menyediakan pengalaman belajar yang interaktif dan menarik, dengan bantuan video konferensi, modul interaktif, dan diskusi virtual. Hal ini memungkinkan guru untuk memberikan bimbingan dan umpan balik secara real-time, serta memfasilitasi kolaborasi antar siswa yang lebih dinamis. Dalam konteks pembelajaran tatap muka, siswa dapat lebih mudah berpartisipasi dalam kegiatan praktis, seperti eksperimen laboratorium dan proyek kelompok, yang memperkaya pemahaman mereka terhadap materi pelajaran.</p>
            </div>

            <h4 class="mb-20">Artikel Lainnya</h4>
            <div class="row">
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card h-100 p-0 radius-12 overflow-hidden">
                        <div class="card-body p-24">
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('managers/Gedung.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        20 Apr 2023
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('managers/Gedung.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        20 Apr 2023
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('managers/Radio2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        20 Apr 2023
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('managers/Radio2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        20 Apr 2023
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('managers/Radio2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        20 Apr 2023
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
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
                            <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                                <img src="{{ asset('managers/Radio2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="mt-20">
                                <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                    <a  href="blog-details" class="px-20 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Renshuu</a>
                                    <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                        <i class="ri-calendar-2-line"></i>
                                        20 Apr 2023
                                    </div>
                                </div>
                                <h6 class="mb-16">
                                    <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Masa Depan Pendidikan: Menggabungkan Pembelajaran Online dan Tatap Muka</a>
                                </h6>
                                <p class="text-line-3 text-neutral-500">Bagaimana Model Pembelajaran Hybrid Memenuhi Kebutuhan Pendidikan Modern</p>
                                <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                    Selengkapnya
                                    <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-end">
                    <button class="btn btn-primary-900 rounded-3" style="width: 110px; height:50px;">
                        <a href="{{ route('adminkursus') }}" class="d-flex align-items-center gap-8 text-neutral-200 text-hover-primary-600 transition-2">
                            <i class="ri-arrow-left-line text-md d-flex line-height-1"></i>
                            <span class="text-center">Kembali</span>
                        </a>
                    </button>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection