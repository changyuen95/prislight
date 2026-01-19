@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section class="con_slider_area">
    <div class="main_slider main_slider_one">
        <div class="slider_item">
            <div class="overlay_bg" style="background: url(img/home/banner.PNG) no-repeat;"></div>
            <div class="container">
                <div class="slider_text text-center">
                    <h5 data-animation="fadeInUp" data-delay="0.3s">WELCOME TO PRISLIGHT SDN BHD</h5>
                    <h1 data-animation="fadeInUp" data-delay="0.5s">One Stop Retail Solutions</h1>
                    <p data-animation="fadeInUp" data-delay="0.9s">Presence in countries across Asia, mainly in Southeast Asia region </p>
                        {{-- <br> 100+ employees which include <br>Sales, Designer, Operations, R&D --}}
                    {{-- <a href="#" class="con_btn slider_btn_one btn_effect" data-animation="fadeInLeft" data-delay="1.1s">Learn More</a>
                    <a href="#" class="con_btn slider_btn_two btn_effect" data-animation="fadeInRight" data-delay="1.1s">Contact Us</a> --}}
                      <a href="/aboutus" class="con_btn slider_btn_one btn_effect" data-animation="fadeInLeft" data-delay="1.1s">Learn More</a>
                    <a href="/contactus" class="con_btn slider_btn_two btn_effect" data-animation="fadeInRight" data-delay="1.1s">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="slider_item">
            <div class="overlay_bg" style="background: url(img/home/banner.PNG) no-repeat;"></div>
            <div class="container">
                <div class="slider_text text-center">
                    <h5 data-animation="fadeInUp" data-delay="0.3s">WELCOME TO PRISLIGHT SDN BHD</h5>
                    <h1 data-animation="fadeInUp" data-delay="0.5s">One Stop Retail Solutions</h1>
                    <p data-animation="fadeInUp" data-delay="0.9s">Presence in countries across Asia, mainly in Southeast Asia region </p>
                        {{-- <br> 100+ employees which include <br>Sales, Designer, Operations, R&D --}}
                    <a href="/portfolio" class="con_btn slider_btn_two btn_effect" data-animation="fadeInRight" data-delay="1.1s">Design</a>


                  
                </div>
            </div>
        </div>
    </div>
    <div class="slider_nav">
        <i class="ti-angle-left left_arrow"></i>
        <i class="ti-angle-right right_arrow"></i>
    </div>
