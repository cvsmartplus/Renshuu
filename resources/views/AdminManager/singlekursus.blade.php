@extends('layout.single')

@section('content')
<div class="container-fluid me-7">
    <div class="d-flex align-items-center justify-content-between m-5 mb-16">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('images/managers/Elon-Musk.png') }}" alt="image" class="w-40-px h-40-px object-fit-cover">
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
        <img src="{{asset('images/managers/Foto-aja.png')}}" class="card-img-top p-3" alt="Kursus Image">
        
        <div class="card-body">
            <!-- Harga -->
            <h6 class="text-danger fw-bold">Rp10.000 <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm float-end">18% off</span></h6>
            <p><span class="text-muted fw-normal text-decoration-line-through">Rp12.195</span></p>
            <!-- Info -->
            <div class="mt-3">
                <p><i class="ri-bar-chart-2-fill"></i> <strong>Level</strong> <span class="float-end">Tingkat Tinggi</span></p>
                <p><i class="ri-user-fill"></i> <strong>Siswa</strong> <span class="float-end">404</span></p>
                <p><i class="ri-calendar-fill"></i> <strong>Jadwal</strong> <span class="float-end">28 Januari 2008</span></p>
                <p><i class="ri-time-fill"></i> <strong>Durasi</strong> <span class="float-end">2 jam 90 menit</span></p>
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
                        “Kursus ini mengajarkan cara menerapkan teknologi canggih seperti otomasi industri, Internet of Things (IoT), dan analisis data di pabrik. Peserta akan mempelajari bagaimana mengoptimalkan proses produksi, meningkatkan keamanan kerja, serta menggunakan analitik prediktif untuk pemeliharaan preventif. Kursus ini juga mencakup studi kasus dari perusahaan terkemuka dan proyek-proyek simulasi untuk keterampilan praktis.
                        <div class="d-flex text-wrap" style="text-align: justify;">
                            Selain itu, peserta akan mengeksplorasi tantangan dan peluang dalam transformasi digital di industri manufaktur, termasuk aspek keamanan siber dan manajemen perubahan.
                            Setelah menyelesaikan kursus, peserta akan siap memimpin perubahan di lingkungan pabrik, mampu menghadapi tantangan teknologi masa depan, dan mengidentifikasi peluang baru untuk inovasi dan peningkatan efisiensi.”
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
                    Melalui kursus ini, Anda akan mendapatkan keterampilan praktis dan pengetahuan teoritis yang dibutuhkan untuk memimpin transformasi digital di industri manufaktur. 
                    Dapatkan wawasan dari studi kasus nyata dan proyek-proyek simulasi yang dirancang untuk memberikan pengalaman langsung.
                </p>
            </div>
            <h6 class="mt-5">Kelola Anggota Kursus</h6>
            <p class="text-secondary">
                Klik tombol <span class="fw-semibold">Centang</span>(Hijau) jika sudah mengikuti semua materi kursus, dan sesuai
            </p>
            
        </div>
    </div>
</div>
<div class="card mb-20 mx-3">
    <div class="card-header d-flex flex-wrap align-items-center justify-content-end gap-3">
        <div class="d-flex flex-wrap align-items-center gap-3">
            <div class="d-flex justify-content-end align-items-center gap-3">
                <!-- Pencarian -->
                <div class="d-flex align-items-center text-secondary cursor-pointer">
                    <i class="ri-search-line"></i>
                    <span class="ms-2">Pencarian</span>
                </div>
                <!-- Filter -->
                <div class="d-flex align-items-center text-secondary cursor-pointer">
                    <i class="ri-filter-fill"></i>
                    <span class="ms-2">Filter</span>
                </div>              
                <!-- Pilih -->
                <div class="d-flex align-items-center text-secondary cursor-pointer">
                    <i class="ri-grid-line"></i>
                    <span class="ms-2">Pilih</span>
                </div>
            </div>    
        </div> 
    </div>
</div>
<div class="card-body">
    <div class="mx-3">
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
                    <th scope="col">Invoice</th>
                    <th scope="col">Name</th>
                    <th scope="col">Issued Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list1.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                        </div>
                    </td>
                    <td>25 Jan 2024</td>
                    <td>$200.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#696589</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list2.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Annette Black</h6>
                        </div>
                    </td>
                    <td>25 Jan 2024</td>
                    <td>$200.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list3.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Ronald Richards</h6>
                        </div>
                    </td>
                    <td>10 Feb 2024</td>
                    <td>$200.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526587</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list4.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Eleanor Pena</h6>
                        </div>
                    </td>
                    <td>10 Feb 2024</td>
                    <td>$150.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#105986</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list5.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Leslie Alexander</h6>
                        </div>
                    </td>
                    <td>15 March 2024</td>
                    <td>$150.00</td>
                    <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526589</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list6.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Albert Flores</h6>
                        </div>
                    </td>
                    <td>15 March 2024</td>
                    <td>$150.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526520</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list7.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jacob Jones</h6>
                        </div>
                    </td>
                    <td>27 April 2024</td>
                    <td>$250.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list8.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jerome Bell</h6>
                        </div>
                    </td>
                    <td>27 April 2024</td>
                    <td>$250.00</td>
                    <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#200257</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list9.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Marvin McKinney</h6>
                        </div>
                    </td>
                    <td>30 April 2024</td>
                    <td>$250.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
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
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526525</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list10.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Cameron Williamson</h6>
                        </div>
                    </td>
                    <td>30 April 2024</td>
                    <td>$250.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:edit"></iconify-icon>
                        </a>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <span>Showing 1 to 10 of 12 entries</span>
                    <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                        <li class="page-item">
                            <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"  href="javascript:void(0)">
                                <iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"  href="javascript:void(0)">
                                <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon>
                            </a>
                        </li>
                    </ul>                   
        </div>
    </div>
</div>



@endsection