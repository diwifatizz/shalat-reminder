<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{  asset ('front/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{  asset ('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset ('front/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset ('front/css/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            @include('front.includes.header')
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Features Start -->
        <div class="container-fluid features mb-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset ('front/img/features-sports-1.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Sports</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset ('front/img/features-technology.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Technology</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset ('front/img/features-fashion.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Fashion</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="row g-4 align-items-center features-item">
                            <div class="col-4">
                                <div class="rounded-circle position-relative">
                                    <div class="overflow-hidden rounded-circle">
                                        <img src="{{ asset ('front/img/features-life-style.jpg') }}" class="img-zoomin img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <span class="rounded-circle border border-2 border-white bg-primary btn-sm-square text-white position-absolute" style="top: 10%; right: -10px;">3</span>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features-content d-flex flex-column">
                                    <p class="text-uppercase mb-2">Life Style</p>
                                    <a href="#" class="h6">
                                        Get the best speak market, news.
                                    </a>
                                    <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i> December 9, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Main Post Section Start -->
        <div class="container-fluid py-5">
           @yield('content')
        </div>
        <!-- Main Post Section End -->


        <!-- Banner Start -->
     
        <!-- Banner End -->


        <!-- Latest News Start -->
        <div class="container-fluid latest-news py-5">

          @include('front.includes.slide')
        
        </div>
        <!-- Latest News End -->


        <!-- Most Populer News Start -->
      
        <!-- Most Populer News End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer py-5">

        @include('front.includes.footer')
      
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md  text-white">
                        <!--/* This template is free as long as you keep the below author’s credit link/attribution link/backlink. */-->
                        <!--/* If you'd like to use the template without the below author’s credit link/attribution link/backlink, */-->
                        <!--/* you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". */-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset ('front/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset ('front/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset ('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset ('front/js/main.js') }}"></script>
    </body>

</html>