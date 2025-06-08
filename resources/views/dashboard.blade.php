<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>extend</title>
    <style>
        <style>
    .hero {
        padding: 80px 0;
        background-color: #fff;
        position: relative;
    }

    .hero .image-wrapper {
        position: relative;
        display: inline-block;
        max-width: 100%;
    }

    .hero .background-box {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 300px;
        height: 300px;
        background-color: #0d6efd;
        z-index: 0;
        border-radius: 8px;
    }

    .hero .image-wrapper img {
        position: relative;
        z-index: 1;
        max-width: 100%;
        height: auto;
    }

    .testimonial-card {
        background-color: #f8f9fa;
        border: none;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .testimonial-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 1rem;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        .hero {
            text-align: center;
            padding: 40px 0;
        }

        .hero .background-box {
            width: 200px;
            height: 200px;
        }

        .carousel-inner {
            width: 100% !important;
            height: auto !important;
        }

        .carousel-inner img {
            width: 100% !important;
            height: auto !important;
        }

        .services .card {
            width: 100% !important;
        }

        .testimonial-card {
            padding: 1rem;
        }
    }
</style>

    </style>
</head>
<body>
    @extends('templete')

    @section('content')
    <section class="hero ">
        <div class="container" style="margin-top: 100px;margin-bottom: 100px;">
            <div class="row align-items-center">
                <!-- Text -->
                <div class="col-md-6">
                    <h1 class="fw-bold">
                        Unleash the True Shine of Your <span style="color:#4DA8DA">BMW.</span>
                    </h1>
                    <p class="text-muted">
                        Discover premium car care and detailing crafted for BMW enthusiasts. Precision, pride, and performance — just like your BMW deserves.
                    </p>
                    <a href="#" class="btn btn-outline-primary me-2">Explore Services →</a>
                    <div class="mt-3">
                        <a href="#" class="me-2">📷</a>
                        <a href="#" class="me-2">📘</a>
                        <a href="#">🐦</a>
                    </div>
                </div>
                <!-- Image -->
                <div class="col-md-6 text-center">
                    <div class="image-wrapper">
                        <div class="background-box"></div>
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="width: 500px;height: 500px;">
                                <div class="carousel-item active" style="width: 100%;height: 100%;">
                                    <img src="{{ asset('image/bmww.png') }}"  class="d-block w-100" alt="..." style="width: 100%;height: 100%;object-fit: contain;">
                                </div>
                                <div class="carousel-item"style="width: 100%;height: 100%;">
                                    <img src="{{ asset('image/motor.png') }}" class="d-block w-100" alt="..." style="width: 100%;height: 100%;object-fit: contain;">
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
<section class="services py-3 bg-light"style="background: linear-gradient(135deg, #004080, #007bff);"   >
    <div class="container text-center justify-content-center">
        <h1 class="mb-4 fw-bold" style="color: white;">Our Services</h1>
        <div class="d-flex flex-wrap justify-content-center">
            <div class="m-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/interior.jpeg') }}" class="card-img-top" style="max-height: 215px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Interior Detailing</h5>
                        <p class="card-text text-muted">Meticulous cleaning of leather, dash, and carpets.</p>
                        <a href="{{ route('service') }}" class="btn btn-outline-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="m-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/wash.jpeg') }}" class="card-img-top" style="max-height: 215px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Car Wash</h5>
                        <p class="card-text text-muted">Deep clean with BMW-safe products and shine protection.</p>
                        <a href="{{ route('service') }}" class="btn btn-outline-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="m-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/ceraiccoat.jpeg')}}" class="card-img-top" style="max-height: 215px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ceramic Coating</h5>
                        <p class="card-text text-muted">Nano-coating for long-lasting protection & mirror shine.</p>
                        <a href="{{ route('service') }}" class="btn btn-outline-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials py-5">
    <div class="container">
        <h1 class="text-center mb-5 fw-bold">What They Said?</h1>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">

                <div class="carousel-item active">
                    <div class="testimonial-card mx-auto" style="max-width: 700px;">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User 1" class="testimonial-avatar">
                        <h5 class="fw-bold">Andi Pratama</h5>
                        <p class="text-muted">CEO, Teknologi Cerdas</p>
                        <p class="fst-italic">"Very professional service. Our project was completed ahead of schedule with outstanding results!"</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-card mx-auto" style="max-width: 700px;">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User 2" class="testimonial-avatar">
                        <h5 class="fw-bold">Siti Marlina</h5>
                        <p class="text-muted">Founder, EcoLiving</p>
                        <p class="fst-italic">"Very communicative and responsive. They really understand the client's needs."</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-card mx-auto" style="max-width: 700px;">
                        <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="User 3" class="testimonial-avatar">
                        <h5 class="fw-bold">Budi Santoso</h5>
                        <p class="text-muted">Manajer Proyek, Solusi Digital</p>
                        <p class="fst-italic">"These testimonials are crafted in a very engaging way and are suitable for any business that wants to look professional."</p>
                    </div>
                </div>

            </div>
            <div class="carousel-indicators mt-4">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>
    </div>
</section>



<!-- Why Choose Us Section -->
<section class="why-choose-us py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4 fw-bold">Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold">BMW Specialists</h5>
                <p class="text-muted">We focus exclusively on BMW models for expert-level care.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold">Certified Products</h5>
                <p class="text-muted">Only using BMW-approved cleaning and protection materials.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="fw-semibold">Satisfaction Guarantee</h5>
                <p class="text-muted">Not happy? We re-detail your car for free.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="cta py-5 text-white" style="background: linear-gradient(135deg, #004080, #007bff);">
    <div class="container text-center">
        <h2 class="mb-3 fw-bold">Drive Clean. Drive Confident.</h2>
        <p class="mb-4">Elevate your BMW experience with our precision detailing — because your car deserves nothing less.</p>
        <a href="{{ route('service') }}" class="btn btn-outline-light btn-lg fw-semibold px-5">Schedule Your Session</a>
    </div>
</section>


    @endsection
</body>
</html>
