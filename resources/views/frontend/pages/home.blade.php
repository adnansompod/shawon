@extends('frontend.app')

@section('title')
    Home
@endsection

@section('body')

<!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image: url('{{ asset('frontend/img/slider1.png') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p>You are in safe hand with us. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('{{ asset('frontend/img/slider2.png') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p>We will take care of your every health related issues. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('{{ asset('frontend/img/slider3.png') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p> We are here for you, don't worry about any health problem. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!--/ End Slider Area -->

<section class="search-section">
    <div class="container">
        <div class="row">
            <div class="cards-wrapper" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; font-family: Arial, sans-serif; margin: 40px 0;">

                <!-- Section 1: Info -->
                <div class="card">
                    <h6>Find Your Care Path </h6>
                    <p>Enter your symptoms below and we’ll suggest the most suitable department for you.</p>
                    <form action="/search" method="GET" class="search-form">
                        <input type="text" name="q" id="searchInput" placeholder="e.g. headache, fever, chest pain">
                        <button type="submit" class="custom-button">
                            <i class="icofont-search"></i>
                        </button>
                    </form>
                </div>

                <!-- Section 2: Button Trigger -->
                <div class="card">
                    <h6>NephroSense</h6>
                    <p>Click below to get assist from AI</p>
                    <a href="{{ route('openrouter.show') }}" class="custom-button">Go to</a>
                </div>

                <!-- Section 3: Button Trigger -->
                <div class="card">
                    <h6>Kidney Vision Desk</h6>
                    <p>Click below to analysis the disease</p>
                    <a href="#" class="custom-button">Go to</a>
                </div>

            </div>
        </div>
    </div>

    <style>
        /* Card Styling */
        .card {
            flex: 1 1 300px; /* min width 300px, grows to fill space */
            background: #f5f7fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.3s ease;
        }

        .card h6 {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Search form styling */
        .search-form {
            display: flex;
            align-items: center;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .search-form input {
            flex: 1;
            padding: 12px 20px;
            border: none;
            outline: none;
            font-size: 14px;
            color: #333;
        }

        .search-form input::placeholder {
            color: #999;
        }

        .search-form button {
            padding: 12px 18px;
            cursor: pointer;
            border: none;
            background: #4CAF50;
            color: #fff;
            border-radius: 0;
            transition: all 0.3s ease;
        }

        .search-form button:hover {
            background: #1A76D1;
        }

        /* Custom buttons */
        .custom-button {
            display: inline-block;
            background: #4CAF50;
            color: #fff;
            padding: 12px 25px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .custom-button:hover {
            background: #1A76D1;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        /* Mobile responsiveness */
        @media (max-width: 992px) {
            .cards-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 100%;
                max-width: 500px;
            }

            .search-form {
                flex-direction: column;
            }

            .search-form input, .search-form button {
                width: 100%;
                border-radius: 50px;
                margin: 5px 0;
            }
        }
    </style>
</section>

<!-- Start Feautes -->
<section class="Feautes section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You & Your Family</h2>
                    <img src="{{asset('frontend/img')}}/section-img.png" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
{{--                        <i class="icofont icofont-ambulance-cross"></i>--}}
                        <a href="{{route('show.emergency')}}"><i class="icofont icofont-ambulance-cross"></i></a>
                    </div>
                    <a href="{{route('show.emergency')}}"><h3>Emergency Help</h3></a>
                </div>
                <!-- End Single features -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <a href="{{route('pharma')}}"><i class="icofont icofont-medical-sign-alt"></i></a>
                    </div>
                    <a href="{{route('pharma')}}"><h3>Enriched Pharmecy</h3></a>
                </div>
                <!-- End Single features -->
            </div>
        </div>
    </div>
</section>
<!--/ End Feautes -->

<!-- Start Fun-facts -->
<div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-home"></i>
                    <div class="content">
                        <span class="counter">3468</span>
                        <p>Hospital Rooms</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-user-alt-3"></i>
                    <div class="content">
                        <span class="counter">557</span>
                        <p>Specialist Doctors</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont-simple-smile"></i>
                    <div class="content">
                        <span class="counter">4379</span>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Fun -->
                <div class="single-fun">
                    <i class="icofont icofont-table"></i>
                    <div class="content">
                        <span class="counter">5</span>
                        <p>Years of Experience</p>
                    </div>
                </div>
                <!-- End Single Fun -->
            </div>
        </div>
    </div>
</div>
<!--/ End Fun-facts -->

<!-- Start Call to action -->
<section class="call-action overlay" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="content">
                    <h2>Do you need Emergency Medical Care? Call +8801793843873</h2>
                    <div class="button mt-5">
                        <a href="{{route('show.contact')}}" class="btn">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call to action -->


<!-- Start service -->
<section class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                    <img src="{{asset('frontend/img')}}/section-img.png" alt="#">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Your Personal Kidney Companion</a></h4>
                    <p>From day one, you are paired with a Bangladesh-based Kidney Care Coordinator a real human who knows your
                        history, your concerns, and your family situation. Someone you can call anytime, who guides you through tests,
                        paperwork, travel, and treatment options.</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">We Help You Find Donors When Hope Runs Low </a></h4>
                    <p>For families struggling to find a donor, we assist through legal and ethical channels only.
                        🔁 Swap-donor programs
                        🕊️ Deceased-donor waiting lists
                        🏛️ Coordination with authorized government transplant bodies in Bangladesh & India

                        Many Bangladeshi patients who were told “impossible” found new hope through proper legal donor pathways.</p>

                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">A Home Away From Home</a></h4>
                    <p>If you’re coming from outside Dhaka or traveling to India for treatment, our Transplant Guest House Partners provide clean, safe, affordable accommodation.
                        🛏️ Comfortable rooms
                        🍱 Renal-friendly meals
                        🕌 Prayer spaces
                        🤝 Support from other patient families
                        🚗 Assistance with travel and hospital navigation

                        It feels like staying with relatives, not at a clinic.</p>

                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">We Handle Insurance, Financial Aid & Medical Papers</a></h4>
                    <p>Whether it’s local insurance, medical loan programs, or cross-border medical paperwork, our team manages;
                        📝 Form filling
                         📞 Follow-ups
                         ✉️ Appeal letters
                        🏢 Coordination with insurance or financial bodies

                        So, you can focus on healing, not paperwork.</p>

                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Transplant Donor Assistance Cell</a></h4>
                    <p>🇧🇩 Bangladesh’s National Kidney Foundation
                         🏥 BSMMU & public transplant programs
                        🇮🇳 NOTTO & Indian state transplant authorities
                        🔁 Legal donor-swap registries

                        Everything is 100% compliant with BD and Indian transplant laws.</p>

                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Financial Counseling Desk</a></h4>
                    <p> 🏥 Shasthyo Suroksha Karmasuchi (SSK)
                        🤲 Social Welfare financial aid
                         🕌 Zakat/charity organizations
                        🌍 International NGO assistance
                        🇮🇳 India-based charity support (for cross-border patients)

                        We will help you find the right support at the right time.</p>

                </div>
                <!-- End Single Service -->
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Transport & Pickup Service</a></h4>
                    <p>✈️ Airport pickups
                         🚆 Railway/bus terminal pickups
                         🌐 Border travel coordination (Benapole, Burimari, Tamabil & more)
                         🚨 Local ambulance support</p>

                </div>
                <!-- End Single Service -->
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">Tele-Medicine & Second Opinion</a></h4>
                    <p>Upload your reports and get expert kidney consultations from Bangladesh and India (BDT 600–1,200).</p>

                </div>
                <!-- End Single Service -->
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="icofont icofont-blood"></i>
                    <h4><a href="service-details.html">24×7 Emergency Kidney Helpline</a></h4>
                    <p>One WhatsApp number — answered within minutes by trained doctors or nurses, even at 3 a.m.</p>

                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<!--/ End service -->

@endsection
