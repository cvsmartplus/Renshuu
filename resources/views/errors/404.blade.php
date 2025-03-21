@extends('layout.error')

@section('title', '404 Halaman Ga Ketemu')

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center vh-100 text-center">
    <img src="{{ asset('images/status_code/404.png') }}" alt="404 Not Found" class="img-fluid" style="max-width: 400px;">
    <h1 class="text-blue fw-bold mt-3">Waduh! Error 404</h1>
    <p class="text-secondary fs-5">
        Kayaknya halaman ini lagi jalan-jalan entah ke mana... <br> Yuk, balik ke tempat yang bener!
    </p>
    <a href="{{ route('welcome') }}" class="btn btn-cta rounded-pill fw-bold text-jost" style="text-decoration: none">
        Pulang ke Beranda
    </a>
</div>
@endsection
