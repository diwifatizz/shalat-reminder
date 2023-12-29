<div class="container py-35">
    <div class="row g-5">
        <div class="col-lg-6 col-xl-5">
            <div class="footer-item-2">
                <div class="d-flex flex-column">
                    <h4 class="mb-4 text-white">Tentang Kami</h4>
                    <p class="text-white">ShalatReminder adalah situs unggulan yang menyajikan jadwal sholat terkini untuk seluruh wilayah di Indonesia. Temukan kenyamanan dalam menjalani ibadah sehari-hari dengan informasi waktu sholat yang akurat. Selain itu, nikmati beragam artikel informatif tentang Islam yang menginspirasi.
                         Mulailah hari Anda dengan kebijaksanaan dan koneksi spiritual melalui ShalatReminder</p>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3">
            <div class="d-flex flex-column text-start footer-item-3">
                <h4 class="mb-4 text-white">Kategori</h4>
                @foreach ($category as $cat)
                <a class="btn-link text-white" href="{{ $cat->slug }}"><i class="fas fa-angle-right text-white me-2"></i>{{ $cat->nama_kategori }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6 col-xl-4">
            <div class="footer-item-1">
                <h4 class="mb-8 text-white">Hubungi Kami</h4>
                <p class="text-secondary line-h">Alamat: <a href="https://maps.app.goo.gl/8KqtT5Y7oDhPvHAD7" class="text-white" target="_blank">Jl. HR. Soebrantas No.118, Sidomulyo Bar., Kec. Tampan, Kota Pekanbaru, Riau 28293</a></p>
                <p class="text-secondary line-h">Email: <a href="mailto:garudacyberindo@gmail.com" class="text-white" target="_blank">garudacyberindo@gmail.com</a></p>
                <p class="text-secondary line-h">Phone: <a href="https://api.whatsapp.com/send?phone=628117674727&text=Halo%20Garuda%20Cyber%20Indonesia%2C%20Saya%20mau%20....." class="text-white" target="_blank">(+62) 811-7674-727</a></p>
                <div class="d-flex line-h">
                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href="https://www.instagram.com/garudacyber/?hl=en" target="_blank"><i class="fab fa-instagram text-dark"></i></a>
                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href="https://www.facebook.com/GarudaCyber/" target="_blank"><i class="fab fa-facebook-f text-dark"></i></a>
                    <a class="btn btn-light me-2 btn-md-square rounded-circle" href="https://www.youtube.com/@GarudaCyberIndonesia" target="_blank"><i class="fab fa-youtube text-dark"></i></a>
                    <a class="btn btn-light btn-md-square rounded-circle" href="https://id.linkedin.com/company/garuda-cyber-indonesia" target="_blank"><i class="fab fa-linkedin-in text-dark"></i></a>
                </div> 
            </div>
        </div>
    </div>
</div>