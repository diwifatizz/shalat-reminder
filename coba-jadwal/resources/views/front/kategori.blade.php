@extends('front.layouts.frontend')

@section('content')
<div class="container">
    <h2>Artikel Kategori: {{ $kategori->nama_kategori }}</h2>

    @foreach ($artikelByKategori as $artikel)
        <div class="card mb-3">
            <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" class="card-img-top" alt="Gambar Artikel">
            <div class="card-body">
                <h5 class="card-title">{{ $artikel->judul }}</h5>
                <p class="card-text">{{ $artikel->body }}</p>
                <p class="card-text"><small class="text-muted">{{ $artikel->created_at->diffForHumans() }}</small></p>
            </div>
        </div>
    @endforeach

    {{ $artikelByKategori->links() }}
</div>
@endsection