</section>
<section class="con_work_process_area sec_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="con_work_img" style="margin-left: -50px;">
                    <div class="wow fadeInLeft">
                        <div data-parallax='{"x": -10, "y": 10}' class="img_one">
                            <img src="img/home/1.PNG" style="width:385px;height:520px" alt="">
                        </div>
                    </div>
                    <div data-parallax='{"x": -10, "y": -25}' class="img_two wow fadeInLeft">
                        <img class="wow fadeInLeft" data-wow-delay="0.4s" src="img/home/image018.jpg" style="width:540px;height:520px"alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="con_work_content">
                    <div class="section_title">
                        <h6 class="con_title_top">HOW IT WORKS</h6>
                        <h2 class="con_title">Working Process</h2>
                        <div class="line_bottom"></div>
                        {{-- <p class="con_p">Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty horse play blow off pardon you hanky panky. Why I say old chap that is sping lavatory.</p> --}}
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
                                    <i class="fas fa-laptop-code" style="font-size:48px;color:#555555;;"></i>
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
{{-- <section class="con_about_area_two">
    <div class="con_about_top bg_color">
        <img class="overlay_bg" src="img/home/art.png" alt="">
        <div class="container">
            <div class="con_about_content text-center">
                <h6 class="con_title_top wow fadeInUp" data-wow-delay="0.2s">ABOUT US</h6>
                <h2 class="con_title wow fadeInUp" data-wow-delay="0.3s">We Build Everything</h2>
                <div class="line_bottom ml-auto mr-auto wow fadeInUp" data-wow-delay="0.5s"></div>
                <p class="con_p wow fadeInUp" data-wow-delay="0.6s">Celiac microdosing trust fund, offal seitan Cafe 24 keffiyeh banh mi chartreuse thundercats freegan +1 craft beer. Chia shabby chic retro put a bird on it disrupt. Keffiyeh tousled ramps listicle locavore. Dreamcatcher tattooed pickled, 8-bit bicycle rights DIY biodiesel flexitarian asymmetrical gentrify wayfarers. Semiotics dreamcatcher offal mixtape, pinterest microdosing selvage quinoa street art mumblecore flannel four dollar toast brunch.</p>
                <img class="wow fadeInUp" data-wow-delay="0.7s" style="width:962px;height:572px"src="img/home/man.png" alt="">
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="#" class="con_btn btn_effect wow fadeInUp" data-wow-delay="0.2s">LEARN MORE</a>
    </div>
</section> --}}
<section class="con_service_area_two ">
    <div class="container">
        <div class="section_title text-center wow fadeInUp" data-wow-delay="0.4s">
            <h6 class="con_title_top" style="font-size:35px">OUR PRODUCTS</h6>
            {{-- <h2 class="con_title">We Build Everything</h2> --}}
            {{-- <p class="con_p">That ummm I'm telling Why say bleeder smashing lemon squeezy tosser,<br> cheesed off dropped.!</p> --}}
        </div>
        <div class="row service_info_two">
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt=""> --}}
                        <img src="img/home-1/ledscreen.png" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>LED Screen</h4>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt=""> --}}
                        {{-- <img src="img/home/icon2.png" alt=""> --}}
                        <img src="img/home-1/downlight.png" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>Downlight</h4>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt="">
                        <img src="img/home/icon4.png" alt=""> --}}
                        <img src="img/home-1/tracklight.png" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>Tracklight</h4>
                    </a>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="con_service_area_two sec_gap">
    <div class="container">
        <div class="section_title text-center wow fadeInUp" data-wow-delay="0.4s">
            <h6 class="con_title_top">OUR SERVICES</h6>
            <h2 class="con_title">We Build Everything</h2>
            {{-- <p class="con_p">That ummm I'm telling Why say bleeder smashing lemon squeezy tosser,<br> cheesed off dropped.!</p> --}}
        </div>
        <div class="row service_info_two">
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt=""> --}}
                        <img src="img/home-1/designconcept2.PNG" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>Design Concept</h4>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt=""> --}}
                        {{-- <img src="img/home/icon2.png" alt=""> --}}
                        <img src="img/home-1/project_management.PNG" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>Project Management</h4>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt="">
                        <img src="img/home/icon4.png" alt=""> --}}
                        <img src="img/home-1/logistic2.PNG" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>Logistics</h4>
                    </a>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt="">
                        <img src="img/home/icon3.png" alt=""> --}}
                        <img src="img/home-1/installation1.PNG" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>Installation</h4>
                    </a>
                    <p>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="con_service_item text-center wow fadeInUp" data-wow-delay="0.7s">
                    <div class="icon2">
                        {{-- <img class="overlay_bg" src="img/home-1/shap.png" alt="">
                        <img src="img/home/icon3.png" alt=""> --}}
                        <img src="img/home-1/aftersales2.PNG" style="width:225px;height:225px"alt="">
                    </div>
                    <a href="/product">
                        <h4>After Sales Service</h4>
                    </a>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="con_project_area sec_gap">
    <div class="container">
        <div class="project_title d-flex justify-content-between align-items-end">
            <div class="section_title wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="con_title_top">OUR PORTFOLIO</h6>
                <h2 class="con_title c_w">Our Latest Projects</h2>
                <div class="line_bottom mb-0"></div>
            </div>
            <div class="custom_nav wow fadeInUp" data-wow-delay="0.4s">
                <i class="ti-angle-left prev"></i>
                <i class="ti-angle-right next"></i>
            </div>
        </div>
        <div class="con_project_info" id="project_slider">
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/fastretailing.PNG" style="width:470px;height:300px"alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>FAST RETAILING (5+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 100 stores<br>Provided lightings with planning, installation, maintenance services & renovation work</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/h&m.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            {{-- <h4>H&M Group (15+ years)</h4> --}}
                            <h4>Fast Fashion (15+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 100 stores<br>Provided interiors and lightings with planning & installation services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_3.jpg" alt=""> --}}
                    <img src="img/home/nitori.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>NITORI (5+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia and Thailand<br>Provided lightings with planning, adjustment services, LED Display & renovation work</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/muji.PNG" style="width:470px;height:300px" alt="">

                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            {{-- <h4>MUJI (3+ years)</h4> --}}
                            <h4>Fast Fashion (3+ years)</h4>
                        </a>
                        <p>Malaysia & Philippine<br>Provided lightings with planning and adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_3.jpg" alt=""> --}}
                    <img src="img/home/decathlon.PNG" style="width:470px;height:300px" alt="">

                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>Decathlon (3+ years)</h4>
                        </a>
                        <p>Malaysia & Indonesia<br>Provided lightings with planning, installation & adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/coach.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>COACH (10+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 50 stores<br>Provided lightings with planning and adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/katespade.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>Kate Spade (10+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 50 stores<br>Provided lightings with planning and adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/swarovski.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>Swarovski (10+ years)</h4>
                        </a>
                        <p>Malaysia & Indonesia<br>Provided lightings with planning and adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/geox.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>GEOX (10+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia, Thailand, Indonesia<br>Provided lightings with planning and adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/ikea.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>IKEA (15+ years)</h4>
                        </a>
                        <p>Indonesia<br>Provided check-out, gate, interiors and lightings</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/donki.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>DON DON DONKI (3+ years)</h4>
                        </a>
                        <p>Malaysia (5 stores supplied till 2025)<br>Provided lightings and shelving with planning and adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/dyson.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>Accessible Premium Tech (6+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia, Thailand, Indonesia (50+ stores supplied till 2022)<br>Provided lightings with planning and adjustment services</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    {{-- <img src="img/home/pr_1.jpg" alt=""> --}}
                    <img src="img/home/boconcept.PNG" style="width:470px;height:300px" alt="">
                    <div class="text">
                        <a href="{{route('portfolio')}}">
                            <h4>BoConcept (5+ years)</h4>
                        </a>
                        <p>Singapore, Malaysia, Thailand, Indonesia (30+ stores supplied till 2022)<br>Provided interiors and lightings with design and build services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="con_testimonial_area_two sec_gap">
    <div class="container">
        <div class="section_title text-center wow fadeInUp" data-wow-delay="0.4s">
            <h6 class="con_title_top">TESTIMONIAL</h6>
            <h2 class="con_title">What Our Clients Say</h2>
            <div class="line_bottom"></div>
        </div>
        <div class="con_testimonial_slider_info wow fadeInUp" data-wow-delay="0.6s">
            <div class="con_testimonial_slider_two" id="testimonila_slider">
                <div class="item col-lg-12">
                    <div class="testimonial_item_two">
                        <img class="quote" src="img/home/quote.png" alt="">
                        <div class="author">
                            <img src="img/home/clients1.jpg" alt="">
                        </div>
                        <p>Innovation and progress thrive on rejections and setbacks. Challenge yourself to go further and try harder.</p>
                        <div class="author_details">
                            <a href="#">
                                <h5>Ruüd van Driver</h5>
                            </a>
                            <p>Architect</p>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-12">
                    <div class="testimonial_item_two">
                        <img class="quote" src="img/home/quote.png" alt="">
                        <div class="author">
                            <img src="img/home/clients2.jpg" alt="">
                        </div>
                        <p>Innovation and progress thrive on rejections and setbacks. Challenge yourself to go further and try harder.</p>
                        <div class="author_details">
                            <a href="#">
                                <h5>Inverness McKenzie</h5>
                            </a>
                            <p>Civil Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-12">
                    <div class="testimonial_item_two">
                        <img class="quote" src="img/home/quote.png" alt="">
                        <div class="author">
                            <img src="img/home/clients2.jpg" alt="">
                        </div>
                        <p>Innovation and progress thrive on rejections and setbacks. Challenge yourself to go further and try harder.</p>
                        <div class="author_details">
                            <a href="#">
                                <h5>Inverness McKenzie</h5>
                            </a>
                            <p>Civil Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="con_team_area sec_gap bg_color">
    <div class="container">
        <div class="section_title wow fadeInUp" data-wow-delay="0.2s">
            <h6 class="con_title_top">OUR TEAM</h6>
            <h2 class="con_title">Our Professionals</h2>
            <div class="line_bottom"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row m0">
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="con_team_item">
                    <img src="img/home/team1.jpg" alt="">
                    <div class="overlay_bg"></div>
                    <div class="hover_content">
                        <h6>ARCHITECT</h6>
                        <a href="#">
                            <h5>Gordon Norman</h5>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="con_team_item">
                    <img src="img/home/team2.jpg" alt="">
                    <div class="overlay_bg"></div>
                    <div class="hover_content">
                        <h6>INTERIOR DESIGNER</h6>
                        <a href="#">
                            <h5>Nathaneal Down</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item">
                    <img src="img/home/team3.jpg" alt="">
                    <div class="overlay_bg"></div>
                    <div class="hover_content">
                        <h6>CIVIL ENGINEER</h6>
                        <a href="#">
                            <h5>Girth Wiedenbauer</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.8s">
                <div class="con_team_item">
                    <img src="img/home/team4.jpg" alt="">
                    <div class="overlay_bg"></div>
                    <div class="hover_content">
                        <h6>ACCOUNT MANAGER</h6>
                        <a href="#">
                            <h5>Quiche Hollandaise</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="con_clients_logo_area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo1.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInUp" data-wow-delay="0.4s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo2.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInUp" data-wow-delay="0.6s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo3.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInUp" data-wow-delay="0.8s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo4.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInUp" data-wow-delay="0.9s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo5.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInUp" data-wow-delay="1s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo6.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section> --}}
{{-- <section class="con_faq_area sec_gap">
    <div class="container">
        <div class="section_title text-center wow fadeInUp" data-wow-delay="0.2s">
            <h6 class="con_title_top">FREQUENTLY ASK QUESTION</h6>
            <h2 class="con_title">Want to Ask Something From US?</h2>
            <div class="line_bottom"></div>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                <img src="img/home/faq_img.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Integrated Design Pro <i class="ti-plus"></i><i class="ti-minus"></i>
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Reasonable people may disagree, but here are the sequential steps in designing and building an ADU.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Find builders and subs <i class="ti-plus"></i><i class="ti-minus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Reasonable people may disagree, but here are the sequential steps in designing and building an ADU.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    General Contracting<i class="ti-plus"></i><i class="ti-minus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Reasonable people may disagree, but here are the sequential steps in designing and building an ADU.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    General Contracting<i class="ti-plus"></i><i class="ti-minus"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                                Reasonable people may disagree, but here are the sequential steps in designing and building an ADU.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="con_call_action_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/productbanner.jpg) no-repeat;"></div>
    <div class="container">
        <div class="d-flex action_info justify-content-between align-items-center">
            <h2 class="wow fadeInLeft" data-wow-delay="0.2s">We will provide you the best work<br> which you dreamt for!</h2>
            <a href="{{route('product')}}" class="con_btn btn_effect wow fadeInRight" data-wow-delay="0.3s">VIEW PRODUCT</a>
        </div>
    </div>
</section>
@endsection