@extends('layout.layout')
@php
    $title = 'Kelola Pendaftar';
    $script = ' <script src="' . asset('assets/js/homeFourChart.js') . '"></script>
    <script src="' . asset('assets/js/tab.js') . '"></script>';
@endphp

@section('content')
    <div class="container">
        <div class="row gy-4 mt-4">
            <div class="col-xxl-8">
                <div class="row gy-4">
                    <div class="col-xxl-6">
                        <div class="card h-100 radius-8 border-0">
                            <div class="card-body p-24">
                                <div class="tab-container">
                                    <div class="tabs">
                                        <button class="tab active" onclick="switchTab('akun')">Akun</button>
                                        <button class="tab" onclick="switchTab('kontak')">Kontak</button>
                                        <div class="tab-underline"></div>
                                    </div>
                                    <div class="tab-content" id="akun"> <!-- Isi Halaman Akun -->
                                        <!-- Crypto Home Widgets Start -->
                                        <div class="p-6">
                                            <div class="d-flex flex-wrap gap-4">
                                                <!-- Cards -->
                                                <div class="card-body p-24 shadow-5 rounded-3 d-flex align-items-center gap-3 mb-5"
                                                    style="width: 20rem; height:5rem; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25); background: linear-gradient(135deg, #fef9ef, #dbecc1);">
                                                    <div class="w-64-px h-64-px d-flex align-items-center justify-content-center mb-0 radius-12"
                                                        style="background-color:#4372588a;">
                                                        <iconify-icon icon="tabler:users-group" class="h5 mb-0"
                                                            style="color: #ffffff; "></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <span class="text-lg text-muted text-neutral-700">Total
                                                            Pendaftar</span>
                                                        <p class="card-text mb-8 text-secondary-light">540</p>
                                                    </div>
                                                </div>
                                                <!-- Cards -->
                                                <div class="card-body p-24 shadow-5 rounded-3 d-flex align-items-center gap-3 mb-5"
                                                    style="width: 20rem; height:5rem; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25); background: linear-gradient(135deg, #fef9ef, #dbecc1);">
                                                    <div class="w-64-px h-64-px d-flex align-items-center justify-content-center  mb-0 radius-12"
                                                        style="background-color:#4372588a;">
                                                        <iconify-icon icon="tabler:user-plus" class="h5 mb-0"
                                                            style="color: #ffffff;"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <span class="text-lg text-muted text-neutral-700">Pendaftar
                                                            Baru</span>
                                                        <p class="card-text mb-8 text-secondary-light">30</p>
                                                    </div>
                                                </div>
                                                <!-- Cards -->
                                                <div class="card-body p-24 shadow-5 rounded-3 d-flex align-items-center gap-3 mb-5"
                                                    style="width: 20rem; height:5rem; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25); background: linear-gradient(135deg, #fef9ef, #dbecc1);">
                                                    <div class="w-64-px h-64-px d-flex align-items-center justify-content-center mb-0 radius-12"
                                                        style="background-color:#4372588a;">
                                                        <iconify-icon icon="mdi:account-check" class="h5 mb-0"
                                                            style="color: #ffffff;"></iconify-icon>
                                                    </div>
                                                    <div>
                                                        <span class="text-lg text-muted text-neutral-700">Pendaftar
                                                            Aktif</span>
                                                        <p class="card-text mb-8 text-secondary-light">120</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Cards -->
                                            <div class="card-body p-24 shadow-5 rounded-3 d-flex align-items-center gap-3 mb-5"
                                                style="width: 20rem; height:5rem; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25); background: linear-gradient(135deg, #fef9ef, #dbecc1);">
                                                <div class="w-64-px h-64-px d-flex align-items-center justify-content-center mb-0 radius-12"
                                                    style="background-color:#4372588a;">
                                                    <iconify-icon icon="mdi:account-off" class="h5 mb-0"
                                                        style="color:#ffffff;"></iconify-icon>
                                                </div>
                                                <div>
                                                    <span class="text-lg text-muted text-neutral-700">Pendaftar Tidak
                                                        Aktif</span>
                                                    <p class="card-text mb-8 text-secondary-light">27</p>
                                                </div>
                                            </div>
                                            <hr class="my-5" style="border-color: black;">
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">

                                            <!-- Kiri: Filter + Status -->
                                            <div class="d-flex align-items-center gap-2">
                                                <!-- Filter Button -->
                                                <button
                                                    class="btn btn-light border shadow-sm d-flex align-items-center gap-2">
                                                    <iconify-icon icon="tabler:filter"></iconify-icon>
                                                    Filter
                                                </button>

                                                <!-- Dropdown Status -->
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-light border shadow-sm dropdown-toggle d-flex align-items-center gap-2"
                                                        type="button" data-bs-toggle="dropdown">
                                                        <iconify-icon
                                                            icon="solar:refresh-circle-line-duotone"></iconify-icon>
                                                        Semua Status
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Aktif</a></li>
                                                        <li><a class="dropdown-item" href="#">Tidak Aktif</a></li>
                                                    </ul>
                                                </div>
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
                                        <div class="table-responsive scroll-sm">
                                            <table class="table bordered-table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">ID Pendaftar</th>
                                                        <th scope="col">Tanggal Pendaftar</th>
                                                        <th scope="col" class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><span class="text-neutral-500">Habibi Ahmad</span></td>
                                                        <td>01</td>
                                                        <td>09-08-2025</td>
                                                        <td>
                                                            <!-- Wrapper agar center -->
                                                            <div class="d-flex justify-content-center">
                                                                <!-- Status Active -->
                                                                <div class="d-inline-flex align-items-center px-2 py-1"
                                                                    style="border: 1px solid #c4eac1; border-radius: 8px;">

                                                                    <!-- Background ikon -->
                                                                    <div class="d-flex align-items-center justify-content-center me-2"
                                                                        style="background-color: #c4eac1; width: 28px; height: 28px; border-radius: 6px;">
                                                                        <!-- Ikon centang putih -->
                                                                        <iconify-icon icon="material-symbols:check"
                                                                            style="color: white; font-size: 18px; background-color: #28a745; border-radius: 50%; padding: 2px;"></iconify-icon>
                                                                    </div>

                                                                    <!-- Teks status -->
                                                                    <div class="d-flex align-items-center justify-content-center"
                                                                        style="min-width: 60px; height: 24px;">
                                                                        <span class="fw-medium text-success">Active</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-neutral-500">Helmi Ahmad</span></td>
                                                        <td>02</td>
                                                        <td>12-11-2024</td>
                                                        <td>
                                                            <!-- Wrapper agar center -->
                                                            <div class="d-flex justify-content-center">
                                                                <!-- Status Active -->
                                                                <div class="d-inline-flex align-items-center px-2 py-1"
                                                                    style="border: 1px solid #c27c7c; border-radius: 8px;">

                                                                    <!-- Background ikon -->
                                                                    <div class="d-flex align-items-center justify-content-center me-2"
                                                                        style="background-color: #ff7b7b; width: 28px; height: 28px; border-radius: 6px;">
                                                                        <!-- Ikon centang putih -->
                                                                        <iconify-icon icon="mdi:close"
                                                                            style="color: white; font-size: 18px; background-color: #ff1100; border-radius: 50%; padding: 2px;"></iconify-icon>
                                                                    </div>

                                                                    <!-- Teks status -->
                                                                    <div class="d-flex align-items-center justify-content-center"
                                                                        style="min-width: 60px; height: 24px;">
                                                                        <span class="fw-medium text-danger">Tidak
                                                                            Aktif</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-neutral-500">Esa Azmi</span></td>
                                                        <td>03</td>
                                                        <td>20-04-2025</td>
                                                        <td>
                                                            <!-- Wrapper agar center -->
                                                            <div class="d-flex justify-content-center">
                                                                <!-- Status Active -->
                                                                <div class="d-inline-flex align-items-center px-2 py-1"
                                                                    style="border: 1px solid #c4eac1; border-radius: 8px;">

                                                                    <!-- Background ikon -->
                                                                    <div class="d-flex align-items-center justify-content-center me-2"
                                                                        style="background-color: #c4eac1; width: 28px; height: 28px; border-radius: 6px;">
                                                                        <!-- Ikon centang putih -->
                                                                        <iconify-icon icon="material-symbols:check"
                                                                            style="color: white; font-size: 18px; background-color: #28a745; border-radius: 50%; padding: 2px;"></iconify-icon>
                                                                    </div>

                                                                    <!-- Teks status -->
                                                                    <div class="d-flex align-items-center justify-content-center"
                                                                        style="min-width: 60px; height: 24px;">
                                                                        <span class="fw-medium text-success">Active</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-neutral-500">Agans</span></td>
                                                        <td>04</td>
                                                        <td>21-09-2021</td>
                                                        <td>
                                                            <!-- Wrapper agar center -->
                                                            <div class="d-flex justify-content-center">
                                                                <!-- Status Active -->
                                                                <div class="d-inline-flex align-items-center px-2 py-1"
                                                                    style="border: 1px solid #c4eac1; border-radius: 8px;">

                                                                    <!-- Background ikon -->
                                                                    <div class="d-flex align-items-center justify-content-center me-2"
                                                                        style="background-color: #c4eac1; width: 28px; height: 28px; border-radius: 6px;">
                                                                        <!-- Ikon centang putih -->
                                                                        <iconify-icon icon="material-symbols:check"
                                                                            style="color: white; font-size: 18px; background-color: #28a745; border-radius: 50%; padding: 2px;"></iconify-icon>
                                                                    </div>

                                                                    <!-- Teks status -->
                                                                    <div class="d-flex align-items-center justify-content-center"
                                                                        style="min-width: 60px; height: 24px;">
                                                                        <span class="fw-medium text-success">Active</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-neutral-500">Massuls</span></td>
                                                        <td>05</td>
                                                        <td>08-07-2024</td>
                                                        <td>
                                                            <!-- Wrapper agar center -->
                                                            <div class="d-flex justify-content-center">
                                                                <!-- Status Active -->
                                                                <div class="d-inline-flex align-items-center px-2 py-1"
                                                                    style="border: 1px solid #c27c7c; border-radius: 8px;">

                                                                    <!-- Background ikon -->
                                                                    <div class="d-flex align-items-center justify-content-center me-2"
                                                                        style="background-color: #ff7b7b; width: 28px; height: 28px; border-radius: 6px;">
                                                                        <!-- Ikon centang putih -->
                                                                        <iconify-icon icon="mdi:close"
                                                                            style="color: white; font-size: 18px; background-color: #ff1100; border-radius: 50%; padding: 2px;"></iconify-icon>
                                                                    </div>

                                                                    <!-- Teks status -->
                                                                    <div class="d-flex align-items-center justify-content-center"
                                                                        style="min-width: 60px; height: 24px;">
                                                                        <span class="fw-medium text-danger">Tidak
                                                                            Aktif</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div
                                            class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-13 m-2">
                                            <span>Showing 1 to 10 of 12 entries</span>
                                            <ul
                                                class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                                        href="javascript:void(0)">
                                                        <iconify-icon icon="ep:d-arrow-left"
                                                            class="text-xl"></iconify-icon>
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                                        href="javascript:void(0)">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link bg-secondary-light text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                                        href="javascript:void(0)">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link bg-secondary-light text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                                        href="javascript:void(0)">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                                        href="javascript:void(0)">
                                                        <iconify-icon icon="ep:d-arrow-right"
                                                            class="text-xl"></iconify-icon>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content mt-0" id="kontak" style="display: none;">
                                    <!-- Isi Halaman Kontak -->
                                    <div class="">
                                        <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
            
                                            <!-- Kiri: Filter + Status -->
                                            <div class="d-flex align-items-center gap-2">
                                                <!-- Filter Button -->
                                                <button class="btn btn-light border shadow-sm d-flex align-items-center gap-2">
                                                    <iconify-icon icon="tabler:filter"></iconify-icon>
                                                    Filter
                                                </button>
            
                                                <!-- Dropdown Status -->
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-light border shadow-sm dropdown-toggle d-flex align-items-center gap-2"
                                                        type="button" data-bs-toggle="dropdown">
                                                        <iconify-icon icon="solar:refresh-circle-line-duotone"></iconify-icon>
                                                        Semua Status
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Aktif</a></li>
                                                        <li><a class="dropdown-item" href="#">Tidak Aktif</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
            
                                            <!-- Kanan: Search Box -->
                                            <div class="input-group shadow-sm" style="max-width: 250px;">
                                                <span class="input-group-text bg-white border-end-0">
                                                    <iconify-icon icon="tabler:search"></iconify-icon>
                                                </span>
                                                <input type="text" class="form-control border-start-0" placeholder="Pencarian">
                                            </div>
                                        </div>
                                        <div class="d-flex gap-3 flex-wrap">
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                            <div class="card shadow-5 rounded-4" style="width: 320px; box-shadow: 0 4px 10px rgba(0, 123, 255, 0.25);">
                                                <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" class="rounded-circle me-3" width="50" height="50" alt="Avatar">
                                                    <hr class="">
                                                    <div>
                                                    <h6 class="mb-0">Reyhan Afgan</h6>
                                                    <small class="text-muted">Jan 6, 2002</small>
                                                    </div>
                                                    <i class="bi bi-three-dots ms-auto"></i>
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-mail-line me-4"></i>arabagan@gmail.com
                                                </div>
                                                <div class="mb-2">
                                                    <i class="ri-phone-line me-4"></i>0838-2384-2323
                                                </div>
                                                <div>
                                                    <i class="ri-cake-2-line me-4"></i>23 Tahun
                                                </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Crypto Home Widgets End -->
@endsection
