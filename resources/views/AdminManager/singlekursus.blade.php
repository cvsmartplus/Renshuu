@extends('layout.single')

@section('content')
    <div class="container-fluid me-7">
        <div class="d-flex align-items-center justify-content-between m-5 mb-16">
            <div class="d-flex align-items-center gap-2">
                <img src="{{ asset('images/managers/Elon-Musk.png') }}" alt="image"
                    class="w-40-px h-40-px object-fit-cover">
                <span class="fw-bold text-neutral-900">Elon Musk</span>
                <i class="ri-bar-chart-2-fill" style="font-size: 32px;"></i>
                <span class="fw-bold text-neutral-900">Intermediate</span>
            </div>
            <a href="{{ route('adminkursus') }}"
                class="btn btn-primary rounded-3 d-flex align-items-center justify-content-center"
                style="background-color: #002F87; width: 110px; height: 50px;">
                <i class="ri-arrow-left-line fs-5 me-2"></i>
                <span>Kembali</span>
            </a>
        </div>
        <div class="m-5">
            <h4 class="text-neutral-900 mb-36">Smart Factory.</h4>
            <div class="btn-group radius-8 mb-20" role="group" aria-label="Default button group">
                <button type="button" class="btn btn-light px-20 py-11 radius-8">Deskripsi</button>
                <button type="button" class="btn btn-light px-20 py-11">Pemateri</button>
            </div>
        </div>
        <div class="card shadow-md border-0 float-end mb-20 ms-2" style="width: 18rem;">
            <!-- Gambar -->
            <img src="{{ asset('images/managers/Foto-aja.png') }}" class="card-img-top p-3 img-fluid" alt="Kursus Image">

            <div class="card-body">
                <!-- Harga -->
                <h6 class="text-danger fw-bold">Rp10.000 <span
                        class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm float-end">18%
                        off</span></h6>
                <p><span class="text-muted fw-normal text-decoration-line-through">Rp12.195</span></p>
                <!-- Info -->
                <div class="mt-3">
                    <p><i class="ri-bar-chart-2-fill"></i> <strong>Level</strong> <span class="float-end">Tingkat
                            Tinggi</span></p>
                    <p><i class="ri-user-fill"></i> <strong>Siswa</strong> <span class="float-end">404</span></p>
                    <p><i class="ri-calendar-fill"></i> <strong>Jadwal</strong> <span class="float-end">28 Januari
                            2008</span></p>
                    <p><i class="ri-time-fill"></i> <strong>Durasi</strong> <span class="float-end">2 jam 90 menit</span>
                    </p>
                </div>

                <!-- Tombol -->
                <a href="#" class="btn btn-primary w-100" style="background-color: #002F87;">Daftar Sekarang</a>
            </div>
        </div>
        <div class="container-fluid me-7">
            <div class="row">
                <div class="mb-36 col-md">
                    <h6>Transformasi Digital di Pabrik</h6>
                    <div class="me-7 pe-5">
                        <p class="d-flex text-wrap" style="text-align: justify; me-7 pe-5">
                            “Kursus ini mengajarkan cara menerapkan teknologi canggih seperti otomasi industri, Internet of
                            Things (IoT), dan analisis data di pabrik. Peserta akan mempelajari bagaimana mengoptimalkan
                            proses produksi, meningkatkan keamanan kerja, serta menggunakan analitik prediktif untuk
                            pemeliharaan preventif. Kursus ini juga mencakup studi kasus dari perusahaan terkemuka dan
                            proyek-proyek simulasi untuk keterampilan praktis.
                        <div class="d-flex text-wrap" style="text-align: justify;">
                            Selain itu, peserta akan mengeksplorasi tantangan dan peluang dalam transformasi digital di
                            industri manufaktur, termasuk aspek keamanan siber dan manajemen perubahan.
                            Setelah menyelesaikan kursus, peserta akan siap memimpin perubahan di lingkungan pabrik, mampu
                            menghadapi tantangan teknologi masa depan, dan mengidentifikasi peluang baru untuk inovasi dan
                            peningkatan efisiensi.”
                        </div>
                        </p>
                    </div>
                </div>
                <div class="mb-36">
                    <h6>Yang Akan Kamu Pelajari</h6>
                    <ol class="text-start">
                        <li>Optimasi Proses Produksi</li>
                        <li>Keamanan Kerja yang Ditingkatkan</li>
                        <li>Analitik Prediktif</li>
                        <li>Inovasi Berkelanjutan</li>
                    </ol>
                </div>
                <h6>Yang Akan Kamu Pelajari</h6>
                <div class="me-3">
                    <p class="d-flex text-wrap" style="text-align: justify;">
                        Melalui kursus ini, Anda akan mendapatkan keterampilan praktis dan pengetahuan teoritis yang
                        dibutuhkan untuk memimpin transformasi digital di industri manufaktur.
                        Dapatkan wawasan dari studi kasus nyata dan proyek-proyek simulasi yang dirancang untuk memberikan
                        pengalaman langsung.
                    </p>
                </div>
                <h6 class="mt-5">Kelola Anggota Kursus</h6>
                <p class="text-secondary">
                    Klik tombol <span class="fw-semibold">Centang</span>(Hijau) jika sudah mengikuti semua materi kursus,
                    dan sesuai
                </p>

            </div>
        </div>
        <div class="card mb-20 mx-3 p-3">
            <div class="row">
                <div class="col">
                    <div class="d-flex align-items-center gap-2 ms-5">                        
                        <select class="form-select form-select-sm" style="width: auto;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <div class="input-group" style="width: 200px;">
                            <span class="input-group-text">
                                🔍
                            </span>
                            <input type="text" class="form-control" placeholder="Cari">
                        </div>
                        <select class="form-select form-select-sm" style="width: 100px;">
                            <option value="Status">Status</option>
                            <option value="Tidak Lolos">Tidak Lolos</option>
                            <option value="Lolos tahap selanjutnya">Lolos tahap selanjutnya</option>
                        </select>
                    </div>         
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="mx-3">
                <div class="table-responsive">
                    <table class="table bordered-table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        <label class="form-check-label" for="checkAll">
                                            S.L
                                        </label>
                                    </div>
                                </th>
                                <th scope="col-1">Nama Anggota</th>
                                <th scope="col-2">Tanggal Pembuatan</th>
                                <th scope="col-5">Deskripsi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Verifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">
                                            01
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    23 Jan 2025
                                </td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                <td> 
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                                            
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="customCheckbox">
                                        <label class="form-check-label" for="customCheckbox"></label>
                                        <span class="required-symbol">*</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check2">
                                        <label class="form-check-label" for="check2">
                                            02
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    23 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check3">
                                        <label class="form-check-label" for="check3">
                                            03
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td> 

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check4">
                                        <label class="form-check-label" for="check4">
                                            04
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td> 

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check5">
                                        <label class="form-check-label" for="check5">
                                            05
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td> 
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check6">
                                        <label class="form-check-label" for="check6">
                                            06
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td> 

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check7">
                                        <label class="form-check-label" for="check7">
                                            07
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check8">
                                        <label class="form-check-label" for="check8">
                                            08
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check9">
                                        <label class="form-check-label" for="check9">
                                            09
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check style-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="check110">
                                        <label class="form-check-label" for="check110">
                                            10
                                        </label>
                                    </div>
                                </td>
                                <td>Esa Azmi Faiq</td>
                                <td>
                                    25 Jan 2025
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </td>
                                <td>
                                    <button class="btn btn-secondary" style="background-color: #808080; color: white; border-radius: 10px; padding: 6px 12px; font-size: 14px;">
                                        Sedang Dikerjakan
                                    </button>
                                </td>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex flex-wrap align-items-center justify-content-between mt-5">
                    <span>Showing 1 to 10 of 12 entries</span>
                    <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                        <li class="page-item">
                            <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                href="javascript:void(0)">
                                <iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"
                                href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"
                                href="javascript:void(0)">
                                <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
