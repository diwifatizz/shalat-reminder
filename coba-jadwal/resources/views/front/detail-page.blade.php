@extends('front.layouts.frontend')

@section('content')
<div class="container-fluid populer-news py-5">
    <div class="container py-5">
        <div class="tab-class mb-4">
            <div class="mt-5 lifestyle">
                <div class="border-bottom mb-4">
                    <h1 class="mb-4">Life Style</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="lifestyle-item rounded">
                            <img src="{{ asset('front/img/lifestyle-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="lifestyle-content">
                            <div class="mt-auto">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                    <div class="d-flex justify-content-between mt-4">
                                        <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                        <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lifestyle-item rounded">
                            <img src="{{ asset('front/img/lifestyle-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="lifestyle-content">
                            <div class="mt-auto">
                                    <a href="#" class="h4 text-white link-hover">There are many variations of passages of Lorem Ipsum available,</a>
                                    <div class="d-flex justify-content-between mt-4">
                                        <a href="#" class="small text-white link-hover">By Willium Smith</a>
                                        <small class="text-white d-block"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection