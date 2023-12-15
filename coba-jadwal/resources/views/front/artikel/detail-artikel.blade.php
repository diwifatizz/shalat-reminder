@extends('front.layouts.frontend')

@section('content')

    @include('front.includes.js')

    <!-- Single Product Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <a href="#" class="h1 display-5">{{ $artikel->judul }}.</a>
                    </div>
                    <div class="position-relative rounded overflow-hidden mb-3">
                        <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" class="img-zoomin img-fluid rounded w-100" alt="">
                        <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">
                            {{ $artikel->kategori->nama_kategori }}
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a href="#" class="text-muted link-hover me-3"><i class="fa fa-user"></i>&nbsp;{{ $artikel->users->name }}</a>
                        <a href="#" class="text-muted link-hover">
                            <i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($artikel->created_at)->isoFormat('dddd, D MMMM Y')}}
                        </a>
                    </div> <br>

                    <div id='post-toc'>
                        <div class="col-md-6">
                            <div class="accordion-item active">
                                <h1 class="accordion-header" id="heading-One">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-One" aria-expanded="true" aria-controls="collapse-One">
                                        Daftar Isi
                                    </button>
                                </h1>
                                <div id="collapse-One" class="accordion-collapse collapse show" aria-labelledby="heading-One" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body pb-3" style="background: #f2f4f9">
                                        <ul id='bwstoc'></ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="my-4" style="text-align: justify;">{!! $artikel->body !!}</p>
                        <script>
                        bwstoc();
                        </script>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="p-3 rounded border">
                                <div class="border-bottom my-3 pb-3">
                                    <h3 class="mb-0">Jadwal Sholat hari ini</h3>
                                </div>
                                <div class="col-12">
                                    <iframe src="https://timesprayer.com/widgets.php?frame=1&amp;lang=en&amp;name=pekanbaru&amp;avachang=true&amp;time=0&amp;fcolor=7298A7&amp;tcolor=55707B&amp;frcolor=2B4E5B"
                                        style="border: none; overflow: hidden; width: 100%; height: 196px;"></iframe>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative banner-2">
                                        <img src="{{ asset('uploads/'. $iklanA->gambar_iklan) }}" class="img-fluid w-100 rounded" alt="">
                                        <div class="text-center banner-content-2">
                                            <h6 class="mb-2">{{ $iklanA->judul }}</h6>
                                            <a href="{{ $iklanA->link }}" class="btn btn-primary text-white px-4">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="my-4">Baca Juga</h3>
                                    <div class="row g-4">
                                        @foreach ($postinganTerbaru as $row)
                                            <div class="col-12">
                                                <div class="row g-4 align-items-center features-item">
                                                    <div class="col-4">
                                                        <div class="rounded-circle position-relative">
                                                            <div class="overflow-hidden rounded-circle">
                                                                <img src="{{ asset('uploads/' . $row->gambar_artikel) }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="features-content d-flex flex-column">
                                                            <p class="text-uppercase mb-2">{{ optional($row->kategori)->nama_kategori }}</p>
                                                            <a href="#" class="h6">
                                                                {{ $row->judul }}
                                                            </a>
                                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> {{\Carbon\Carbon::parse($row->created_at)->isoFormat('dddd, D MMMM Y')}}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach 
                                    </div>
                                </br>
                                    <div class="col-lg-12">
                                        <a href="{{ route('detail.page') }}" class="link-hover btn border border-primary rounded-pill text-dark w-100 py-3 mb-4">View More</a>
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
    <!-- Single Product End -->

@endsection
