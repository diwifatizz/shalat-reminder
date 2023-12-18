@extends('front.layouts.frontend')

@section('content')

@include('front.includes.slide')

<!-- Jadwal Sholat Start -->
<section id="section-shalat">
    <div class="container-shalat">
        <div class="card">
            <div class="card-header">
                <h3 style="color:aliceblue">Jadwal-Shalat</h3>
                <form class="form-inline">
                    <div class="form-group mx-2">
                        <label for="tahun" class="mr-2">Pilih Tahun:</label>
                        <select class="form-control" id="tahun" name="tahun">
                            <!-- Pilihan tahun di sini -->
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <!-- Tambahkan opsi tahun sesuai kebutuhan -->
                        </select>
                    </div>

                    <div class="form-group mx-2">
                        <label for="bulan" class="mr-2">Pilih Bulan:</label>
                        <select class="form-control" id="bulan" name="bulan">
                            <!-- Pilihan bulan di sini -->
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <!-- Tambahkan opsi bulan sesuai kebutuhan -->
                        </select>
                    </div>

                    <div class="form-group mx-2">
                        <label for="kabkota" class="mr-2">Pilih Kab/Kota:</label>
                        <select class="form-control" id="kabkota" name="kabkota">
                            <!-- Pilihan kab/kota di sini -->
                            <option value="kabkota1">Kab/Kota 1</option>
                            <option value="kabkota2">Kab/Kota 2</option>
                            <!-- Tambahkan opsi kab/kota sesuai kebutuhan -->
                        </select>
                    </div>

                    <div class="button-container">
                        <button type="button" class="btn btn-tampilkan">Tampilkan</button>
                    </div>
                    
                </form>
            </div>
           

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th>Tanggal</th>
                                <th>Imsak</th>
                                <th>Subuh</th>
                                <th>terbit</th>
                                <th>Dhuha</th>
                                <th>Dzuhur</th>
                                <th>Ashar</th>
                                <th>Maghrib</th>
                                <th>Isya</th>
                            </tr>
                        </thead>
                        <tbody id="list-jadwal">
                            @forelse ($jadwalfront as $key => $row)
                            <tr>
                                <td>{{ $row -> tanggal }}</td>
                                <td>{{ $row -> imsak }}</td>
                                <td>{{ $row -> subuh }}</td>
                                <td>{{ $row -> terbit }}</td>
                                <td>{{ $row -> dhuha }}</td>
                                <td>{{ $row -> dzuhur }}</td>
                                <td>{{ $row -> ashar }}</td>
                                <td>{{ $row -> maghrib }}</td>
                                <td>{{ $row -> isya }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center">Data Masih Kosong</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <p>"Orang-orang yang menepati shalatnya. Inilah orang-orang yang akan mewarisi. Mereka yang akan mewarisi surga. Mereka akan kekal di dalamnya selama-lamanya.”

                    (Surah Al-Mu'minun: 9-11)</p>
            </div>
        </div>
    </div>
</section>
<!-- Jadwal Sholat End -->


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