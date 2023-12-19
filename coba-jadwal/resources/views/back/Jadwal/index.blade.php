@extends('layouts.default')

@section('content')


<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

        </div>
    </div>
</div>
 
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <!-- Formulir Pilihan -->
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title mb-5">
                            <h1>Jadwal-Shalat:</h1>
                        </div>
                        <form class="form-inline mt-5" style="margin-left:50px;" id="jadwalShalatForm">
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

                            <button type="button" class="btn btn-light" onclick="tampilkanJadwal()">Tampilkan</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                    <div class="alert alert-primary">
                        {{ Session('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Tanggal</th>
                                    <th>Imsak</th>
                                    <th>shubuh</th>
                                    <th>terbit</th>
                                    <th>dzuhur</th>
                                    <th>ashar</th>
                                    <th>maghrib</th>
                                    <th>isya</th>
                                    <th>lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jadwalshalat as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row -> tanggal }}</td>
                                    <td>{{ $row -> imsak }}</td>
                                    <td>{{ $row -> subuh }}</td>
                                    <td>{{ $row -> terbit }}</td>
                                    <td>{{ $row -> dzuhur }}</td>
                                    <td>{{ $row -> ashar }}</td>
                                    <td>{{ $row -> maghrib }}</td>
                                    <td>{{ $row -> isya }}</td>
                                    <td>{{ $row -> lokasi }}</td>

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
            </div>
        </div>
    </div>
</div>

@endsection