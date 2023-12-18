@extends('front.layouts.frontend')

@section('content')

@include('front.includes.slide')

<!-- Jadwal Sholat Start -->
<section id="section-shalat">
    <div class="container-shalat">
        <div class="card">
            <div class="card-header">
                <h3>Jadwal-Shalat</h3>
                <div class="dropdown-container">
                    <label for="cityDropdown">Kota/Kabupaten:</label>
                   
                </div>
                <div class="month-navigation">
                    <div class="previous-month" onclick="navigateMonth(-1)"></div>
                    <select id="cityDropdown" class="form-select" aria-label="Pilih Kota/Kabupaten">
                        <option value="city1">Kota 1</option>
                        <option value="city2">Kab 2</option>
                        <option value="city3">Kota 3</option>
                    </select>
                    <div class="next-month" onclick="navigateMonth(1)"></div>
                </div>
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

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <p>"Those who keep their prayers. These are the ones who will inherit. Those who will inherit heaven. They will abide therein forever."

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
                        {{--  tooltip untuk menampilkan seluruh teks saat pengguna mengarahkan kursor ke elemen --}}
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
