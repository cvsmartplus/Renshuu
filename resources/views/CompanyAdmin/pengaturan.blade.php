@extends('layout.layoutcompany')

@section('content')
<div class="d-flex flex-column align-items-start mb-3">
  <h5 class="fw-bold">Pengaturan Akun</h5>
</div>

<div class="card p-5 shadow-sm bg-white rounded-4 position-relative" style="border-radius: 6px;">
    <!-- Accent kiri -->
    <div class="position-absolute top-0 start-0 h-100" style="width: 5px; background-color: #062a78; border-top-left-radius: 6px; border-bottom-left-radius: 6px;"></div>

    <p class="text-muted mt-4">Informasi dan aktivitas real-time dari properti Anda.</p>

    <form method="POST">
        <!-- Logo -->
        <div class="mb-4 position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <label class="form-label fw-semibold mb-0 d-flex align-items-center text-secondary">
                    <i class="ri-building-line me-2 text-muted fs-5"></i> Logo Perusahaan
                </label>
                <span class="text-success small">✓ Sudah diunggah</span>
            </div>
            <hr class="my-2">
            <button type="button" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#logoModalOnly">
                <i class="ri-image-line text-primary fs-5"></i> <span class="text-primary">Lihat Logo Perusahaan</span>
            </button>
        </div>

        <!-- Nama Lengkap -->
        <div class="mb-3">
            <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                <i class="ri-user-line me-2 text-muted fs-5"></i> Nama Lengkap
            </label>
            <input type="text" class="form-control">
        </div>

        <!-- Nama Perusahaan -->
        <div class="mb-3">
            <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                <i class="ri-briefcase-line me-2 text-muted fs-5"></i> Nama Perusahaan
            </label>
            <input type="text" class="form-control">
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                <i class="ri-mail-line me-2 text-muted fs-5"></i> Email
            </label>
            <input type="email" class="form-control">
        </div>

        <!-- Alamat -->
        <div class="mb-3">
            <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                <i class="ri-map-pin-line me-2 text-muted fs-5"></i> Alamat Perusahaan
            </label>
            <input type="text" class="form-control">
        </div>

        <!-- Kota & Provinsi -->
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                    <i class="ri-building-2-line me-2 text-muted fs-5"></i> Kota
                </label>
                <select class="form-select">
                    <option selected disabled>Pilih Kota</option>
                    <option>Bandung</option>
                    <option>Jakarta</option>
                    <option>Surabaya</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                    <i class="ri-global-line me-2 text-muted fs-5"></i> Provinsi
                </label>
                <select class="form-select">
                    <option selected disabled>Pilih Provinsi</option>
                    <option>Jawa Barat</option>
                    <option>DKI Jakarta</option>
                    <option>Jawa Timur</option>
                </select>
            </div>
        </div>

        <!-- Nomor HP -->
        <div class="row g-3 align-items-end mt-3">
            <div class="col-md-4">
                <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                    <i class="ri-flag-line me-2 text-muted fs-5"></i> Kode Negara
                </label>
                <select class="form-select">
                    <option selected disabled>Pilih Kode</option>
                    <option>Indonesia (+62)</option>
                    <option>Malaysia (+60)</option>
                    <option>Singapura (+65)</option>
                </select>
            </div>
            <div class="col-md-5">
                <label class="form-label fw-semibold d-flex align-items-center text-secondary">
                    <i class="ri-smartphone-line me-2 text-muted fs-5"></i> Nomor HP
                </label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-outline-primary w-100">Ubah</button>
            </div>
        </div>

        <div class="text-muted small mt-3">
            Nomor ini digunakan untuk verifikasi & kontak properti Anda.
        </div>

        <!-- Tombol Simpan -->
        <div class="text-end mt-4">
            <button type="submit" class="btn px-4 text-white" style="background-color: #062a78;">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<!-- Modal Logo Full View -->
<div class="modal fade" id="logoModalOnly" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body text-center p-0">
        <div class="position-relative bg-white p-3 rounded shadow">
          <img src="{{ asset('images/managers/ADA-logo.png') }}"
               alt="Logo Perusahaan"
               class="img-fluid rounded"
               style="max-width: 100%; height: auto;">
          <button type="button" class="btn btn-sm text-white position-absolute top-0 end-0 m-2" style="background-color: #b30202;">
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
