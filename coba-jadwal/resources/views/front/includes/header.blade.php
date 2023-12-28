<div class="container-fluid bg-light embed-responsive">
    <div class="container px-0">
        <nav class="navbar navbar-expand-xl navbar-light bg-transparent">
            <a href="#" class="navbar-brand mt-3">
                <p class="text-primary mb-6" style="line-height: 0; font-size:23px;">ShalatReminder.net</p>
                <small class="text-body fw-normal" style="letter-spacing: 2px;">Jadwal-waktu-shalat dan artikel</small>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent py-3" id="navbarCollapse">
                <div class="col-md-2">
                    <div class="konten">
                    </div>
                </div>
                <div class="navbar-nav mx-auto border-top">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('jadwalshalat.index') }}" class="nav-item nav-link">JadwalShalat</a>
                    <a href="{{ route('detail-page') }}" class="nav-item nav-link">Artikel</a>
                    <a href="{{ route('asmaul-husna.index') }}" class="nav-item nav-link">Asmaul-Husna</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($category as $cat)
                            <a class="dropdown-item" href="{{ route('kategori', $cat->slug) }}">{{ $cat->nama_kategori }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                    <div class="d-flex">
                        <div class="d-flex align-items-center">
                            <strong class="fs-6" id="current-time"></strong>
                            <div class="d-flex flex-column ms-2" style="width: 200px;">
                                <span class="text-body">Indonesia</span>
                                <small id="current-date">fri. 12 08 2023</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>