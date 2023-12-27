<div class="container-fluid bg-light">
<div class="container-fluid bg-light">
    <div class="container px-0">
        <nav class="navbar navbar-expand-xl navbar-light ">
            <div class="collapse navbar-collapse bg-transparent py-3" id="navbarCollapse">
                <div class="col-2">
                <div class="konten">
                    <div class="konten__container">
                        <p class="konten__container__text">
                            <img src="{{ asset('front/img/logo.png') }}" alt="Deskripsi Gambar" style="width: 50px;">Shalat Reminder
                        </p>
                    </div>
                </div>
                </div>
                <div class="navbar-nav mx-auto border-top">
                    <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('jadwalshalat.index') }}" class="nav-item nav-link {{ request()->is('jadwalshalat*') ? 'active' : '' }}">JadwalShalat</a>
                    <a href="{{ route('detail-page') }}" class="nav-item nav-link {{ request()->is('detail-page') ? 'active' : '' }}">Artikel</a>
                    <a href="{{ route('asmaul-husna.index') }}" class="nav-item nav-link {{ request()->is('asmaul-husna*') ? 'active' : '' }}">Asmaul-Husna</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($category as $cat)
                            <a class="dropdown-item" href="{{ route('kategori', $cat->slug) }} {{ request()->is('kategori/' . $cat->slug) ? 'active' : '' }}">{{ $cat->nama_kategori }}</a>
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
</div>
