@extends('frontend.app')

@section('title')
    Contact Us
@endsection
@section('body')
    <style>
        .card {
            border-radius: 12px;
            overflow: hidden;
            padding-bottom: 17px;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px; /* increase or decrease space between icons */
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            color: #fff;
            font-size: 20px;
            transition: 0.3s ease;
        }

        /* Individual brand colors */
        .social-icon.facebook { background: #1877f2; }
        .social-icon.instagram { background: #e1306c; }
        .social-icon.twitter { background: #1da1f2; }
        .social-icon.youtube { background: #ff0000; }

        .social-icons a:hover {
            transform: scale(1.1);
            opacity: 0.85;
        }
    </style>
    <!-- Start Contact Us -->
    <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="contact-us-form">
                            <h2>Contact With Us</h2>
                            <p>If you have any questions please fell free to contact with us.</p>
                            <!-- Form -->
                            <form class="form" method="post" action="{{route('contactFormData')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont icofont-ui-call"></i>
                            <div class="content">
                                <h3>+8801793843873</h3>
                                <p>adnanislamsompod@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12 ">
                        <div class="single-info">
                            <i class="icofont-google-map"></i>
                            <div class="content">
                                <h3>East West University</h3>
                                <p>Aftabnagar, Dhaka</p>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                    <!-- single-info -->
                    <div class="col-lg-4 col-12">
                        <div class="card text-center shadow-sm">
                            <div class="card-header bg-primary text-white">
                                Follow us
                            </div>
                            <div class="card-body">
                                <div class="social-icons d-flex justify-content-center gap-3">
                                    <a href="#" class="social-icon facebook"><i class="icofont icofont-facebook"></i></a>
                                    <a href="#" class="social-icon instagram"><i class="icofont icofont-instagram"></i></a>
                                    <a href="#" class="social-icon twitter"><i class="icofont icofont-twitter"></i></a>
                                    <a href="#" class="social-icon youtube"><i class="icofont icofont-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/End single-info -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->
@endsection
