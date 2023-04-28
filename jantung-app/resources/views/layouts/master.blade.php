<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ADH | Heart Disease</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landpage/img/adh_logo.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landpage/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landpage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landpage/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landpage/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        .logo {
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;
        }
    </style>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            {{-- <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</small>
            <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>9.00 am - 9.00 pm</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small><i class="fa fa-envelope text-primary me-2"></i>info@example.com</small>
            <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</small>
        </div> --}}
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-5">
                <img class="img-fluid rounded logo" src="{{ asset('landpage/img/adh_logo.jpg') }}" alt="">

            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ setActive('/') }}">Beranda</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ setActive('about') }}">Tentang Kami</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link {{ setActive('service') }}">Fitur</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ setActive('contact') }}">Layanan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ setActive('detect') }}" data-bs-toggle="dropdown">Masuk</a>
                        <div class="dropdown-menu border-light m-0">

                            {{-- ketika keluar hanya ada masuk dan daftar --}}
                            <a href="{{ route('detect') }}" class="dropdown-item">Masuk</a>
                            <a href="{{ route('detect') }}" class="dropdown-item">Daftar</a>

                            {{-- ketika masuk hanya ada keluar --}}
                            {{-- <a href="{{ route('team') }}" class="dropdown-item">Keluar</a> --}}
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-discord text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-github text-primary"></small>
                    </a>
                    <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                        <small class="fab fa-instagram text-primary"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">ADH | Heart Disease</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Semarang 5, Lowokwaru, INA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 823-2826-6308</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>adh.disease@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-github"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-discord"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Fitur</h4>
                    <a class="btn btn-link" href="">K-means</a>
                    <a class="btn btn-link" href="">Naive Bayes</a>
                    <a class="btn btn-link" href="">Rekomendasi Obat</a>
                    <a class="btn btn-link" href="">Saran Ahli</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Menu</h4>
                    <a class="btn btn-link" href="">Beranda</a>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Fitur</a>
                    <a class="btn btn-link" href="">Layanan</a>
                    <a class="btn btn-link" href="">Masuk</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Subscription</h4>
                    <p>Langganan untuk mendapatkan informasi secara lanjut.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="you@gmail.com">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Masuk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">ADH | Heart Disease</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By ADH | Heart Disease
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/53d82b54ee.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landpage/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landpage/js/main.js') }}"></script>
</body>

</html>
