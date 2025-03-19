@extends('layout.single')

@section('content')
    <div class="bg-cyan-100 text-light p-5" style="height: 300px;">
        <div class="container-fluid">
            <div class="text-center">
                <h2 class="lead">Pekerjaan</h2>
                <div class="d-block">
                    <h4 class="text-muted my-4">
                        Deskripsi Pekerjaan
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between m-5 mb-16">
            <div class="d-flex align-items-center gap-2">
                <img src="{{ asset('images/managers/ADA-logo.png') }}" alt="image"
                    class="w-200-px h-100-px object-fit-cover">
            </div>
            <a href="{{ route('adminkursus') }}"
                class="btn btn-primary rounded-3 d-flex align-items-center justify-content-center m-3"
                style="background-color: #002F87; width: 110px; height: 50px;">
                <i class="ri-arrow-left-line fs-5 me-2"></i>
                <span>Kembali</span>
            </a>
        </div>
    </div>
    <div class="container-fluid mb-440">
        <div class="m-5">
            <h4 class="text-neutral-900 mb-4">Designer</h4>
            <div class="d-block h6 text-neutral-900" style="font-family: Arial, Helvetica, sans-serif">
                PT ADA Indonesia [Barang Konsumen yang Bergerak Cepat]
            </div>
            <div class="d-flex align-items-center my-20">
                <i class="ri-map-pin-line me-2" style="font-size: 25px;"></i>
                <span class="ms-3">Karawang, Tanjung Pura</span>
            </div>

            <div class="d-flex align-items-center mb-20">
                <i class="ri-building-line me-2" style="font-size: 25px;"></i>
                <span class="ms-3">Designer (UI/UX Designer, Web Designer)</span>
            </div>

            <div class="d-flex align-items-center mb-20">
                <i class="ri-time-line me-2" style="font-size: 25px;"></i>
                <span class="ms-3">Purna Waktu</span>
            </div>

            <div class="d-flex align-items-center mb-20">
                <i class="ri-money-dollar-circle-line me-2" style="font-size: 25px;"></i>
                <span class="ms-3">IDR 2.000.000 - 3.000.000</span>
            </div>

            <p class="text-muted mt-2">Diposting 1 hari yang lalu</p>

            <div class="d-flex gap-2 mb-3">
                <a href="#">
                    <button class="btn btn-primary" style="background-color: #002F87">Lamar Sekarang</button>
                </a>
                <button class="btn btn-outline-secondary">
                    <i class="ri-save-2-fill" style="font-size: 18px;"></i> Simpan
                </button>
            </div>
            <ul class="nav nav-header border-bottom">
                <li class="nav-item">
                    <p>Opsi Tempat Kerja</p>
                </li>
                <li class="nav-item ms-3">
                    <p>Kantor</p>
                </li>
            </ul>

          
        
            <!-- Tab Content -->
            <div class="tab-content mt-3">
                <div class="tab-pane fade show active" id="opsi">
                    <h4>Deskripsi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur debitis autem, sunt, obcaecati magnam porro pariatur tempore deserunt dolores quidem distinctio recusandae eligendi delectus voluptates. Reiciendis dolorem excepturi est nulla!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos doloribus illum provident neque facere in velit nisi rerum perspiciatis dolorum, maiores sit sunt recusandae modi? Doloremque quis impedit sapiente.
                    </p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container-fluid m-5">
        <p class="text-xl text-dark-1 fw-bold">Tentang Perusahaan:</p>

            <div class="card shadow-3 p-3" style="width: 750px;">
                <div class="d-flex align-items-center">
                    <!-- Logo Perusahaan -->
                    <figure>
                        <img src="{{asset('images/managers/ADA-logo.png')}}" class="me-3 img-fluid mb-3" alt="Logo Perusahaan" style="height: 100px; width:200px;">
                        <figcaption>
                            <div>
                                <p class="mb-0 text-dark" style="font-size: 25px;">ADA Company</p>
                                <p class="mb-1 text-muted">
                                    <i class="ri-briefcase-line"></i> Designer
                                </p>
                            </div>
                        </figcaption>
                    </figure>
                    
                </div>
                
                <p class="mt-3 text-dark">
                    Perusahaan ADA adalah entitas bisnis yang berfokus pada penciptaan dan pengembangan 
                    <span class="d-block text-dark">visual, fungsional, dan estetika dari produk, layanan, dan merek.
                </p>

                <p class="mb-0"><strong>Alamat Perusahaan</strong></p>
                <p class="text-muted">Karawang Barat, Tanjung Pura</p>
            </div>
    
@endsection
