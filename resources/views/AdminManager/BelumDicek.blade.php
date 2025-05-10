@extends('layout.layout')

@php
    $title = 'Kelola Pelamar';
    $subTitle = 'Kelola Pelamar';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/changestatus.js') . '"></script>';
@endphp

@section('content')
    <div class="card p-3">
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-center gap-2">
                    <span>Tampilkan</span>
                    <select class="form-select form-select-sm" style="width: auto;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <div class="input-group" style="width: 250px;">
                        <span class="input-group-text">
                            🔍
                        </span>
                        <input type="text" class="form-control" placeholder="Cari">
                    </div>
                    <select class="form-select form-select-sm" style="width: 100px;" onchange="handleStatusChange(this)">
                        <option value="Status">Status</option>
                        <option value="belum-dicek">Belum Dicek</option>
                        <option value="sudah-dicek">Sudah Dicek</option>
                    </select>
                </div>                
            </div>
            
        </div>
        <div class="row gy-4 mt-1">
            <div class="col-xxl-6">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col-2">ID</th>
                                <th scope="col-4">Nama Admin Kursus</th>
                                <th scope="col-3">Detail Lamaran</th>
                                <th scope="col-3 text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('images/managers/Bapak-Bapak-Berjas.png')}}" class="rounded-circle mx-2  " width="40" height="40" alt="Foto">
                                        <span>Habibi Ahmad Aziz</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="d-flex align-items-center justify-content-center g-2 text-decoration-none text-primary">
                                        <i class="ri-eye-line"></i> 
                                        <span class="ms-5">Lihat</span>
                                    </a>
                                </td>
                                <td>
                                    <span class="bg-secondary-200 text-dark-main px-24 py-4 rounded-pill fw-medium text-sm" style="background-color: #31ee19">Sudah Dicek</span>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('images/managers/Bapak-Bapak-Berjas.png')}}" class="rounded-circle mx-2 " width="40" height="40" alt="Foto">
                                        <span>Habibi Ahmad Aziz</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="d-flex align-items-center justify-content-center g-2 text-decoration-none text-primary">
                                        <i class="ri-eye-line"></i> 
                                        <span class="ms-5">Lihat</span>
                                    </a>
                                </td>
                                <td><span
                                    class="bg-secondary-200 text-dark-main px-24 py-4 rounded-pill fw-medium text-sm" style="background-color: #31ee19">Sudah Dicek</span>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('images/managers/Bapak-Bapak-Berjas.png')}}" class="rounded-circle mx-2 " width="40" height="40" alt="Foto">
                                        <span>Habibi Ahmad Aziz</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="d-flex align-items-center justify-content-center g-2 text-decoration-none text-primary">
                                        <i class="ri-eye-line"></i> 
                                        <span class="ms-5">Lihat</span>
                                    </a>
                                </td>
                                <td><span
                                    class="bg-secondary-200 text-dark-main px-24 py-4 rounded-pill fw-medium text-sm" style="background-color: #31ee19">Sudah Dicek</span>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('images/managers/Bapak-Bapak-Berjas.png')}}" class="rounded-circle mx-2 " width="40" height="40" alt="Foto">
                                        <span>Habibi Ahmad Aziz</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="d-flex align-items-center justify-content-center g-2 text-decoration-none text-primary">
                                        <i class="ri-eye-line"></i> 
                                        <span class="ms-5">Lihat</span>
                                    </a>
                                </td>
                                <td><span
                                    class="bg-secondary-200 text-dark-main px-24 py-4 rounded-pill fw-medium text-sm" style="background-color: #31ee19">Sudah Dicek</span>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('images/managers/Bapak-Bapak-Berjas.png')}}" class="rounded-circle mx-2 " width="40" height="40" alt="Foto">
                                        <span>Habibi Ahmad Aziz</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="d-flex align-items-center justify-content-center g-2 text-decoration-none text-primary">
                                        <i class="ri-eye-line"></i> 
                                        <span class="ms-5">Lihat</span>
                                    </a>
                                </td>
                                <td><span
                                    class="bg-secondary-200 text-dark-main px-24 py-4 rounded-pill fw-medium text-sm" style="background-color: #31ee19;">Sudah Dicek</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection