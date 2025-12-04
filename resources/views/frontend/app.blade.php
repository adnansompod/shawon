<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>
        @yield('title')
    </title>

    <!-- Favicon -->
    {{-- <link rel="icon" href="{{asset('frontend/img')}}/favicon.png"> --}}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/font-awesome.min.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/magnific-popup.css">


    <!-- Medipro CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css')}}/normalize.css">
    <link rel="stylesheet" href="{{asset('frontend/css')}}/style.css">
    <link rel="stylesheet" href="{{asset('frontend/css')}}/responsive.css">

</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>
<!-- End Preloader -->



<!-- Header Area -->
<header class="header" >
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="{{route('show.home')}}"><img src="{{asset('frontend/img')}}/logo.png" alt="#"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li><a href="{{route('show.home')}}">Home</a></li>
                                    <li><a href="{{route('show.doctor')}}">Doctos </a></li>
                                    <li><a href="{{route('show.hospital')}}">Hospitals </a></li>
                                    <li><a href="{{route('show.agentAppointment')}}">Agent Appointment </a></li>
                                    <li><a href="{{route('show.contact')}}">Contact</a></li>
                                    <li><a href="{{route('show.about')}}">About Us</a></li>
{{--                                    <li><a href="{{route('openrouter.show')}}">AI Assistant</a></li>--}}
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->

@yield('body')

<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-footer">
                        <h2>About Us</h2>
                        <p>We are dedicated to providing compassionate, high-quality healthcare with a focus on patient safety and well-being. Our team of skilled professionals uses advanced technology and personalized care to ensure the best possible outcomes for every patient.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-footer float-right">
                        <h2>Important Links</h2>
                        <li style="color: white"><a href="{{route('show.home')}}">Home</a></li>
                        <li style="color: white"><a href="{{route('show.doctor')}}">Doctos </a></li>
                        <li style="color: white"><a href="{{route('show.hospital')}}">Hospitals </a></li>
                        <li style="color: white"><a href="{{route('show.agentAppointment')}}">Agent Appointment </a></li>
                        <li style="color: white"><a href="{{route('show.contact')}}">Contact</a></li>
                        <li style="color: white"><a href="{{route('show.about')}}">About Us</a></li>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4col-12">
                    <div class="single-footer float-right">
                        <h2>Design & Development</h2>
                        <p><strong>Adnan Islam Sompod</strong></p>
                        <p><strong>Suraiya Chowdhury</strong></p>
                        <p><strong>Maisha Rahman</strong></p>
                        <p><strong>Swarna Rani Dey</strong></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2025 | All Rights Reserved by Adnan Sompod</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/8801793843873" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp whatsapp-icon"></i>
    <span class="whatsapp-text">Any Query?</span>
</a>




<!-- jquery Min JS -->
<script src="{{asset('frontend/js')}}/jquery.min.js"></script>
<!-- jquery Migrate JS -->
<script src="{{asset('frontend/js')}}/jquery-migrate-3.0.0.js"></script>
<!-- jquery Ui JS -->
<script src="{{asset('frontend/js')}}/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="{{asset('frontend/js')}}/easing.js"></script>
<!-- Color JS -->
<script src="{{asset('frontend/js')}}/colors.js"></script>
<!-- Popper JS -->
<script src="{{asset('frontend/js')}}/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="{{asset('frontend/js')}}/bootstrap-datepicker.js"></script>
<!-- Jquery Nav JS -->
<script src="{{asset('frontend/js')}}/jquery.nav.js"></script>
<!-- Slicknav JS -->
<script src="{{asset('frontend/js')}}/slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="{{asset('frontend/js')}}/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="{{asset('frontend/js')}}/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="{{asset('frontend/js')}}/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('frontend/js')}}/owl-carousel.js"></script>
<!-- counterup JS -->
<script src="{{asset('frontend/js')}}/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="{{asset('frontend/js')}}/steller.js"></script>
<!-- Wow JS -->
<script src="{{asset('frontend/js')}}/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('frontend/js')}}/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/js')}}/bootstrap.min.js"></script>

<!-- Main JS -->
<script src="{{asset('frontend/js')}}/main.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    toastr.options = {
        "closeButton": true,            // Show close (X) button
        "progressBar": true,            // Show progress bar
        "timeOut": 3000,                 // Auto close after 3 seconds
        "extendedTimeOut": 1000,         // Extra time after mouse hover
        "positionClass": "toast-top-right", // Position
    };

    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
    toastr.error("{{ session('error') }}");
    @endif

    @if(session('warning'))
    toastr.warning("{{ session('warning') }}");
    @endif

    @if(session('info'))
    toastr.info("{{ session('info') }}");
    @endif
</script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": 4000,
        "extendedTimeOut": 1000,
        "positionClass": "toast-top-right",
    };

    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
</script>

<style>
    .toast-success {
        background-color: #28a745 !important; /* Green */
        color: #fff !important;
    }

    .toast-error {
        background-color: #dc3545 !important; /* Red */
        color: #fff !important;
    }

    .toast-info {
        background-color: #17a2b8 !important;
        color: #fff !important;
    }

    .toast-warning {
        background-color: #ffc107 !important;
        color: #000 !important;
    }
</style>
</body>
</html>
