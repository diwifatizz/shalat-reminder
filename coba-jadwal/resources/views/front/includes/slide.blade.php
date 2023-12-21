<style>

body {
  overflow-x: hidden;
}

.slider {
  position: relative;
  overflow: hidden;
  height: 100vh;
  width: 100vw;
  margin-top: -100px;
  white-space: nowrap;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* padding: 1rem 15% 5rem; */
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
  display: inline-block;
  white-space: normal;
}

.slide.current {
  opacity: 1;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.slide .content {
  position: absolute;
  bottom: 50px;
  left: -600px;
  opacity: 0;
  width: 600px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #333;
  padding: 35px;
  
}

.slide .content h1 {
  margin-bottom: 10px;
}

.slide.current .content {
  opacity: 1;
  transform: translateX(600px);
  transition: all 0.7s ease-in-out 0.3s;
}

.buttons button#next {
  position: absolute;
  top: 50%;
  right: 15px;
}

.buttons button#prev {
  position: absolute;
  top: 50%;
  left: 15px;
}

.buttons button {
  border: 2px solid #fff;
  background-color: transparent;
  color: #fff;
  cursor: pointer;
  padding: 13px 15px;
  border-radius: 70%;
  outline: none;
}

.buttons button:hover {
  background-color: #fff;
  color: #333;
}

@media(max-width: 500px) {
  .slide .content {
    bottom: -300px;
    left: 0;
    width: 100%;
  }

  .slide.current .content {
    transform: translateY(-300px);
  }
}


</style>

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



