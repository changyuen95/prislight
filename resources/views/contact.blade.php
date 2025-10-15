@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section class="banner_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/contactus.jpg) no-repeat;"></div>
    <div class="container">
        <div class="breadcrumb_content">
            <h2>Contact Us</h2>
            <ol class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li>Contact</li>
            </ol>
        </div>
    </div>
</section>

<section class="contact_area sec_gap">
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="col-lg-12 col-md-12">

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-lg-5 col-md-6">
                <div class="contact_info_two">
                    <div class="contact_info_item">
                        <i class="ti-location-pin"></i>
                        <h3>Address</h3>
                        <p>D-01-01, Suite 10, Menara Mitraland, 13A, Jalan PJU 5/1, Kota Damansara, 47810 Petaling Jaya, Selangor</p>
                    </div>
                    <div class="contact_info_item">
                        <i class="ti-mobile"></i>
                        <h3>Contact Number</h3>
                        <p>Phone: <a href="tel:0964355803031">(+096) 435 - 580 - 3031</a></p>
                        <p>Tele: <a href="tel:0964355803031">1 (877) 636-0443 </a></p>
                        <p>Fax: <a href="tel:0964355803031">+1-213-452-1551 </a></p>
                    </div>
                    <div class="contact_info_item">
                        <i class="ti-email"></i>
                        <h3>Email Address</h3>
                        <p><a href="mailto:sales@prislight.net">sales@prislight.net</a></p>
                        <p><a href="mailto:jay@prislight.net">jay@prislight.net</a></p>
                    </div>
                    {{-- <div class="social_icon">
                        <h3>Follow Us On</h3>
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="contact_form_info">
                    <div class="section_title">
                        <h5 class="con_title_top">REQUEST A QUOTE</h5>
                        <h2 class="con_title">Contact With Us</h2>
                    </div>
                    <form action="{{route('contact.sendEmail')}}" method="post" id="contactForm" novalidate="novalidate" class="contact_from get_quote_form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="company_name" name="company_name" value="{{old('company_name')}}" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" value="{{old('subject')}}" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Your Message">{{old('message')}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" value="submit" class="con_btn btn_effect">Send Message</button>
                        </div>
                    </form>
                    
                    <div id="success">Your message succesfully sent!</div>
                    <div id="error">Opps! There is something wrong. Please try again</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map_area">
    <div id="mapBox2" class="mapBox2" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12" data-marker="img/location.png" data-info="54B, Tailstoi Town 5238 La city, IA 522364" data-mlat="40.701083" data-mlon="-74.1522848">
    </div>
</section>
@endsection