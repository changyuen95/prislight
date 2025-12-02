@extends('layouts.master')

@section('title', 'About Us')

@section('content')
<section class="banner_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/aboutusbanner.jpg) no-repeat;"></div>
    <div class="container">
        <div class="breadcrumb_content">
            <h2>About Us</h2>
            <ol class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li>About</li>
            </ol>
        </div>
    </div>
</section>
<section class="con_work_process_area sec_gap">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-6">
                <div class="con_work_img">
                    <div data-parallax='{"x": -10, "y": 10}' class="img_one">
                        <img src="img/home/2.jpg" alt="">
                    </div>
                    <div data-parallax='{"x": -10, "y": -25}' class="img_two">
                        <img src="img/about/about.jpg" alt="">
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-12 d-flex align-items-center text-center">
                <div class="con_work_content">
                    <div class="section_title text-center">
                        {{-- <h6 class="con_title_top">HOW IT WORKS</h6> --}}
                        <h2 class="con_title">Prislight Sdn Bhd</h2>
                        <div class="line_bottom"></div>
                        <p class="con_p">
                            Presence in countries across Asia, mainly in Southeast Asia region <br>
                            Headquartered in Singapore and operating across various countries in the region<br>
                            100+ employees which include (Sales, Designer, Operations, R&D) <br>
                            Key customers: Fashion Brands & Home Improvement <br>
                            One Stop Retail Solutions & Electronic Components <br>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 wow fadeInUp">
                            <div class="media con_features_item">
                                <div class="media_icon">
                                    <img src="img/home-1/icon1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h3>BEST QUALITY</h3>
                                    <p>Store concept design</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="media con_features_item">
                                <div class="media_icon">
                                    <img src="img/home-1/icon2.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h3>MODERN TOOLS</h3>
                                    <p>Layout drawing & 3D simulation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="media con_features_item">
                                <div class="media_icon">
                                    <img src="img/home-1/icon3.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h3>TOP RATED</h3>
                                    <p>Electricity consumption optimization</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="media con_features_item">
                                <div class="media_icon">
                                    <img src="img/home-1/icon4.png" alt="">
                                </div>
                                <div class="media-body">
                                    <h3>BEST QUALITY</h3>
                                    <p>Site installation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= About Overview ================= -->
<section class="about_overview sec_gap bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="img/prislightlogo.jpg"  alt="Prislight Company" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <div class="section_title">
                    <h2 class="con_title">Who We Are</h2>
                    <div class="line_bottom"></div>
                    <p class="con_p">
                        Founded in Malaysia, Prislight Sdn Bhd is a leading provider of 
                        retail solutions, lighting systems, and electronic components.  
                        With a strong presence across Asia, our company has grown steadily through 
                        innovation, professionalism, and customer-first philosophy.
                    </p>
                    <p class="con_p">
                        Our team combines creative design, precise engineering, and modern technology 
                        to deliver end-to-end retail concepts — from store layout planning to 
                        turnkey installation and after-sales support.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= Vision & Mission ================= -->
<section class="vision_mission_area sec_gap ">
    <div class="container">
        <div class="section_title text-center mb-5">
            <h2 class="con_title">Vision & Mission</h2>
            <div class="line_bottom mx-auto"></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="vision_box p-4 bg-white rounded shadow-sm">
                    <h3 class="mb-3 text-uppercase text-warning">Our Vision</h3>
                    <p class="con_p mb-0">
                        To become the most trusted and innovative retail solutions provider in Asia, 
                        empowering brands to create memorable customer experiences through smart technology and design.
                    </p>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="mission_box p-4 bg-white rounded shadow-sm">
                    <h3 class="mb-3 text-uppercase text-warning">Our Mission</h3>
                    <ul class="list-unstyled con_p">
                        <li>• Deliver high-quality retail and lighting systems that inspire trust.</li>
                        <li>• Embrace technology to improve efficiency and sustainability.</li>
                        <li>• Build long-term partnerships through integrity and service excellence.</li>
                        <li>• Foster a collaborative, growth-oriented work environment.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= Why Choose Us ================= -->
<section class="why_choose_us sec_gap">
    <div class="container">
        <div class="section_title text-center mb-5">
            <h2 class="con_title">Why Choose Prislight</h2>
            <div class="line_bottom mx-auto"></div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <img src="img/icons/experience.png" alt="" class="mb-3" style="width:50px;">
                    <h5 class="mb-2">10+ Years Experience</h5>
                    <p class="con_p mb-0">Trusted by leading regional brands across Asia.</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <img src="img/icons/innovation.png" alt="" class="mb-3" style="width:50px;">
                    <h5 class="mb-2">Innovative Design</h5>
                    <p class="con_p mb-0">Creative and functional retail concepts tailored to your brand.</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <img src="img/icons/support.png" alt="" class="mb-3" style="width:50px;">
                    <h5 class="mb-2">Professional Support</h5>
                    <p class="con_p mb-0">Dedicated team offering design, project, and after-sales services.</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="p-4 border rounded shadow-sm h-100">
                    <img src="img/icons/quality.png" alt="" class="mb-3" style="width:50px;">
                    <h5 class="mb-2">Quality Assurance</h5>
                    <p class="con_p mb-0">We adhere to international quality and safety standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection