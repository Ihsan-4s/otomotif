<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{ asset('image/logo.svg') }}" alt="" style="max-width: 60px; max-height:60px;"  ></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-2" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('models') }}">Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('part') }}">Parts</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

    <footer class="bg-dark text-light pt-5 pb-4">
    <div class="container text-md-left">
        <div class="row">
            <!-- Kolom 1: Brand dan Deskripsi -->
            <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                <h5 class="text-uppercase fw-bold mb-4">MyCompany</h5>
                <p>We give the best digital solution for your business. Inovation, Quality, and service is our priority.</p>
            </div>
            <!-- Kolom 2: Link Navigasi -->
            <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Navigation</h6>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="/about" class="text-light text-decoration-none">About Us</a></li>
                    <li><a href="/services" class="text-light text-decoration-none">Service's</a></li>
                    <li><a href="/contact" class="text-light text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <!-- Kolom 3: Kontak -->
            <div class="col-md-5 col-lg-5 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                <p><i class="bi bi-geo-alt-fill me-2"></i> Jl. Teknologi No.1, Jakarta</p>
                <p><i class="bi bi-envelope-fill me-2"></i> info@mycompany.com</p>
                <p><i class="bi bi-phone-fill me-2"></i> +62 812 3456 7890</p>
            </div>
        </div>

        <hr class="my-4">
        <!-- Bagian bawah -->
        <div class="row">
            <div class="col-md-8">
                <p class="mb-0">© 2025 MyCompany. All rights reserved.</p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>
