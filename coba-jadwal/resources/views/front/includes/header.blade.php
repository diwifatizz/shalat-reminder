<div class="container-fluid bg-light">
  <div class="container px-0">
      <nav class="navbar navbar-light navbar-expand-xl">
          <a href="#" class="navbar-brand mt-3">
              <p class="text-primary display-6 mb-4" style="line-height: 0;">JadwalShalat</p>
              <small class="text-body fw-normal" style="letter-spacing: 2px;">Shalat Reminder</small>
          </a>
          <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="fa fa-bars text-primary"></span>
          </button>
          <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
              <div class="navbar-nav mx-auto border-top">
                  <a href="/" class="nav-item nav-link">Home</a>
                  <a href="{{ route('detail.page') }}" class="nav-item nav-link">Artikel</a>
                <a href="#" class="nav-item nav-link">Asmaul Husna</a>
                  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($category as $cat)
                      <a class="dropdown-item" href="{{ $cat->slug }}">{{ $cat->nama_kategori }}</a>
                    @endforeach
                    </div>
                </div>
                  <a href="{{ route('kontak') }}" class="nav-item nav-link">Contact Us</a>
              </div>
              <div class="d-flex flex-nowrap border-top pt-3 pt-xl-0">
                  <div class="d-flex">
                      <img src="{{ asset ('front/img/weather-icon.png') }}" class="img-fluid w-100 me-2" alt="">
                      <div class="d-flex align-items-center">
                          <strong class="fs-4 text-secondary">31°C</strong>
                          <div class="d-flex flex-column ms-2" style="width: 150px;">
                              <span class="text-body">Indonesia</span>
                              <small>fri. 08 12 2023</small>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
  </div>
</div>