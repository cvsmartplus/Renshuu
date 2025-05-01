@extends('layout.layout')

@php
    $title = 'Halaman Laporan';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-sm-start fw-bold d-none d-sm-block">
                    Pilih terlebih dahulu loker apa yang ingin Anda hapus
                </div>
            </div>
        </div>

        <!-- Filter, Pencarian, dan Pilih -->
        <div class="card mb-3">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <!-- Tombol Verifikasi -->
                <div class="d-flex gap-2">
                    <!-- Belum Terverifikasi -->
                    <button class="btn btn-light position-relative" style="border: 1px solid #ddd;">
                        Belum Terverifikasi
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary rounded-pill ">
                            199
                        </span>
                    </button>

                    <!-- Sudah Diverifikasi -->
                    <button class="btn btn-light position-relative ms-3" style="border: 1px solid #ddd;">
                        Sudah Diverifikasi
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-secondary rounded-pill">
                            1
                        </span>
                    </button>
                </div>

                <!-- Icon Aksi -->
                <div class="d-flex flex-wrap align-items-center gap-3">
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
        </div>
        <div class="card mb-3">
            <div class="list-group list-group-flush">
              <!-- Item Laporan -->
              <div class="list-group-item d-flex justify-content-between align-items-center border-bottom">
                <div class="d-flex align-items-start gap-2">
                  <input type="checkbox" class="form-check-input mt-1">
                  <div>
                    <div class="fw-bold">Habibi Ahmad Aziz</div>
                    <div class="text-muted small">Ada error ketika mau berlangganan</div>
                  </div>
                </div>
                <div class="text-muted small">01/02/2029, 15:30</div>
              </div>
            </div>
        </div>
        <div class="card mb-3">
            <!-- Ulangi item di atas untuk data lainnya -->
            <div class="list-group list-group-flush">
                <!-- Item Laporan -->
                <div class="list-group-item d-flex justify-content-between align-items-center border-bottom">
                  <div class="d-flex align-items-start gap-2">
                    <input type="checkbox" class="form-check-input mt-1">
                    <div>
                      <div class="fw-bold">Habibi Ahmad Aziz</div>
                      <div class="text-muted small">Ada error ketika mau berlangganan</div>
                    </div>
                  </div>
                  <div class="text-muted small">01/02/2029, 15:30</div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <!-- Ulangi item di atas untuk data lainnya -->
            <div class="list-group list-group-flush">
                <!-- Item Laporan -->
                <div class="list-group-item d-flex justify-content-between align-items-center border-bottom">
                  <div class="d-flex align-items-start gap-2">
                    <input type="checkbox" class="form-check-input mt-1">
                    <div>
                      <div class="fw-bold">Habibi Ahmad Aziz</div>
                      <div class="text-muted small">Ada error ketika mau berlangganan</div>
                    </div>
                  </div>
                  <div class="text-muted small">01/02/2029, 15:30</div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <!-- Ulangi item di atas untuk data lainnya -->
            <div class="list-group list-group-flush">
                <!-- Item Laporan -->
                <div class="list-group-item d-flex justify-content-between align-items-center border-bottom">
                  <div class="d-flex align-items-start gap-2">
                    <input type="checkbox" class="form-check-input mt-1">
                    <div>
                      <div class="fw-bold">Habibi Ahmad Aziz</div>
                      <div class="text-muted small">Ada error ketika mau berlangganan</div>
                    </div>
                  </div>
                  <div class="text-muted small">01/02/2029, 15:30</div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <!-- Ulangi item di atas untuk data lainnya -->
            <div class="list-group list-group-flush">
                <!-- Item Laporan -->
                <div class="list-group-item d-flex justify-content-between align-items-center border-bottom">
                  <div class="d-flex align-items-start gap-2">
                    <input type="checkbox" class="form-check-input mt-1">
                    <div>
                      <div class="fw-bold">Habibi Ahmad Aziz</div>
                      <div class="text-muted small">Ada error ketika mau berlangganan</div>
                    </div>
                  </div>
                  <div class="text-muted small">01/02/2029, 15:30</div>
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
    </div>
@endsection
