@extends('front.layouts.frontend')

@section('content')


<!-- 404 Start -->
<div class="container-fluid py-5">
    <div class="container py-5 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-secondary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Halaman Tidak Ditemukan</h1>
                <p class="mb-4">Maaf, Halaman yang kamu cari tidak tersedia. Silahkan kembali ke Home atau gunakan fitur Pencarian</p>
                <a class="btn link-hover border border-primary rounded-pill py-3 px-5" href="{{ route('index') }}">Kembali Ke Home</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->
@endsection