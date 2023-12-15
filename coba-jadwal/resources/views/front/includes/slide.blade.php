{{-- slider --}}
{{-- <div class="container mb-2">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">

          @foreach ($slide as $key => $row)
          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              <img src="{{ asset('uploads/'. $row->gambar_slide ) }}" style="height:500px" class="d-block w-100" alt="...">
          </div>
          @endforeach

          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>
</div> --}}

<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    @foreach ($slide as $key => $row)
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000">
      <img src="{{ asset('uploads/'. $row->gambar_slide ) }}" style="height:500px" class="d-block w-100 alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $row->judul_slide }}</h5>
        <p>{{ $row->link }}</p>
      </div>
      @endforeach
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


