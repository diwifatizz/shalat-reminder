@extends('front.layouts.frontend')

@section('content')

@include('front.includes.slide')




<!-- Latest News Start -->
<div class="container-fluid latest-news py-5">
    <div class="container py-5">
        <h2 class="mb-4">Latest News</h2>
        <div class="latest-news-carousel owl-carousel">
            @forelse ($artikel as $row)
            <div class="latest-news-item">
                <div class="bg-light rounded">
                    <div class="rounded-top overflow-hidden">
                        <img src="{{ asset('uploads/'. $row->gambar_artikel ) }}" class="img-zoomin img-fluid rounded-top w-100" alt="">
                    </div>
                    <div class="d-flex flex-column p-4">
                        {{-- tooltip untuk menampilkan seluruh teks saat pengguna mengarahkan kursor ke elemen --}}
                        <a href="{{ route('detail-artikel', $row->slug) }}" class="h4" data-toggle="tooltip" title="{{ $row->judul }}">{{ $row->judul }}</a>

                        <div class="d-flex justify-content-between">
                            <a href="#" class="small text-body link-hover"><i class="fas fa-user-alt me-1"></i>{{ $row->users->name }}</a>
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
<!-- Latest News End -->

<style>

</style>

@endsection