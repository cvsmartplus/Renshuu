@extends('layout.layout')
@php
    $title='Buat Artikel';
    $subTitle = 'Artikel';
    $script = '<script src="' . asset('assets/js/homethreeChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="row gy-4">
        <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
            <div class="col">
                <div class="card shadow-none border bg-gradient-start-1 h-100">
                    <div class="card-body p-20">
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                            <div>
                                <p class="fw-medium text-primary-light mb-1">Total Anggota</p>
                                <h6 class="mb-0">10,000</h6>
                            </div>
                            <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                                <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
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
        </div>
    </div>
    <div class="contrainer mt-20">
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
    </div>
    <div class="contrainer mt-20">
        <div class="col-xxl-6">
            <div class="card h-100">
                <div class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center justify-content-between">
                    <h6 class="text-lg fw-semibold mb-0">Daftar admin kursus yang berhasil ditambahkan</h6>
                </div>
                <div class="card-body p-24">
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama Admin Kursus</th>
                                    <th scope="col">Jumlah Kursus Dibuat</th>
                                    <th scope="col">Tanggal Akun Dibuat</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Habib Agan</td>
                                    <td>12</td>
                                    <td>20/02/2020</td>
                                    <td><span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Masuul</td>
                                    <td>15</td>
                                    <td>12/09/2001</td>
                                    <td><span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">Rejected</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Aziz</td>
                                    <td>29</td>
                                    <td>31/12/2025</td>
                                    <td><span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Helnah</td>
                                    <td>51</td>
                                    <td>10/10/2010</td>
                                    <td><span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Mas Agus</td>
                                    <td>90</td>
                                    <td>12/12/2012</td>
                                    <td><span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Completed</span></td>
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
                <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"  href="javascript:void(0)">
                    <iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
                <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
                <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"  href="javascript:void(0)">
                    <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon>
                </a>
            </li>
        </ul>
        
    </div>
@endsection