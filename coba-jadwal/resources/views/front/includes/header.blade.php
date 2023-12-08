<div class="container-fluid topbar bg-dark d-none d-lg-block">
  <div class="container px-0">
      <div class="topbar-top d-flex justify-content-between flex-lg-wrap">
          <div class="top-info flex-grow-0">
              <span class="rounded-circle btn-sm-square bg-primary me-2">
                  <i class="fas fa-bolt text-white"></i>
              </span>
              <div class="pe-2 me-3 border  border-white d-flex align-items-center">
                  <p class="mb-0 text-white fs- fw-normal">ShalatReminder.net</p>
              </div>
              <div class="overflow-hidden" style="width: 600px;">
                  <div id="note" class="ps-2">
                      <img src="{{ asset ('fron/img/features-fashion.jpg') }}" class="img-fluid rounded-circle border border-3 border-primary me-2" style="width: 30px; height: 30px;" alt="">
                      <a href="#"><p class="text-white mb-0 link-hover">Jadwal Shalat lima waktu dan artikel terbaru</p></a>
                  </div>
              </div>
          </div>
          <div class="top-link flex-lg-wrap">
              <i class="fas fa-calendar-alt text-white bord border-secondary pe-2 me-2"> <span class="text-body">Tuesday, Sep 12, 2024</span></i>
              <div class="d-flex icon">
                  <p class="mb-0 text-white me-2">Follow Us:</p>
                  <a href="" class="me-2"><i class="fab fa-facebook-f text-body link-hover"></i></a>
                  <a href="" class="me-2"><i class="fab fa-twitter text-body link-hover"></i></a>
                  <a href="" class="me-2"><i class="fab fa-instagram text-body link-hover"></i></a>
                  <a href="" class="me-2"><i class="fab fa-youtube text-body link-hover"></i></a>
                  <a href="" class="me-2"><i class="fab fa-linkedin-in text-body link-hover"></i></a>
                  <a href="" class="me-2"><i class="fab fa-skype text-body link-hover"></i></a>
                  <a href="" class=""><i class="fab fa-pinterest-p text-body link-hover"></i></a>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="container-fluid bg-light">
  <div class="container px-0">
      <nav class="navbar navbar-light navbar-expand-xl">
          <a href="index.html" class="navbar-brand mt-3">
              <p class="text-primary display-6 mb-4" style="line-height: 0;">JadwalShalat</p>
              <small class="text-body fw-normal" style="letter-spacing: 2px;">Jadwal Waktu Sholat-Jadwal Shalat</small>
          </a>
          <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="fa fa-bars text-primary"></span>
          </button>
          <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
              <div class="navbar-nav mx-auto border-top">
                  <a href="/" class="nav-item nav-link active">Home</a>
                  <a href="detail-artikel.blade.php" class="nav-item nav-link">Artikel</a>
                  <a href="#" class="nav-item nav-link">Asmaul Husna</a>
                  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @foreach ($category as $cat)
                      <a class="dropdown-item" href="{{ $cat->slug }}">{{ $cat->nama_kategori }}</a>
                      @endforeach
                    </div>
                </div>
                  <a href="#" class="nav-item nav-link">Contact Us</a>
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
                  <button class="btn-search btn border border-primary btn-md-square rounded-circle bg-white my-auto" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
              </div>
          </div>
      </nav>
  </div>
</div>