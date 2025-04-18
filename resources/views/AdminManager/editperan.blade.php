@extends('layout.layout')

@section('content')
    <div class="card p-3">
        <div class="card-header text-dark bg-light fw-bold">
            Edit Peran
        </div>
        <div class="card-body">
            <form action="">
                @csrf

                <!-- Gambar Profil -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar Profil</label>
                    <input type="file" class="form-control">
                </div>

                <!-- Nama Lengkap -->
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" value="" placeholder="Masukkan Nama Lengkap">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="" placeholder="Masukkan Alamat Email">
                </div>

                <!-- Kata Sandi -->
                <div class="mb-3">
                    <label class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Masukkan Kata Sandi">
                </div>

                <!-- Peran -->
                <div class="mb-3">
                    <label class="form-label">Peran</label>
                    <select class="form-select">
                        <option selected>Isi Peran Untuk Akun ini</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="moderator">Moderator</option>
                    </select>
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-center gap-5 mt-5">
                    <button type="reset" class="btn btn-danger" style="background-color: #D90000;">Batalkan</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #062A78;">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
