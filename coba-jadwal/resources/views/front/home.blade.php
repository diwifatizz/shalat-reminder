@extends('front.layouts.frontend')

@section('content')

@include('front.includes.slide')

<section id="home-section">
    <div class="home-content">
        <div class="dalil-home">
            <h2 class="h2-dalil">Al-Ahzab: 70</h2>
        </div>
        <h1 class="h1-dash">Wahai orang-orang yang beriman! Ingatlah Allah, dan katakan apa yang benar.</h1>
        <hr class="hr-dash">
        <p class="p-dash">Lihat waktu sholat yang akurat, 99 nama baik Allah, dan daftar artikel dengan mudah dengan ShalatReminder.net</p>
    </div>
    <div class="home-img">
        <img src="{{ asset ('front/img/img-dash.svg') }}" alt="Taqua" class="img-full">
        <img src="{{ asset ('front/img/img-dash-mobile.svg') }}" alt="Taqua" class="img-mobile">
    </div>
</section>

<section id="jadwal-dash">
    <div class="jadwal-img">
        <img src="{{ asset ('front/img/img-jadwal.svg') }}" alt="Prayer Times">
    </div>

    <div class="jadwal-content">
        <h1 class="h1-dash">JadwalShalat</h1>
        <p class="p-dash">Lihat waktu masuk shalat secara akurat dan ibadah tepat waktu. Orang-orang yang shalat lima waktu dan melaksanakannya tepat waktu, maka insya Allah akan memuliakannya dengan sembilan jenis kemuliaan.</p>
    </div>
</section>

<section id="asmaul-dash">
    <div class="asmaul-content">
        <h1 class="h1-dash">Asma'ul Husna</h1>
        <p class="p-dash">Ketahui lafadz dan arti dari 99 nama baik Allah. Membaca nama-nama indah bisa membuat hati menjadi tenang, menghilangkan segala dosa, menjauhkan diri dari kelupaan, diberikan kelancaran dalam setiap urusan hingga pintu rezeki terbuka lebar.</p>
    </div>
    <div class="asmaul-img">
        <img src="{{ asset ('front/img/img-asmaul.svg') }}" alt="Asma'ul Husna">
    </div>
</section>


<!-- Banner Start -->
<div class="container-fluid py-5 my-5"style="background: #f0e9f7;">
    <div class="container">
        @forelse ($artikel->sortByDesc('created_at')->take(1) as $row)
        <div class="row g-4 align-items-center">
            <div class="col-lg-7">
                <h1 class="mb-4 text-dark">Artikel Terbaru</h1>
                <h2 class="mb-4">{{ $row->judul }}</h2>
                <p class="text-dark mb-4 pb-2">{!! \Illuminate\Support\Str::limit($row->body, 150   ) !!}
                    <a href="{{ route('detail-artikel', $row->slug) }}">Selengkapnya</a>
                </p>
            </div>
            <div class="col-lg-5">
                <div class="rounded">
                    <img src="{{ asset($row->gambar_artikel) }}" class="img-fluid rounded w-100 rounded" alt="banner">
                </div>
            </div>
        </div>
        @empty
            <p>Tidak ada Artikel</p>
        @endforelse
    </div>
</div>  
<!-- Banner End -->

<!-- Latest News Start -->
<div class="container-fluid latest-news py-5">
    <div class="container py-5">
        <h2 class="mb-4 text-dark">Daftar Artikel Terbaru</h2>
        <div class="latest-news-carousel owl-carousel">
            @forelse ($artikel as $row)
            <div class="latest-news-item">
                <div class="bg-light rounded">
                    <div class="rounded-top overflow-hidden">
                        <img src="{{ asset($row->gambar_artikel) }}" alt="" width="350" height="220">
                    </div>
                    <div class="d-flex flex-column p-4">
                        {{-- tooltip untuk menampilkan seluruh teks saat pengguna mengarahkan kursor ke elemen --}}
                        <a href="{{ route('detail-artikel', $row->slug) }}" class="h4" data-toggle="tooltip" title="{{ $row->judul }}">{{ $row->judul }}</a>

                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover"><i class="fas fa-user-alt me-1"></i>{{ $row->users ? $row->users->name : 'not available' }}</a>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>{{ $row->kategori->nama_kategori }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>Tidak ada Artikel</p>
            @endforelse
        </div>
    </div>
</div>

@endsection