@extends('front.layouts.frontend')

@section('content')

<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <form action="{{ route('detail-page')}}" method="GET" class="mb-4">
            <div class="search-box">
                <input type="search" name="search" class="search-text" placeholder="Cari artikel..." value="{{ request('search') }}">
                <a href="#" class = "search-btn">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </form>  
        <div class="tab-class mb-4">
            <div class="mt-5 lifestyle">
                <div class="border-bottom mb-4">
                    <h3 class="mb-4">Artikel Kategori: {{ $kategori->nama_kategori }}</h3>
                </div>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show active">
                                <div class="row g-4 align-items-center">
                                    <div class="row g-4">
                                        @foreach ($artikelByKategori as $artikel)
                                        <div class="col-3">
                                            <img src="{{ asset($artikel->gambar_artikel ) }}" class="img-fluid w-100 rounded" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h3>{{ $artikel->judul }}</h3>
                                            <p class="mb-0">{!! \Illuminate\Support\Str::limit($artikel->body, 200) !!} </p>
                                            <a href="{{ route('detail-artikel', $artikel->slug) }}">Selengkapnya</a>
                                        </div>
                                        @endforeach
                                        {{-- pagination --}}
                                        <div class="d-flex justify-content-end">   {{ $artikelByKategori->links() }}
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection