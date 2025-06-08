<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    @extends('templete')

@section('content')
<section class="services bg-light">
    <header>
        <div style="background-image: url('{{ asset('image/bmw-service.jpg') }}'); background-size: cover; background-position: center; padding: 200px 0;">
            <div class="ms-5 mb-5" style="color: white;">
                <h1>"Neither Age nor Beauty <br> Counts, Only BMW"</h1>
                <h5>Original BMW Service. Every Model. Every Age. Everyone <br> is Welcome</h5>
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
                    <a class="nav-link" href="#overview" style="position: relative; padding-bottom: 5px; transition: color 0.3s;">
                        BMW Service Overview
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
                    <a class="nav-link" href="#Premium" style="position: relative; padding-bottom: 5px; transition: color 0.3s;">
                        BMW Premium Service
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


    <section id="overview" class="my-5">
        <div class="d-flex justify-content-center">
            <div class="d-flex" style="max-width: 800px;">
                <!-- Vertical Line -->
                <div style="position: relative; width: 20px;">
                    <div style="width: 15px; height: 80px; background-color: #c0c0c0; position: absolute; top: 50px; left: 0;"></div>
                    <div style="width: 2px; background-color: #ccc; height: 100%; position: absolute; top: 0; left: 10px;"></div>
                </div>
                <!-- Content -->
                <div style="padding-left: 20px;">
                    <h1 class="fw-bold" style="line-height: 1.3;">STRONG ARGUMENTS<br>FOR BMW SERVICE.</h1>
                    <ul class="mt-4" style="list-style: none; padding: 0;">
                        <li class="d-flex align-items-center border-bottom py-2">
                            <span class="fw-bold" style="width: 50px; color: #888;">01</span> Best value for money
                        </li>
                        <li class="d-flex align-items-center border-bottom py-2">
                            <span class="fw-bold" style="width: 50px; color: #888;">02</span> Usage of only Original BMW Parts
                        </li>
                        <li class="d-flex align-items-center border-bottom py-2">
                            <span class="fw-bold" style="width: 50px; color: #888;">03</span> Service specialists with BMW Expertise
                        </li>
                        <li class="d-flex align-items-center border-bottom py-2">
                            <span class="fw-bold" style="width: 50px; color: #888;">04</span> Transparent and attractive all-inclusive prices
                        </li>
                        <li class="d-flex align-items-center border-bottom py-2">
                            <span class="fw-bold" style="width: 50px; color: #888;">05</span> Every BMW is welcome
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="my-5">
            <div class="text-center mx-5">
                <h1 class="fw-light">"MY BMW DOESN'T HAVE TO BE NEW. JUST ALWAYS IN THE BEST HANDS."</h1>
                <h3 class="fw-light">Discover our service offers: BMW Service Inclusive, BMW Value Service, Check & Maintenance, Repair & Care and BMW Extended Warranty.</h3>
            </div>
            <div class="row mx-5">
                <div class="col-md-6">
                    <p>In order to provide you with the perfect service solution, your BMW Partner has two different offers to choose from: the long-term service package BMW Service Inclusive and BMW Value Service with attractive all-inclusive prices for individually bookable services. Whether vehicle check, maintenance, repair or</p>
                </div>
                <div class="col-md-6">
                    <p>care: your BMW gets exactly the service it needs from our service specialists. For all those who like to travel without worries there is the BMW Extended Warranty: Cover yourself against unexpected repair costs for a period of up to 5 years from first registration date.</p>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <!-- Tab Menu -->
            <ul class="nav nav-tabs mb-4" id="bmwTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="inclusive-tab" data-bs-toggle="tab" data-bs-target="#inclusive" type="button" role="tab">BMW Service Inclusive</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value" type="button" role="tab">BMW Value Service</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="check-tab" data-bs-toggle="tab" data-bs-target="#check" type="button" role="tab">Check and Maintenance</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="repair-tab" data-bs-toggle="tab" data-bs-target="#repair" type="button" role="tab">Repair and Care</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="bmwTabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="inclusive" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('image/service-inclusive.png')}}" class="img-fluid" alt="BMW Inclusive">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-light">BMW Service Inclusive</h4>
                            <p>With BMW Service Inclusive, you have acquired the vehicle-related right to have the maintenance and wear-and-tear repair work on the vehicle performed within 5 years for 60.000 km by the selling dealer or any participating BMW Service authorized workshop. Entitlement to the services is transferred to the next owner if the vehicle is sold during the term of your contract.</p>
                        </div>
                    </div>
                </div>
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="value" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('image/value-service.png')}}" class="img-fluid" alt="BMW Value">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-light">BMW Value Service</h4>
                            <p>There are many things in life you can’t predict. Therefore, it’s even better when some things are clear and transparent right from the start. So that you and your BMW don’t encounter any unexpected surprises, we offer BMW Value Service for our individually bookable services, such as an oil change. With our Value Service you are always on the safe side. There are no unexpected additional costs, because an attractive all-inclusive price covers both parts and labour. But it’s not only full transparency you can rely on – there’s also the perfect service quality of your BMW Partner.</p>
                        </div>
                    </div>
                </div>
                <!-- Tab 3 -->
                <div class="tab-pane fade" id="check" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('image/check-maint.png')}}" class="img-fluid" alt="Check Maintenance">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-light">Check and Maintenance</h4>
                            <p>Whether your BMW needs a special check, a service or a legally prescribed vehicle inspection – our experienced BMW service specialists know your vehicle best and always offer you a proficient service. With innovative diagnostic and programming technologies, BMW Service ensures that your BMW always remains in peak condition – for maximum driving pleasure.</p>
                        </div>
                    </div>
                </div>
                <!-- Tab 4 -->
                <div class="tab-pane fade" id="repair" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('image/repair.png')}}" class="img-fluid" alt="Repair Care">
                        </div>
                        <div class="col-md-6">
                            <h4 class="fw-light">Repair and Care</h4>
                            <p>Some special memories we like to cherish – while others we prefer not to. With your BMW as a constant companion, you can collect a whole host of these memories. There are some adventures that you might prefer to reverse though. With Original BMW Repairs and Services you can permanently cherish the pleasant moments – even if your vehicle has been occasionally confused with a sketch pad. Our specialists share your standards of quality, aesthetics and safety and make sure that you don’t have to part with these unique moments – even if they have been imprinted on the paintwork.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


    <section id="Premium" class="services py-5 bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-5 text-dark">Our Premium Services</h2>
            <p class="text-muted fs-5">Exclusively crafted for BMW owners who demand uncompromised care and quality.</p>
        </div>

        <!-- Service Grid -->
        <div class="row g-4">
            @php
                $services = [
                    [
                        'icon' => 'bi-car-front',
                        'title' => 'Exterior Detailing',
                        'desc' => 'Polishing, waxing, and paint correction to restore your BMW’s flawless finish.'
                    ],
                    [
                        'icon' => 'bi-speedometer2',
                        'title' => 'Interior Cleaning',
                        'desc' => 'Deep vacuuming, dashboard polish, and leather care for a pristine cabin.'
                    ],
                    [
                        'icon' => 'bi-shield-check',
                        'title' => 'Paint Protection',
                        'desc' => 'High-end ceramic coating for lasting defense and unmatched shine.'
                    ],
                    [
                        'icon' => 'bi-gear-wide-connected',
                        'title' => 'Engine Bay Cleaning',
                        'desc' => 'Professional cleaning for improved look, hygiene, and maintenance access.'
                    ],
                    [
                        'icon' => 'bi-circle-square',
                        'title' => 'Wheel & Tire Care',
                        'desc' => 'Wheel polishing, tire dressing, and brake dust removal for road-ready style.'
                    ],
                    [
                        'icon' => 'bi-sliders2',
                        'title' => 'Custom Detailing',
                        'desc' => 'Tailor-made detailing based on your car’s condition and your lifestyle.'
                    ]
                ];
            @endphp

            @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-lg rounded-4">
                    <div class="card-body text-center px-4 py-5">
                        <i class="bi {{ $service['icon'] }} display-4 text-primary mb-4"></i>
                        <h5 class="fw-bold">{{ $service['title'] }}</h5>
                        <p class="text-muted">{{ $service['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center mt-5">
            <a href="{{ url('booking') }}" class="btn btn-primary btn-lg px-5 py-2 rounded-pill shadow-sm">
                Book a Service
            </a>
        </div>
    </div>
</section>
</section>
@endsection

</body>
</html>
