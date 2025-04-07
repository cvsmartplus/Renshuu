@extends('layout.layout')

@php
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/formwizard.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/editor.highlighted.min.js') . '"></script>
    <script src="' . asset('assets/js/editor.quill.js') . '"></script>
    <script src="' . asset('assets/js/editor.katex.min.js') . '"></script>
    <script src="' . asset('assets/js/editor.js') . '"></script>;
    <script src="' . asset('assets/js/wizard.js') . '"></script>';
@endphp

@section('content')
    <div class="container">
        <div class="card">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-4 text-xl">Buat Lowongan Pekerjaan</h6>
                        <span class="border-1 ms-4" style="color: black; width: 250px;"></span>

                        <!-- Form Wizard Start -->
                        <div class="form-wizard">
                            <form action="{{ route('tambahloker') }}" method="post">
                                @csrf
                                <div class="form-wizard-header overflow-x-auto scroll-sm pb-8 my-32">
                                    <ul class="list-unstyled form-wizard-list">
                                        <li class="form-wizard-list__item active">
                                            <div class="form-wizard-list__line">
                                                <div class="form-wizard-list__line">
                                                    <span class="count">1</span>
                                                </div>
                                            </div>
                                            <span class="text text-xs fw-semibold">Klarifikasi</span>
                                        </li>

                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">2</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Jenis Iklan</span>
                                        </li>
                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">3</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Tulis</span>
                                        </li>
                                    </ul>
                                </div>

                                <fieldset class="wizard-fieldset show">
                                    <h6 class="text-md text-neutral-900 mb-5">Lengkapi Data Lowongan Kerja Anda Dibawah Ini
                                    </h6>
                                    <div class="row gy-3">
                                        <!-- Nama Pemateri -->
                                        <div class="col-sm-12">
                                            <label class="form-label text-neutral-900">Nama Perusahaan</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Tuliskan Nama Perusahaan" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>

                                        <!-- Judul kursus -->
                                        <div class="col-sm-12">
                                            <label class="form-label text-neutral-900">Jabatan</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Tuliskan nama jabatan" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>

                                        <!-- Kategori kursus -->
                                        <div class="col-sm-12">
                                            <label class="form-label text-neutral-900">Lokasi</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Tuliskan Lokasi Perusahaan" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        {{-- Opsi Tempat Kerja --}}
                                        <div class="col-sm-12">
                                            <label class="form-label text-neutral-900">Opsi Tempat Kerja</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Tuliskan opsi tempat kerja" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <label class="form-label fw-bold" style="color: black;">Kategori</label>

                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="manajemen1" value="manajemen1">
                                                <label class="form-check-label" for="manajemen1">Manajemen Proyek</label>
                                            </div>

                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="manajemen2" value="manajemen2">
                                                <label class="form-check-label" for="manajemen2">Manajemen Proyek</label>
                                            </div>

                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="manajemen3" value="manajemen3">
                                                <label class="form-check-label" for="manajemen3">Manajemen Proyek</label>
                                            </div>

                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="lainnya" value="lainnya">
                                                <label class="form-check-label" for="lainnya">Pilih kategori
                                                    berbeda</label>
                                            </div>

                                            <input type="text" class="form-control my-4"
                                                placeholder="Tuliskan kategori yang Anda maksud">
                                        </div>
                                    </div>

                                    <div class="col-7 mt-3">
                                        <label class="form-label fw-bold" style="color: black;">Jenis Pekerjaan</label>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen1" value="manajemen1">
                                            <label class="form-check-label" for="manajemen1">Purnawaktu</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen2" value="manajemen2">
                                            <label class="form-check-label" for="manajemen2">Paruh Waktu</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen3" value="manajemen3">
                                            <label class="form-check-label" for="manajemen3">Kontrak</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="lainnya" value="lainnya">
                                            <label class="form-check-label" for="lainnya">Biasa
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-7 mt-3">
                                        <label class="form-label fw-bold" style="color: black;">Minimal Pendidikan</label>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen1" value="manajemen1">
                                            <label class="form-check-label" for="manajemen1">SMP</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen2" value="manajemen2">
                                            <label class="form-check-label" for="manajemen2">SMA/Sederajat</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen3" value="manajemen3">
                                            <label class="form-check-label" for="manajemen3">D1</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="lainnya" value="lainnya">
                                            <label class="form-check-label" for="lainnya">S1
                                            </label>
                                        </div>

                                        <input type="text" class="form-control my-4"
                                            placeholder="Tuliskan kategori yang Anda maksud">
                                    </div>

                                    <div class="col-7 mt-3">
                                        <label class="form-label fw-bold" style="color: black;">Gaji yang ingin
                                            ditampilkan</label>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen1" value="manajemen1">
                                            <label class="form-check-label" for="manajemen1">Tarif Per Jam</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen2" value="manajemen2">
                                            <label class="form-check-label" for="manajemen2">Gaji Per Bulan</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="manajemen3" value="manajemen3">
                                            <label class="form-check-label" for="manajemen3">Gaji Per Tahun</label>
                                        </div>

                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="radio" name="kategori"
                                                id="lainnya" value="lainnya">
                                            <label class="form-check-label" for="lainnya">Tahunan dengan Komisi
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-7 mt-5">
                                        <label class="form-label" style="color: black;">Kisaran gaji <span
                                                class="text-muted ms-3"></span></label>
                                        <p class="text-muted" style="font-size: 14px;">
                                            Masukan kisaran gaji untuk ditawarkan ke kandidat. Jika gaji memiliki jumlah
                                            yang
                                            pasti, masukkan jumlah yang sama di kedua kolom di bawah ini.
                                        </p>

                                        <div class="row g-2 align-items-center">
                                            <div class="col-md-2">
                                                <label class="form-label fw-bold">Mata uang</label>
                                                <select class="form-select">
                                                    <option>IDR</option>
                                                    <option>USD</option>
                                                    <option>EUR</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="form-label fw-bold">Dari</label>
                                                <select class="form-select">
                                                    <option>500.000</option>
                                                    <option>1.000.000</option>
                                                    <option>2.000.000</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="form-label fw-bold">Hingga</label>
                                                <select class="form-select">
                                                    <option>2.000.000</option>
                                                    <option>5.000.000</option>
                                                    <option>10.000.000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <label class="fw-bold mt-3" style="color: black;">Gaji yang di tampilkan di iklan anda
                                        <span class="text-muted">(Opsional)</span></label>

                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="gaji"
                                            id="tampilkanGaji">
                                        <label class="form-check-label" for="tampilkanGaji">
                                            Tampilkan gaji di iklan
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="gaji"
                                            id="sembunyikanGaji">
                                        <label class="form-check-label" for="sembunyikanGaji">
                                            Sembunyikan gaji di iklan
                                        </label>
                                    </div>

                                    <div class="form-group text-end">
                                        <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32"
                                            style="background-color: #002776; border: none;">Lanjutkan
                                            <i class="ri-arrow-right-line"></i>
                                        </button>
                                    </div>
                                </fieldset>

                                <fieldset class="wizard-fieldset">
                                    <h6 class="text-md text-neutral-500">Account Information</h6>
                                    <div class="row gy-3">
                                        <div class="col-12">
                                            <label class="form-label">User Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Enter User Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">Card Number*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required"
                                                    placeholder="Enter Card Number " required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">Card Expiration(MM/YY)*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required"
                                                    placeholder="Enter Card Expiration" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="form-label">CVV Number*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required"
                                                    placeholder="CVV Number" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Password*</label>
                                            <div class="position-relative">
                                                <input type="password" class="form-control wizard-required"
                                                    placeholder="Enter Password" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                            <button type="button"
                                                class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                            <button type="button"
                                                class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset class="wizard-fieldset">
                                    <h6 class="text-neutral-900 text-lg">Menulis Iklan Lowongan Anda</h6>

                                    <div class="mt-5">
                                        <label class="form-label text-neutral-900">Deskripsi Pekerjaan</label>
                                        <p class="text-muted" style="font-size: 0.9rem;">
                                            Bisa menambahkan deskripsi dibawah tentang, contohnya: Tanggung jawab utama,
                                            kriteria dan persyaratan,
                                            kualifikasi pendidikan, pengalaman kerja, keterampilan teknis dan soft skills,
                                            gambaran lingkungan kerja,
                                            manfaat dan fasilitas, proses aplikasi, serta informasi gaji dan tunjangan.
                                        </p>
                                    </div>

                                    <!-- Editor Toolbar Start -->
                                    <div id="toolbar-container">
                                        <span class="ql-formats">
                                            <select class="ql-font"></select>
                                            <select class="ql-size"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-strike"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <select class="ql-color"></select>
                                            <select class="ql-background"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-script" value="sub"></button>
                                            <button class="ql-script" value="super"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-header" value="1"></button>
                                            <button class="ql-header" value="2"></button>
                                            <button class="ql-blockquote"></button>
                                            <button class="ql-code-block"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <button class="ql-indent" value="-1"></button>
                                            <button class="ql-indent" value="+1"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-direction" value="rtl"></button>
                                            <select class="ql-align"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-link"></button>
                                            <button class="ql-image"></button>
                                            <button class="ql-video"></button>
                                            <button class="ql-formula"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-clean"></button>
                                        </span>
                                    </div>
                                    <!-- Editor Toolbar Start -->

                                    <!-- Editor start -->
                                    <div id="editor">

                                    </div>
                                    <!-- Edit End -->
                                    <div class="mb-3">
                                        <label for="job-summary" class="form-label text-neutral-900">Ringkasan Pekerjaan</label>
                                        <p class="text-muted" style="font-size: 0.9rem;">
                                          Tuliskan pernyataan yang meyakinkan tentang pekerjaan yang Anda tawarkan untuk menarik lebih banyak kandidat.
                                        </p>
                                        <textarea id="job-summary" class="form-control" rows="4" style="border-radius: 5px;"></textarea>
                                    </div>
                                    <div class="form-group text-end">
                                        <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32"
                                            style="background-color: #002776; border: none;">Kirimkan
                                            <i class="ri-arrow-right-line"></i>
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <!-- Form Wizard End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
