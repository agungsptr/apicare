<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Car Rental API</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('vendor/Vesperr/assets/img/favicon.png', true) }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/Vesperr/assets/vendor/bootstrap/css/bootstrap.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('vendor/Vesperr/assets/vendor/icofont/icofont.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('vendor/Vesperr/assets/vendor/remixicon/remixicon.css', true) }}" rel="stylesheet">
    <link href="{{ asset('vendor/Vesperr/assets/vendor/boxicons/css/boxicons.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('vendor/Vesperr/assets/vendor/owl.carousel/assets/owl.carousel.min.css', true) }}" rel="stylesheet">
    <link href="{{ asset('vendor/Vesperr/assets/vendor/venobox/venobox.css', true) }}"  rel="stylesheet">
    <link href="{{ asset('vendor/Vesperr/assets/vendor/aos/aos.css', true) }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('vendor/Vesperr/assets/css/style.css', true) }}" rel="stylesheet">

    <style>
        .kepala-header {
            font-weight: bold;
            font-size: 24pt;
        }

        .http-post {
            font-weight: bold;
            color: #FFC107;
        }

        .http-put {
            font-weight: bold;
            color: #2196F3;
        }

        .http-get {
            font-weight: bold;
            color: #4CAF50;
        }

        .http-delete {
            font-weight: bold;
            color: #F44336;
        }

        .url {
            font-size: 16pt;
        }
    </style>

    <!-- =======================================================
  * Template Name: Vesperr - v2.2.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <div class="row">
                    <a href="{{ url('/') }}"><img src="{{ asset('vendor/Vesperr/assets/img/logo.png', true) }}" alt=""
                            class="img-fluid mr-2"></a>
                    <h1 class="text-light"><a href="{{ url('/') }}"><span>Apicare</span></a></h1>
                </div>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/#about') }}">About</a></li>
                    <li class="drop-down"><a href="{{ url('/#services') }}">Documentation</a>
                        <ul>
                            <li><a href="{{ url('/doc/user') }}">User</a></li>
                            <li><a href="{{ url('/doc/customer') }}">Customer</a></li>
                            <li><a href="{{ url('/doc/car') }}">Car</a></li>
                            <li><a href="{{ url('/doc/rental') }}">Rental</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/#team') }}">Team</a></li>
                    <li><a href="{{ url('/#contact') }}">Contact</a></li>

                    @yield('getstarted')
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>agungsptr</strong>. All Rights Reserved
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/Vesperr/assets/vendor/jquery/jquery.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/jquery.easing/jquery.easing.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/php-email-form/validate.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/waypoints/jquery.waypoints.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/counterup/counterup.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/owl.carousel/owl.carousel.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/isotope-layout/isotope.pkgd.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/venobox/venobox.min.js', true) }}"></script>
    <script src="{{ asset('vendor/Vesperr/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('vendor/Vesperr/assets/js/main.js', true) }}"></script>

    <script>
        function copyFunction() {
            var copyText = document.getElementById("base_url");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Berhasil dicopy");
        }
    </script>
</body>

</html>