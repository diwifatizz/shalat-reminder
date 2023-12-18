<div id="carouselExampleLight" class="carousel carousel-light slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    @foreach ($slide as $key => $row)
      <button type="button" data-bs-target="#carouselExampleLight" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
    @endforeach
  </div>
  <div class="carousel-inner">
    @foreach ($slide as $key => $row)
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000">
        <img src="{{ asset('uploads/'. $row->gambar_slide ) }}" style="height:600px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>{{ $row->judul_slide }}</h5>
          <p>{{ $row->link }}</p>
        </div>
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleLight" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
