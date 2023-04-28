@extends('layouts.master')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Testimonial</p>
            <h1 class="display-5 mb-5">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-1.jpg') }}" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-2.jpg') }}" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-3.jpg') }}" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                    <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                    </div>
                    Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem
                    lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                </div>
                <img class="rounded-circle mb-3" src="{{ asset('landpage/img/testimonial-4.jpg') }}" alt="">
                <h4>Client Name</h4>
                <span>Profession</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@stop
