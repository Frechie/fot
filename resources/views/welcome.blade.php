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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container animated fadeInDown">
                <a class="navbar-brand" href="{{url('/') }}">HYPP-FOT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-md-0">


                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">LOGIN</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/fot.jpg') }}" class="img-fluid w-90 h-90" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">Freitech Solutions</h1>
                            <p class="animated fadeInUp">
                                Whatever your technology needs are, you have come to the right place.
                                Look no furthetr as we promise to keep our word: Proffering technological solutions...
                                We are only a call away...
                            </p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More</a></p>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/fot.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">Data Analytics and Visualization</h1>
                            <p class="animated fadeInUp">Some representative placeholder content for the second slide of the carousel.</p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More...</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/fot.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">Creative Graphics Design</h1>
                            <p class="animated fadeInUp"> Some representative placeholder content for the third slide of this carousel.</p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More....</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/fot.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    <div class="dark-overlay"></div>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInDown">Technology and Business Consultanting</h1>
                            <p class="animated fadeInUp">Some representative placeholder content for the third slide of this carousel.</p>
                            <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More...</a></p>
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
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-info">
                                <h3>Festival of Talents</h3>
                                <p>
                                    30A Coker Road <br>
                                    Ilupeju, Lagos<br><br>
                                    <strong>Phone:</strong> +234 703 057 3953<br>
                                    <strong>Email:</strong> enquiries@freitech-solutions.com<br>
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
                            <h4>Useful Links</h4>
                            <ul>
                                <li> <a href="#">Home</a></li>
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Services</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Services</h4>
                            <ul>
                                <li> <a href="">Web Design &amp; Development</a></li>
                                <li> <a href="">Data Analytics &amp; Visualization </a></li>
                                <li> <a href="">Enterprise Apps Customization &amp; Integration</a></li>
                                <li> <a href=""> Creative Graphics Design</a></li>
                                <li> <a href="">Training &amp; Consultation</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    Copyright &copy; {{date('Y') }} <strong class="text-white"><span><a class="text-white" href="{{url('/')}}">Freitech Solutions</a></span></strong>. All Rights Reserved <br>
                    <small>The information contained herein may not be published, broadcast, rewritten, or redistributed
                        without the prior written authority of <strong><span><a class="text-white" href="{{url('/')}}">Freitech Solutions.</a></span></strong></small>
                </div>
            </div>
        </footer>
        <script src="{{ asset('assets/admin/js/bootstrap/bootstrap.js') }}"></script>
</body>

</html>