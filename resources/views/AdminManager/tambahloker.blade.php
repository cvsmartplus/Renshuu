@extends('layout.layout')

@php
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/formwizard.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>';
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
                                            <span class="text text-xs fw-semibold">Create Account </span>
                                        </li>

                                        </li>

                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">2</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Setup Privacy</span>
                                        </li>
                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">3</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Setup Privacy</span>
                                        </li>

                                        <li class="form-wizard-list__item">
                                            <div class="form-wizard-list__line">
                                                <span class="count">3</span>
                                            </div>
                                            <span class="text text-xs fw-semibold">Setup Privacy</span>
                                        </li>
                                    </ul>
                                </div>

                                <fieldset class="wizard-fieldset show">
                                    <h6 class="text-md text-neutral-500">Lengkapi Data Lowongan Kerja Anda Dibawah Ini</h6>
                                    <div class="row gy-3">
                                        <div class="col-7">
                                            <label class="form-label fw-bold fs-6" style="color: black;">Nama
                                                Perusahaan</label>
                                            <div class="position-relative">
                                                <div class="wizard-required" required>
                                                    <div class="wizard-form-error"></div>
                                                        <select class="form-control form-select">
                                                            <option value=""><span>PT ADA Indonesia</span></option>
                                                            <option value="">PT Kroyaku</option>
                                                            <option value="">PT Indah Permata</option>
                                                        </select>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <label class="form-label fw-bold" style="color: black;">Jabatan</label>
                                            <div class="position-relative">
                                                <div class="wizard-required"required>
                                                    <div class="wizard-form-error"></div>
                                                        <select class="form-select">
                                                            <option value=""><span>Tuliskan nama jabatan/bisa memilih jika
                                                                    ada</span></option>
                                                            <option value="">Boss</option>
                                                            <option value="">Direktur</option>
                                                            <option value="">Karyawan</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-7">
                                            <label class="form-label fw-bold" style="color: black;">Lokasi</label>
                                            <div class="position-relative">
                                                <div class="wizard-required" required>
                                                    <div class="wizard-form-error"></div>
                                                        <select class="form-select">
                                                            <option value=""><span>Tuliskan Lokasi Lengkap/bisa memilih jika
                                                                    ada</span></option>
                                                            <option value="">Karawang</option>
                                                            <option value="">Cirebon</option>
                                                            <option value="">Tasik Malaya</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <label class="form-label fw-bold" style="color: black;">Opsi Tempat
                                                Kerja</label>
                                            <div class="position-relative">
                                                <div class="wizard-required" required>
                                                    <div class="wizard-form-error"></div>
                                                    <select class="form-select">
                                                        <option value=""><span>Tuliskan opsi tempat kerja/bisa memilih
                                                                jika ada</span></option>
                                                        <option value="">Perusahaan</option>
                                                        <option value="">Kantor</option>
                                                        <option value="">Rumah</option>
                                                    </select>             
                                                </div>
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
                                                class="text-muted ms-3">ⓘ</span></label>
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
                                        <button type="button"
                                            class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
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
                                    <h6 class="text-md text-neutral-500">Bank Information</h6>
                                    <div class="row gy-3">
                                        <div class="col-sm-6">
                                            <label class="form-label">Bank Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Enter Bank Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Branch Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Enter Branch Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Account Name*</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control wizard-required"
                                                    placeholder="Enter Account Name" required>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Account Number*</label>
                                            <div class="position-relative">
                                                <input type="number" class="form-control wizard-required"
                                                    placeholder="Enter Account Number" required>
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
                            </form>
                        </div>
                        <!-- Form Wizard End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
