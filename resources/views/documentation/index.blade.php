@extends('layouts.app')

@section('getstarted')
<li class="get-started"><a href="{{ url('/#about') }}">Get Started</a></li>
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Apicare - API Car Rental</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">This API for Car Rental System</h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="{{ asset('vendor/Vesperr/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4 col-6"></div>
                <div class="col-lg-4 col-md-4 col-6">
                    <img src="{{ asset('vendor/Vesperr/assets/img/clients/ubg.png') }}" class="img-fluid" alt=""
                        data-aos="zoom-in" data-aos-delay="200">
                </div>
                <div class="col-lg-4 col-md-4 col-6"></div>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        Ini adalah Project UAS Web Services yaitu membuat RESTful API dengan tema yang
                        sudah ditentukan. Dalam hal ini saya mendapatkan tema Penyewaan, maka dari itu
                        saya membuat Apicare (API Car Rental) atau API penyewaan mobil.
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Nama : Agung Eka Saputra</li>
                        <li><i class="ri-check-double-line"></i> NIM : 1710520118</li>
                        <li><i class="ri-check-double-line"></i> Semester : 6</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        Apicare ini menyediakan data User (Admin), data Customer (Penyewa), data Car
                        (Mobil), dan data Rental (Penyewaan).
                    </p>
                    <a href="#services" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Documentation</h2>
                <p>Daftar CRUDS yang dapat dilakukan pada Apicare</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-user"></i></div>
                        <h4 class="title"><a href="{{ url('/doc/user') }}">User</a></h4>
                        <p class="description">Menyediakan data User atau admin dari rental mobil</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-group"></i></div>
                        <h4 class="title"><a href="{{ url('/doc/customer') }}">Customer</a></h4>
                        <p class="description">Menyediakan data Customer atau penyewa mobil</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-car"></i></div>
                        <h4 class="title"><a href="{{ url('/doc/car') }}">Car</a></h4>
                        <p class="description">Menyediakan data Car atau mobil</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-book-alt"></i></div>
                        <h4 class="title"><a href="{{ url('/doc/rental') }}">Rental</a></h4>
                        <p class="description">Menyediakan data Rental atau penyewaan</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Tim pembuat Apicare</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('vendor/Vesperr/assets/img/team/1.png') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://twitter.com/_agungsptr" class="twitter"><i
                                        class="icofont-twitter"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Agung Saputra</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('vendor/Vesperr/assets/img/team/2.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://web.facebook.com/people/Agung-Saputra/100010969991694"
                                    class="facebook"><i class="icofont-facebook"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Agung Saputra</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="{{ asset('vendor/Vesperr/assets/img/team/3.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.instagram.com/__agungsptr/" class="instagram"><i
                                        class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Agung Saputra</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('vendor/Vesperr/assets/img/team/4.jpg') }}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="https://www.linkedin.com/in/agung-eke-saputra/" class="linkedin"><i
                                        class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Agung Saputra</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
            </div>

            <div class="row">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-about">
                        <h3>Apicare</h3>
                        <p>Ini adalah Project UAS Web Services yaitu membuat RESTful API dengan tema yang
                            sudah ditentukan. Dalam hal ini saya mendapatkan tema Penyewaan, maka dari itu
                            saya membuat Apicare (API Car Rental) atau API penyewaan mobil.</p>
                        <div class="social-links">
                            <a href="https://twitter.com/_agungsptr" class="twitter"><i class="icofont-twitter"></i></a>
                            <a href="https://web.facebook.com/people/Agung-Saputra/100010969991694" class="facebook"><i
                                    class="icofont-facebook"></i></a>
                            <a href="https://www.instagram.com/__agungsptr/" class="instagram"><i
                                    class="icofont-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/agung-eke-saputra/" class="linkedin"><i
                                    class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="info">
                        <div>
                            <i class="ri-map-pin-line"></i>
                            <p>Jl. Pendidikan B III<br>Mataram, Nusa Tenggara Barat</p>
                        </div>

                        <div>
                            <i class="ri-mail-send-line"></i>
                            <p>agung.eka1999@gmail.com</p>
                        </div>

                        <div>
                            <i class="ri-phone-line"></i>
                            <p>+62 875 7574 4674</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection