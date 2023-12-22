@extends('front.layouts.frontend')

@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('content')


<!-- Jadwal Sholat Start -->
<section id="section-shalat">
    <div class="container-shalat">
        <div class="card">
            <div class="card-header">
                <h3 style="color:aliceblue">Jadwal-Shalat  {{ $city }} Bulan {{ $month }} Tahun {{ $year }}</h3>
                <form class="form-inline">

                    <div class="form-group mx-2">
                        <label for="province" class="mr-2">Pilih provinsi</label>
                        <select class="form-control" name="province" id="provinces">
                            <option value="" disabled selected>Pilih Provinsi</option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}" @if ($selectedProvince == $province->id) selected @endif>{{ $province->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mx-2">
                        <label for="city" class="mr-2">Pilih Kab/Kota:</label>
                        <select class="form-control" name="city" id="city">
                            <option value="" disabled selected>Pilih Kabupaten/Kota</option>
                            @foreach ($regencies as $regency)
                                <option value="{{ $regency->name }}" @if ($city == $regency->name) selected @endif>{{ $regency->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mx-2">
                        <label for="month" class="mr-2">Pilih Bulan:</label>
                        <select class="form-control" id="month" name="month">
                            @for ($i = 1; $i <= 12; $i++)
                            <option value="{{ $i }}" @if ($i == $month) selected @endif>{{ date('F', mktime(0, 0, 0, $i, 1)) }}</option>
                        @endfor
                        </select>
                    </div>

                    <div class="form-group mx-2">
                        <label for="year" class="mr-2">Pilih Tahun:</label>
                        <select class="form-control" id="year" name="year">
                            @for ($i = date('Y') - 5; $i <= date('Y') + 5; $i++)
                            <option value="{{ $i }}" @if ($i == $year) selected @endif>{{ $i }}</option>
                        @endfor
                        </select>
                    </div>        

                    <button class="btn-tampilkan" type="submit" >Submit</button>
                    
                </form>
            </div>
           

            <div class="card-body">
                <div class="table-responsive" style="overflow-x: auto;">
                    <table id="example1" class="table">
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
                            @foreach ($jadwal as $data)
                            <tr @if (now()->format('d') == $data['date']['gregorian']['day']) style="font-weight: bold; background-color: yellow;" @endif>
                                <td>{{  $data['date']['gregorian']['day'] }}</td>
                                <td>{{ $data['timings']['Fajr'] }}</td>
                                <td>{{ $data['timings']['Sunrise'] }}</td>
                                <td>{{ $data['timings']['Dhuhr'] }}</td>
                                <td>{{ $data['timings']['Asr'] }}</td>
                                <td>{{ $data['timings']['Sunset'] }}</td>
                                <td>{{ $data['timings']['Maghrib'] }}</td>
                                <td>{{ $data['timings']['Isha'] }}</td>
                                <td>{{ $data['timings']['Imsak'] }}</td>
                            </tr>
                            @endforeach
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

@section('script')
<script type="text/javascript">
   $(document).ready(function () {
    $('#provinces').on('change', function () {
        let id_provinsi = $(this).val();
        let csrf_token = $('meta[name="csrf-token"]').attr('content'); // Ambil CSRF token dari meta tag

        $.ajax({
            type: 'POST',
            url: "{{ route('getKabupatenJadwalShalat') }}",
            data: {
                id_provinsi: id_provinsi,
                _token: csrf_token // Sertakan CSRF token dalam data
            },
            dataType: 'html',

            success: function (msg) {
                $('#city').html(msg);
            },
            error: function (data) {
                console.log('error:', data);
            },
        });
    });
});
</script>

<script src="{{ asset('back/js/plugin/datatables/datatables.min.js')}}"></script>

<script>
    $(function () {
    $("#example1").DataTable();
    });
</script>

@endsection