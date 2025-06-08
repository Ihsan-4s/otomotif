<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('templete')

    @section('content')
    <section class="parts-section bg-white">
        <header>
            <div style="background-image: url('https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_stage_original:16to7?fmt=webp&wid=1504&hei=658'); background-size: cover; background-position: center; padding: 200px 0;">
                <div class="ms-5 mb-5" style="color: white;">
                    <h1>GENUINE BMW PARTS.</h1>
                    <h5 class="fw-light">ENSURING YOUR BMW REMAINS A GENUINE BMW.</h5>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg bg-body-secondary mb-5">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#intro" style="position: relative; padding-bottom: 5px; transition: color 0.3s;">
                                Intro
                                <span style="
                                    position: absolute;
                                    left: 50%;
                                    bottom: 0;
                                    transform: translateX(-50%);
                                    width: 0;
                                    height: 2px;
                                    background-color: #0d6efd;
                                    transition: width 0.3s;
                                    display: block;
                                " class="underline-hover"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#part" style="position: relative; padding-bottom: 5px; transition: color 0.3s;">
                                BMW Parts
                                <span style="
                                    position: absolute;
                                    left: 50%;
                                    bottom: 0;
                                    transform: translateX(-50%);
                                    width: 0;
                                    height: 2px;
                                    background-color: #0d6efd;
                                    transition: width 0.3s;
                                    display: block;
                                " class="underline-hover"></span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <script>
        // JavaScript to simulate the hover effect
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('mouseenter', () => {
                const span = link.querySelector('.underline-hover');
                span.style.width = '60%';
            });
            link.addEventListener('mouseleave', () => {
                const span = link.querySelector('.underline-hover');
                span.style.width = '0';
            });
        });
    </script>

    <div id="intro" class="container text-center mb-5">
        <p class="fw-light">Benefits For You</p>
        <h1 class="fw-light">5 REASONS TO CHOOSE GENUINE BMW PARTS.</h1>
        <div class="d-flex justify-content-center">
            <div>
                <img  style="max-height: 80px; max-width:80px" src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_benefits_original:1to1?fmt=webp&wid=1504&hei=1504" alt="">
                <h3 class="fw-light">Tested BMW Quality.</h3>
            </div>

            <div>
                <img  style="max-height: 80px; max-width:80px" src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_benefits_value:1to1?fmt=webp&wid=1024&hei=1024" alt="">
                <h3 class="fw-light">Attractive value for money.</h3>
            </div>
            <div>
                <img  style="max-height: 80px; max-width:80px" src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_benefits_quality:1to1?fmt=webp&wid=1024&hei=1024" alt="">
                <h3 class="fw-light">Lasting retention of value.</h3>
            </div>
            <div>
                <img  style="max-height: 80px; max-width:80px" src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_benefits_expertise:1to1?fmt=webp&wid=1024&hei=1024" alt="">
                <h3 class="fw-light">First-class BMW expertise.</h3>
            </div>
            <div>
                <img  style="max-height: 80px; max-width:80px" src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_benefits_warranty:1to1?fmt=webp&wid=1024&hei=1024" alt="">
                <h3 class="fw-light">Up to 24-month warranty.</h3>
            </div>
        </div>
    </div>

    <div id="part" class="container py-5 text-center">
    <h2 class="fw-light mb-3">NEW AND TAILORED TO YOUR BMW.</h2>
    <p class="mx-auto mb-5" style="max-width: 800px;">
        In the event of wear or damage to a part, or a faulty part, BMW offers a made-to-measure genuine BMW part for every part from the launch of the original model until a minimum of twelve years after the model range is discontinued. This guarantees the safety and retained value of your BMW.
    </p>

    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-start">
                <img src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_focus-products-battery:3to2?fmt=webp&wid=1504&hei=1003" class="card-img-top" alt="BMW Battery">
                <div class="card-body">
                    <h5 class="card-title">Powerful at all temperatures: genuine BMW batteries.</h5>
                    <p class="card-text">
                        Genuine BMW batteries deliver reliable power, even at extreme temperatures and in tough conditions. Your BMW will therefore start problem-free even in winter and supply optimum energy to all electrical loads.
                    </p>
                    <a href="#" class="card-link text-decoration-none">Find BMW Service Partner &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-start">
                <img src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_focus-products-spark-brakes:3to2?fmt=webp&wid=1504&hei=1003" class="card-img-top" alt="BMW Brake Discs">
                <div class="card-body">
                    <h5 class="card-title">Optimum braking: brake discs and pads.</h5>
                    <p class="card-text">
                        Genuine BMW brake discs and pads are tailored to your BMW, guaranteeing short braking distances and thus enhanced safety. The components have excellent strength and are extremely durable even under extreme loads.
                    </p>
                    <a href="#" class="card-link text-decoration-none">Find BMW Service Partner &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-start">
                <img src="https://bmw.scene7.com/is/image/BMW/bmw_genuine-parts_focus-products-spark-plugs:3to2?fmt=webp&wid=1504&hei=1003" class="card-img-top" alt="BMW Spark Plug">
                <div class="card-body">
                    <h5 class="card-title">Long service life: genuine BMW spark plugs.</h5>
                    <p class="card-text">
                        The quality of spark plugs is a crucial factor for optimum engine power. Genuine BMW spark plugs reliably ignite and burn evenly, protecting your vehicle's catalytic converter and reducing emissions.
                    </p>
                    <a href="#" class="card-link text-decoration-none">Find BMW Service Partner &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    @endsection
</body>
</html>
