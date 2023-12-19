@extends('front.layouts.frontend')

@section('content')


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
                        <label for="kabkota" class="mr-2">Pilih provinsi</label>
                        <select class="form-control" id="kabkota" name="kabkota">
                            <!-- Pilihan kab/kota di sini -->
                            @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                            <!-- Tambahkan opsi kab/kota sesuai kebutuhan -->
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mx-2">
                        <label for="kabkota" class="mr-2">Pilih Kab/Kota:</label>
                        <select class="form-control" id="kabkota" name="kabkota">
                            <!-- Pilihan kab/kota di sini -->
                            @foreach ($regencies as $regency)
                            <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                            @endforeach
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
                                <th>Sunrise</th>
                                <th>Shubuh</th>
                                <th>Zuhur</th>
                                <th>Asar</th>
                                <th>Sunset</th>
                                <th>Maghrib</th>
                                <th>Isya</th>
                                <th>Imsak</th>
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

@endsection