<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-6 col-xl-3">
            <div class="footer-item-1">
                <h4 class="mb-4 text-white">Get In Touch</h4>
                <p class="text-secondary line-h">Address: <span class="text-white">Jl. HR. Soebrantas No.118, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28293</span></p>
                <p class="text-secondary line-h">Email: <span class="text-white">garudacyberindo@gmail.com</span></p>
                <p class="text-secondary line-h">Phone: <span class="text-white">(+62) 811-7674-727</span></p>
                <div class="d-flex line-h">
                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter text-dark"></i></a>
                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f text-dark"></i></a>
                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube text-dark"></i></a>
                    <a class="btn btn-light btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in text-dark"></i></a>
                </div>
            </div>
        </div>
        
        {{-- <div class="col-lg-6 col-xl-3">
            <div class="d-flex flex-column mb-4">
                <h4 class="mb-4 text-white">Recent Posts</h4>
                <a href="#"></a>
                @php $count = 0; @endphp
                @forelse ($artikel->sortByDesc('created_at') as $row)
                    @if ($count < 2)
                        <div class="d-flex align-items-center" style="height: 80px;">
                            <a href="#">
                                <div class="rounded-circle border border-2 border-primary overflow-hidden" style="width: 50px; height: 50px;">
                                    <img src="{{ asset('uploads/'. $row->gambar_artikel) }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                </div>
                            </a>
                            <div class="d-flex flex-column ps-4">
                                <a href="#">
                                    <p class="text-uppercase text-white mb-0">{{ $row->kategori->nama_kategori }}</p>
                                </a>
                                <a href="{{ route('detail-artikel', $row->slug) }}" class="h6 text-white">
                                    {{ $row->judul }}
                                </a>
                                <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> {{ $row->created_at->format('M j, Y') }}</small>
                            </div>
                        </div>
                        @php $count++; @endphp
                    @else
                        @break
                    @endif
                @empty
                    <p>Tidak ada Artikel</p>
                @endforelse
            </div>
        </div> --}}
        
        
        <div class="col-lg-6 col-xl-3">
            <div class="d-flex flex-column text-start footer-item-3">
                <h4 class="mb-4 text-white">Categories</h4>
                @foreach ($category as $cat)
                    <a class="btn-link text-white" href="{{ $cat->slug }}"><i class="fas fa-angle-right text-white me-2"></i>{{ $cat->nama_kategori }}</a>
                @endforeach
            </div>
        </div>
        
        <div class="col-lg-6 col-xl-3">
            <div class="footer-item-4">
                <h4 class="mb-4 text-white">Our Gallery</h4>
                <div class="row g-2">
                    <div class="col-4">
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('front/img/footer-1.jpg') }}" class="img-zoomin img-fluid rounded w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
