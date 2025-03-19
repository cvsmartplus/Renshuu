@extends('layout.layout')

@php
    $title='Buat_Artikel';
    $script= '<script src="' . asset('assets/js/editor.highlighted.min.js') . '"></script>
                   <script src="' . asset('assets/js/editor.quill.js') . '"></script>
                   <script src="' . asset('assets/js/editor.katex.min.js') . '"></script>
                   <script>
                    // Editor Js Start
                    const quill = new Quill("#editor", {
                        modules: {
                            syntax: true,
                            toolbar: "#toolbar-container",
                        },
                        placeholder: "Compose an epic...",
                        theme: "snow",
                    });
                    // Editor Js End
                    </script>';
@endphp

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0">Buat Artikel Baru</h6>
    </div>
    <div class="card-body">
        <div class="row gy-3">
            <div class="col-12">
                <label class="form-label">Judul Artikel</label>
                <input type="text" name="#0" class="form-control" placeholder="tulis sesuatu yang menarik">
            </div>
            <div class="col-12">
                <label class="form-label">Sub Judul Artikel</label>
                <input type="text" name="#0" class="form-control" placeholder="tulis sesuatu yang menarik">
            </div>
            <div class="col-12">
                <label class="form-label">Kategori Artikel</label>
                <input type="text" class="form-control flex-grow-1" placeholder="tulis sesuatu yang menarik">
            </div>
        </div>
    </div>
    <div class="card basic-data-table radius-12 overflow-hidden">
        <div class="card-body p-0">
    
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
    
        </div>
    </div>
    <div class="col-md-6">
        <div class="card h-100 p-0">
            <div class="card-header border-bottom bg-base py-16 px-24">
                <h6 class="text-lg fw-semibold mb-0">Image Upload</h6>
            </div>
            <div class="card-body p-24">
                <div class="upload-image-wrapper d-flex align-items-center gap-3">
                    <div class="uploaded-img d-none position-relative h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50">
                        <button type="button" class="uploaded-img__remove position-absolute top-0 end-0 z-1 text-2xxl line-height-1 me-8 mt-8 d-flex">
                            <iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>
                        </button>
                        <img id="uploaded-img__preview" class="w-100 h-100 object-fit-cover" src="{{ asset('assets/images/user.png') }}" alt="image">
                    </div>

                    <label class="upload-file h-120-px w-120-px border input-form-light radius-8 overflow-hidden border-dashed bg-neutral-50 bg-hover-neutral-200 d-flex align-items-center flex-column justify-content-center gap-1" for="upload-file">
                        <iconify-icon icon="solar:camera-outline" class="text-xl text-secondary-light"></iconify-icon>
                        <span class="fw-semibold text-secondary-light">Upload</span>
                        <input id="upload-file" type="file" hidden>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <!-- Kolom Upload Gambar -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Image Upload</h5>
                    <label class="upload-box d-flex flex-column align-items-center justify-content-center border p-4">
                        <i class="bi bi-upload text-secondary fs-1"></i>
                        <span class="text-muted">Upload</span>
                        <input type="file" id="upload-file" hidden>
                    </label>
                </div>
            </div>
    
            <!-- Kolom Contoh Letak -->
            <div class="col-md-6">
                <h2>Contoh Letak</h2>
                <div class="card p-3">
                    <h5>Mengapa Pembelajaran Hibrida Adalah Masa Depan?</h5>
                    <p>"Pembelajaran hibrida memungkinkan siswa untuk mendapatkan manfaat dari interaksi langsung di kelas serta fleksibilitas belajar secara online..."</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <!-- Kolom Upload Gambar -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Image Upload</h5>
                    <label class="upload-box d-flex flex-column align-items-center justify-content-center border p-4">
                        <i class="bi bi-upload text-secondary fs-1"></i>
                        <span class="text-muted">Upload</span>
                        <input type="file" id="upload-file" hidden>
                    </label>
                </div>
            </div>
    
            <!-- Kolom Contoh Letak -->
            <div class="col-md-6">
                <h2>Contoh Letak</h2>
                <div class="card p-3">
                    <h5>Mengapa Pembelajaran Hibrida Adalah Masa Depan?</h5>
                    <p>"Pembelajaran hibrida memungkinkan siswa untuk mendapatkan manfaat dari interaksi langsung di kelas serta fleksibilitas belajar secara online..."</p>
                </div>
            </div>
        </div>
    </div>        
</div>            

@endsection