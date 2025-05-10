@extends('layout.layout')

@php
    $title = 'Kelola Pelamar';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="container">
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
        <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
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
                        <div class="bg-white d-flex justify-content-between text-muted small align-items-center mt-4">
                            <span class="text-start me-1">1 Jam yang lalu</span>
                            <a href="{{ route('singlekelolapelamar') }}"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2"
                                style="width: 200px; background-color: blue;">
                                <i class="ri-user-line"></i>
                                Kelola Pelamar &gt;
                            </a>

                        </div>
                    </div>
                </div>
            </div>

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
                        <div class="bg-white d-flex justify-content-between text-muted small">
                            <span class="text-start me-1">1 Jam yang lalu</span>
                            <a href="{{ route('singlekelolapelamar') }}"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2"
                                style="width: 200px; background-color: blue;">
                                <i class="ri-user-line"></i>
                                Kelola Pelamar &gt;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 mb-3">
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
                        <div class="bg-white d-flex justify-content-between text-muted small">
                            <span class="text-start me-1">1 Jam yang lalu</span>
                            <a href="{{ route('singlekelolapelamar') }}"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2"
                                style="width: 200px; background-color: blue;">
                                <i class="ri-user-line"></i>
                                Kelola Pelamar &gt;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

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
                        <div class="bg-white d-flex justify-content-between text-muted small">
                            <span class="text-start me-1">1 Jam yang lalu</span>
                            <a href="{{ route('singlekelolapelamar') }}"
                                class="btn btn-primary d-flex align-items-center justify-content-center gap-2"
                                style="width: 200px; background-color: blue;">
                                <i class="ri-user-line"></i>
                                Kelola Pelamar &gt;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
