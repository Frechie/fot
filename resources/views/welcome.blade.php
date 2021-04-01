<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Headstone Young People&apos;s Platform">
    <meta name="author" content="HYPP: Festival of Talents">
    <meta name="keywords" content="Talent Show">
    <meta name="keywords" content="FOT">
    <meta name="keywords" content="Come show forth God&apos;s potential in you">
    <meta name="keywords" content="Its FOT Revsmped: The new normal...">
    <title>HYPP Festival of Talents</title>
    <link href="{{asset('assets/admin/img/icon/h_favicon.ico') }}" rel="icon">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main-site-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate/animate.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container animated fadeInDown">
                <a class="navbar-brand" href="{{url('/') }}">Home</a>
                <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item">
                            <a class="nav-link" href="#team">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Judges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="slider" class="carousel slide" data-bs-ride="carousel" style="margin-top: 9px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/admin/img/slide-3.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">FOT Winners</h1>
                            <p class="animated fadeInUp"> </p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="">REGISTER</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/admin/img/slide-3.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">FOT AUDITION</h1>
                            <p class="animated fadeInUp"></p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="">REGISTER</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/admin/img/slide-3.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">FOT</h1>
                            <p class="animated fadeInUp"></p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="">REGISTER</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/admin/img/slide-3.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">FOT</h1>
                            <p class="animated fadeInUp">.</p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">REGISTER</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section id="team" class="team" style="margin-top: 5px;">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Meet the Panel</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Alfred Ifogbe</h4>
                                <span>Software Engineer &amp; Technology Consultant</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""> <i class="icofont-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('assets/admin/img/slide-3.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Odufuwa Tayo</h4>
                                <span>Data Anayst &amp; Tecnology Enthiusat</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""> <i class="icofont-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Yemisi Nyaaku</h4>
                                <span>Creative Graphics Specialist</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""> <i class="icofont-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Folasade Ademola </h4>
                                <span>Security Expert &amp; Technology Consultant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""> <i class="icofont-linkedin"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer" style="margin-top: 5px;">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>Headstone Young People&apos;s Platform</h3>
                                <p>
                                    30A Coker Road <br>
                                    Ilupeju, Lagos<br><br>
                                    <strong>Phone:</strong> +234 814 026 3326<br>
                                    <strong>Email:</strong> fot@thehypp.com.ng<br>
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li> <a href="">Home</a></li>
                                <li> <a href="">About us</a></li>
                                <li> <a href="">Services</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Services</h4>
                            <ul>
                                <li> <a href="">Young Acheiver&apos;s Summit</a></li>
                                <li> <a href="">Knowledge &amp; Information Sharing Session </a></li>
                                <li> <a href="">Praise Party</a></li>
                                <li> <a href="{{ url('/')}}"> Festival of Talents</a></li>
                                <li> <a href="">Club 30A</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    Copyright &copy; {{date('Y') }} <strong class="text-white"><span><a class="text-white" href="{{url('/')}}">HYPP: Festival of Talents</a></span></strong>. All Rights Reserved <br>
                    <small>The information contained herein may not be published, broadcast, rewritten, or redistributed
                        without the prior written authority of <strong><span><a class="text-white" href="https://thehypp.com.ng}">HYPP.</a></span></strong></small>
                </div>
            </div>
        </footer>
        <script src="{{ asset('assets/admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>