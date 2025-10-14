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
            <div class="col-lg-6">
                <div class="con_work_img">
                    <div data-parallax='{"x": -10, "y": 10}' class="img_one">
                        <img src="img/home/2.jpg" alt="">
                    </div>
                    <div data-parallax='{"x": -10, "y": -25}' class="img_two">
                        <img src="img/about/chart.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="con_work_content">
                    <div class="section_title">
                        {{-- <h6 class="con_title_top">HOW IT WORKS</h6> --}}
                        <h2 class="con_title">Prislight Sdn Bhd</h2>
                        <div class="line_bottom"></div>
                        <p class="con_p">
                            • Presence in countries across Asia, mainly in Southeast Asia region <br>
                            • 100+ employees which include (Sales, Designer, Operations, R&D) <br>
                            • Key customers: Fashion Brands & Home Improvement <br>
                            • One Stop Retail Solutions & Electronic Components <br>
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
@endsection