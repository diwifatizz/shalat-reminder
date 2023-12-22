<div class="slider">
  @foreach ($slide as $key => $row)
    <div class="slide {{ $key == 0 ? 'current' : '' }}">
      <img src="{{ asset('uploads/'. $row->gambar_slide ) }}" alt="">
      <div class="content">
        <h3>{{ $row->judul_slide }}</h3>
        <p>{{ $row->link }}</p>
      </div>
    </div>
  @endforeach
</div>
<div class="buttons">
  <button id="prev"><i class="fas fa-arrow-left"></i></button>
  <button id="next"><i class="fas fa-arrow-right"></i></button>
</div>

<script src="{{ asset('front/js/slide.js') }}"></script>



