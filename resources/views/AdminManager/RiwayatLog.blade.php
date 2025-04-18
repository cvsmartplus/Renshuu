@extends('layout.layout')

@php
    $title = 'Menu Utama';
    $subTitle = 'Menu Utama';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
@endphp

@section('content')
    <div class="card p-3">
        <div class="row g-2 align-items-center">
            <!-- Bagian Kiri (Tampilkan, Pencarian, Status) -->
            <div class="col-lg-7 col-md-12">
                <div class="d-flex flex-wrap align-items-center gap-2">
                    <span>Tampilkan</span>
                    <select class="form-select form-select-sm" style="width: auto;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <div class="input-group" style="width: 200px;">
                        <span class="input-group-text">🔍</span>
                        <input type="text" class="form-control" placeholder="Cari">
                    </div>
                    <select class="form-select form-select-sm" style="width: 100px;">
                        <option value="Status">Status</option>
                        <option value="Tidak Lolos">Tidak Lolos</option>
                        <option value="Lolos tahap selanjutnya">Lolos tahap selanjutnya</option>
                    </select>
                </div>
            </div>
        
            <!-- Bagian Kanan (Tombol Aksi) -->
            <div class="col-lg-5 col-md-12">
                <div class="d-flex flex-wrap justify-content-md-start justify-content-lg-end gap-2">
                    <a href="{{route('editperan')}}">
                    <button class="btn btn-success btn-sm" style="background-color:#1CA700;">
                        <i class="ri-edit-line"></i> Edit Peran
                    </button>
                    </a>
                    <button class="btn btn-danger btn-sm" style="background-color:#D90000;">
                        <i class="ri-delete-bin-line"></i> Hapus Peran
                    </button>
                    <a href="{{route('tambahperan')}}">
                    <button class="btn btn-primary btn-sm" style="background-color:blue;">
                        <i class="ri-add-line"></i> Tambah Peran
                    </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row gy-4 mt-1">
            <div class="col-xxl-6">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tindakan</th>
                                <th scope="col">Waktu</th>
                                <th class="text-center">
                                    <button class="btn text-dark p-0 d-flex align-items-center gap-1 sort-btn"
                                        data-column="role" data-order="asc">
                                        <i class="ri-arrow-up-s-fill"></i>
                                        <i class="ri-arrow-down-s-fill d-block"></i>
                                        <span>Role</span>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                            123123
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <p><span class="text-primary">Ali Ikhwan Habibie</span> login ke sistem</p>
                                </td>
                                <td>
                                    <span>2025-04-05 08:09:29</span>
                                </td>
                                <td>
                                    Admin Loker
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                            123123
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <p><span class="text-primary">Ali Ikhwan Habibie</span> login ke sistem</p>
                                </td>
                                <td>
                                    <span>2025-04-05 08:09:29</span>
                                </td>
                                <td>
                                    Admin Kursus
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                            123123
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <p><span class="text-primary">Ada Company</span> login ke sistem</p>
                                </td>
                                <td>
                                    <span>2025-03-02 10:09:29</span>
                                </td>
                                <td>
                                    Admin Perusahaan
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
