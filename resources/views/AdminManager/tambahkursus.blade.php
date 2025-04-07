@extends('layout.layout')

@php
    $title = 'Menu Utama';
    $subTitle = 'Menu Utama';
    $script = '<script src="' . asset('assets/js/homeOneChart.js') . '"></script>
    <script src="' . asset('assets/js/lineChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/columnChartPageChart.js') . '"></script>
    <script src="' . asset('assets/js/editor.highlighted.min.js') . '"></script>
    <script src="' . asset('assets/js/editor.quill.js') . '"></script>
    <script src="' . asset('assets/js/editor.katex.min.js') . '"></script>
    <script src="' . asset('assets/js/editor.js') . '"></script>;
    <script src="' . asset('assets/js/wizard.js') . '"></script>';
@endphp

@section('content')
    <div class="row gy-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-xl">Buat Kursus Baru</h6>

                    <!-- Form Wizard Start -->
                    <div class="form-wizard">
                        <form action="#" method="post">
                            <div class="form-wizard-header overflow-x-auto scroll-sm pb-8 my-32">
                                <ul class="list-unstyled form-wizard-list">
                                    <li class="form-wizard-list__item active">
                                        <div class="form-wizard-list__line">
                                            <span class="count">1</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Kursus</span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">2</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Pemateri</span>
                                    </li>
                                </ul>
                            </div>

                            <fieldset class="wizard-fieldset show">
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <label class="form-label">Judul Kursus</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required"
                                                placeholder="Enter First Name" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Sub Judul Kursus</label>
                                        <div class="position-relative">
                                            <input type="type" class="form-control wizard-required"
                                                placeholder="Tulis sesuatu yang menarik" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Kategori Kursus</label>
                                        <div class="position-relative">
                                            <input type="type" class="form-control wizard-required"
                                                placeholder="Tulis sesuatu yang menarik" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Tingkat Kesulitan</label>
                                        <p class="text-muted">Pilih Tingkat Kesulitan Kursus Ini Menurut Anda</p>
                                        <select class="form-select" style="width: 300px;">
                                            <option>Mudah</option>
                                            <option>Sedang</option>
                                            <option>Sulit</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <!-- Ketentuan Tanggal -->
                                        <div class="col-md-6 col-lg-3">
                                            <label class="form-label fw-bold">Ketentuan Tanggal</label>
                                            <div class="text-muted text-sm">Dari</div>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                <input type="date" class="form-control">
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-3 align-self-end">
                                            <div class="text-muted text-sm">Sampai Dengan</div>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                <input type="date" class="form-control">
                                            </div>

                                        </div>

                                        <!-- Durasi Waktu -->
                                        <div class="col-md-6 col-lg-3">
                                            <label class="form-label fw-bold">Durasi Waktu</label>
                                            <div class="text-muted text-sm">Durasi Waktu Kursus</div>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                <input type="date" class="form-control">
                                            </div>

                                        </div>

                                        <!-- Ketentuan Harga -->
                                        <div class="col-md-6 col-lg-3">
                                            <label class="form-label fw-bold">Ketentuan Harga</label>
                                            <div class="text-muted text-sm">Masukan jumlah harga kursus</div>
                                            <div class="input-group">
                                                <span class="input-group-text">Rp</span>
                                                <input type="text" class="form-control" placeholder="???">
                                            </div>

                                        </div>
                                    </div>

                                    <label class="mt-3">Deskripsi Artikel</label>
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
                                    <!-- Editor Toolbar End -->

                                    <!-- Editor start -->
                                    <div id="editor">

                                    </div>
                                    <!-- Edit End -->

                                    <div class="col-12 mt-5">
                                        <h6 class="text-lg fw-semibold mb-0">Tambah Foto Thumbnail</h6>

                                        <div class="upload-image-wrapper d-flex align-items-center gap-3 w-100 mt-3">
                                            <!-- Preview Image Container -->
                                            <div
                                                class="uploaded-img d-none position-relative h-120-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                <button type="button"
                                                    class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-2 mt-2 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600"></iconify-icon>
                                                </button>
                                                <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                    src="{{ asset('assets/images/user.png') }}" alt="image">
                                            </div>

                                            <!-- Upload Button -->
                                            <label
                                                class="upload-file h-120-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1 cursor-pointer"
                                                for="upload-file">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <span class="fw-semibold text-secondary-light">Upload</span>
                                                <input id="upload-file" type="file" hidden>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group text-end">
                                        <button
                                            class="w-100 text-white rounded-2 text-center mt-5 form-wizard-next-btn btn btn-primary-600 px-32"
                                            style="background-color: #002776; border: none;">Selanjutnya</button>

                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <div class="row gy-3">
                                    <!-- Nama Pemateri -->
                                    <div class="col-sm-12">
                                        <label class="form-label">Nama Lengkap Pemateri</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required"
                                                placeholder="Tuliskan Nama Lengkap Pemateri" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                
                                    <!-- Judul kursus -->
                                    <div class="col-sm-12">
                                        <label class="form-label">Judul Dari Pemateri</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required"
                                                placeholder="Contoh : Transformasi Digital dengan Elon Musk: Inovasi dan Teknologi Terkini" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                
                                    <!-- Kategori kursus -->
                                    <div class="col-sm-12">
                                        <label class="form-label">Kategori Kursus</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required"
                                                placeholder="Tuliskan Kategori Kursus" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                
                                    <!-- Sosial Media -->
                                    <div class="mb-2">
                                        <label class="form-label fw-semibold">Tambahkan Sosial Media Pemateri</label>
                                        <div class="form-text mb-2">Boleh diisi maupun tidak, masukan link jika ingin
                                            menambahkan.</div>

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Instagram">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Tiktok">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Facebook">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="LinkedIn">
                                            </div>
                                        </div>
                                    </div>

                                    <label class="mt-3">Deskripsi Artikel</label>
                                    <!-- Editor Toolbar Start -->
                                    <div id="toolbar1-container">
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
                                    <div id="editor1">

                                    </div>
                                    <!-- Edit End -->

                                    <div class="col-12 mt-5">
                                        <h6 class="text-lg fw-semibold mb-0">Tambah Foto Thumbnail</h6>

                                        <div class="upload-image-wrapper d-flex align-items-center gap-3 w-100 mt-3">
                                            <!-- Preview Image Container -->
                                            <div
                                                class="uploaded-img d-none position-relative h-120-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                                                <button type="button"
                                                    class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-2 mt-2 d-flex">
                                                    <iconify-icon icon="radix-icons:cross-2"
                                                        class="text-xl text-danger-600"></iconify-icon>
                                                </button>
                                                <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover"
                                                    src="{{ asset('assets/images/user.png') }}" alt="image">
                                            </div>

                                            <!-- Upload Button -->
                                            <label
                                                class="upload-file h-120-px w-100 border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1 cursor-pointer"
                                                for="upload-file">
                                                <iconify-icon icon="solar:camera-outline"
                                                    class="text-xl text-secondary-light"></iconify-icon>
                                                <span class="fw-semibold text-secondary-light">Upload</span>
                                                <input id="upload-file" type="file" hidden>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group text-end">
                                        <button
                                            class="w-100 text-white rounded-2 text-center mt-5 form-wizard-next-btn btn btn-primary-600 px-32"
                                            style="background-color: #002776; border: none;">Selanjutnya</button>

                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                        <button type="button"
                                            class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32" style="background-color: #002776; border: none;">Kembali</button>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="wizard-fieldset">
                                <div class="text-center mb-40">
                                    <img src="{{ asset('assets/images/gif/success-img3.gif') }}" alt=""
                                        class="gif-image mb-24">
                                    <h6 class="text-md text-neutral-600">Congratulations </h6>
                                    <p class="text-neutral-400 text-sm mb-0">Well done! You have successfully completed.
                                    </p>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                    <button type="button"
                                        class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                    <button type="button"
                                        class="form-wizard-submit btn btn-primary-600 px-32">Publish</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <!-- Form Wizard End -->
                </div>
            </div>
        </div>
    </div>
@endsection
