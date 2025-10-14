@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section class="banner_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/banner2.jpg) no-repeat;"></div>
    <div class="container">
        <div class="breadcrumb_content">
            <h2>OUR SERVICES</h2>
            <ol class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li>Services</li>
            </ol>
        </div>
    </div>
</section>
<section class="con_service_area sec_gap">
    <div class="container">
        <div class="section_title text-center wow fadeInUp" data-wow-delay="0.2s">
            <h6 class="con_title_top">OUR SERVICES</h6>
            <h2 class="con_title">We Build Everything</h2>
            <p class="con_p">That ummm I'm telling Why say bleeder smashing lemon squeezy tosser,<br> cheesed off dropped.!</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="con_service_item">
                    <div class="icon"><img src="img/home-1/icon5.png" alt=""></div>
                    <a href="#">
                        <h4>Architectural Design</h4>
                    </a>
                    <p>Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty horse play blow off pardon </p>
                </div>
            </div>
            <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="con_service_item">
                    <div class="icon"><img src="img/home-1/icon6.png" alt=""></div>
                    <a href="#">
                        <h4>Construction Management</h4>
                    </a>
                    <p>Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty horse play blow off pardon </p>
                </div>
            </div>
            <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="con_service_item">
                    <div class="icon"><img src="img/home-1/icon7.png" alt=""></div>
                    <a href="#">
                        <h4>Skilled Engineers</h4>
                    </a>
                    <p>Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty horse play blow off pardon </p>
                </div>
            </div>
            <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="con_service_item">
                    <div class="icon"><img src="img/home-1/icon8.png" alt=""></div>
                    <a href="#">
                        <h4>Reconstruction Services</h4>
                    </a>
                    <p>Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty horse play blow off pardon </p>
                </div>
            </div>
            <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="con_service_item">
                    <div class="icon"><img src="img/home-1/icon9.png" alt=""></div>
                    <a href="#">
                        <h4>Interior Design</h4>
                    </a>
                    <p>Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty horse play blow off pardon </p>
                </div>
            </div>
            <div class="col-lg-4 col-6 wow fadeInUp" data-wow-delay="0.8s">
                <div class="con_service_item">
                    <div class="icon"><img src="img/home-1/icon10.png" alt=""></div>
                    <a href="#">
                        <h4>Pre-Construction & Planning </h4>
                    </a>
                    <p>Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty horse play blow off pardon </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="con_project_area sec_gap">
    <div class="container">
        <div class="project_title d-flex justify-content-between align-items-end">
            <div class="section_title">
                <h6 class="con_title_top">OUR PORTFOLIO</h6>
                <h2 class="con_title c_w">Our Latest Projects</h2>
                <div class="line_bottom mb-0"></div>
            </div>
            <div class="custom_nav">
                <i class="ti-angle-left prev"></i>
                <i class="ti-angle-right next"></i>
            </div>
        </div>
        <div class="con_project_info" id="project_slider">
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/pr_1.jpg" alt="">
                    <div class="text">
                        <a href="#">
                            <h4>Oxford Science Lab Building</h4>
                        </a>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/pr_2.jpg" alt="">
                    <div class="text">
                        <a href="#">
                            <h4>Modern Architectured Building</h4>
                        </a>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/pr_3.jpg" alt="">
                    <div class="text">
                        <a href="#">
                            <h4>Multi-National Construction Site</h4>
                        </a>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/pr_1.jpg" alt="">
                    <div class="text">
                        <a href="#">
                            <h4>Oxford Science Lab Building</h4>
                        </a>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/pr_3.jpg" alt="">
                    <div class="text">
                        <a href="#">
                            <h4>Multi-National Construction Site</h4>
                        </a>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/pr_1.jpg" alt="">
                    <div class="text">
                        <a href="#">
                            <h4>Oxford Science Lab Building</h4>
                        </a>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="project_item">
                    <img src="img/home/pr_1.jpg" alt="">
                    <div class="text">
                        <a href="#">
                            <h4>Oxford Science Lab Building</h4>
                        </a>
                        <p>Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="con_testimonial_area_two sec_gap">
    <div class="container">
        <div class="section_title text-center">
            <h6 class="con_title_top">TESTIMONIAL</h6>
            <h2 class="con_title">What Our Clients Say</h2>
            <div class="line_bottom"></div>
        </div>
        <div class="con_testimonial_slider_info">
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
</section>
<section class="con_faq_area sec_gap bg_color">
    <div class="container">
        <div class="section_title text-center">
            <h6 class="con_title_top">FREQUENTLY ASK QUESTION</h6>
            <h2 class="con_title">Want to Ask Something From US?</h2>
            <div class="line_bottom"></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="img/home/faq_img.jpg" alt="">
            </div>
            <div class="col-lg-6">
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
</section>
<section class="con_price_area sec_gap">
    <div class="container">
        <div class="section_title text-center">
            <h6 class="con_title_top">Pricing Plans</h6>
            <h2 class="con_title">Choose Your Plan</h2>
            <p class="con_p">Twit cras excuse my French matie boy grub it’s all gone to pot off his nut butty<br> horse play blow off pardon you hanky panky.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="price_item">
                    <div class="p_heade">
                        <img src="img/home3/price_icon1.png" alt="">
                        <h4>Basic Plan</h4>
                        <div class="price"><sup>$</sup>220<span>/month</span></div>
                    </div>
                    <ul class="list-unstyled price_body">
                        <li><i class="ti-check"></i>Full House Design</li>
                        <li><i class="ti-close"></i>Full House Design + Construction</li>
                        <li><i class="ti-close"></i>Design + Construction + Interior</li>
                        <li><i class="ti-close"></i>Design + Construction + Interior</li>
                    </ul>
                    <a href="#" class="p_btn">By Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="price_item">
                    <div class="p_heade">
                        <img src="img/home3/price_icon2.png" alt="">
                        <h4>Standard Plan</h4>
                        <div class="price"><sup>$</sup>400<span>/month</span></div>
                    </div>
                    <ul class="list-unstyled price_body">
                        <li><i class="ti-check"></i>Full House Design</li>
                        <li><i class="ti-close"></i>Full House Design + Construction</li>
                        <li><i class="ti-close"></i>Design + Construction + Interior</li>
                        <li><i class="ti-close"></i>Design + Construction + Interior</li>
                    </ul>
                    <a href="#" class="p_btn">By Now</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="price_item">
                    <div class="p_heade">
                        <img src="img/home3/price_icon3.png" alt="">
                        <h4>Premium Plan</h4>
                        <div class="price"><sup>$</sup>599<span>/month</span></div>
                    </div>
                    <ul class="list-unstyled price_body">
                        <li><i class="ti-check"></i>Full House Design</li>
                        <li><i class="ti-close"></i>Full House Design + Construction</li>
                        <li><i class="ti-close"></i>Design + Construction + Interior</li>
                        <li><i class="ti-close"></i>Design + Construction + Interior</li>
                    </ul>
                    <a href="#" class="p_btn">By Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="con_call_action_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/home/action.jpg) no-repeat;"></div>
    <div class="container">
        <div class="d-flex action_info justify-content-between align-items-center">
            <h2>We will provide you the best work<br> which you dreamt for!</h2>
            <a href="#" class="con_btn">FREE CONSULTATION</a>
        </div>
    </div>
</section>
<section class="con_clients_logo_area sec_gap">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInLeft">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo1.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInLeft" data-wow-delay="0.2s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo2.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInLeft" data-wow-delay="0.4s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo3.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInLeft" data-wow-delay="0.6s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo4.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInLeft" data-wow-delay="0.8s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo5.png" alt="">
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6 wow fadeInLeft" data-wow-delay="0.9s">
                <a href="#" class="c_logo_item">
                    <img src="img/home/Logo6.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection