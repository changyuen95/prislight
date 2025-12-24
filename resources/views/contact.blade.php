@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section class="banner_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/contact-banner.jpg) no-repeat;"></div>
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
            @if (session('success'))
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-success">
                        <ul>
                        <li>{{ session('success') }}</li>
                        </ul>
                    </div>
                </div>
            @endif
            <div class="col-lg-5 col-md-6">
                <div class="contact_info_two">
                    <div class="contact_info_item">
                        <i class="ti-location-pin"></i>
                        <h3>Address</h3>
                        <p><img src="https://flagcdn.com/sg.svg" alt="Singapore Flag" style="width:32px;height:auto;">  Nexcomm Asia Pte Ltd<br>13 Braddell Tech, #06-04, Toa Payoh Lorong 8, Singapore 319261</p>
                        <br>
                        <p><img src="https://flagcdn.com/id.svg" alt="Indonesia Flag" width="32" height="24"> PT. NXM Teknologi Jaya<br>Tempo Scan Tower Lt.32, JI.HR.Rasuna Said Kav.3-4,Kuningan Timur, Setiabudi, Jakarta Selatab DKI Jakarta<p>
                        <br>
                        <p><img src="https://flagcdn.com/ph.svg" alt="Philippines Flag" width="32" height="24"> Nexxtrade Corporation<br>Unit 210 No.15 Don Benito, Hernandez Barangay, 76 Pasay City, Fourth District, NCR, 1300, Philippines<p>      
                    </div>
                    <div class="contact_info_item">
                        <i class="ti-mobile"></i>
                        <h3>Contact Number</h3>
                        <p>Office: <a href="tel:60376522813">+603-7652 2813</a></p>
                        <p>Fax: <a href="tel:60376522868">+603-7652 2868</a></p>
                        <p>Mobile: <a href="tel:60122124842">+6012-212 4842 (Jay) </a></p>
                    </div>
                    <div class="contact_info_item">
                        <i class="ti-email"></i>
                        <h3>Email Address</h3>
                        <p><a href="mailto:sales@prislight.net">sales@prislight.net</a></p>
                        <p><a href="mailto:jay@prislight.net">jay@prislight.net</a></p>
                        <p><a href="mailto:jay@nexcomm-asia.com">jay@nexcomm-asia.com (Singapore)</a></p>
                        <p><a href="mailto:meiying@nexcomm-asia.com">meiying@nexcomm-asia.com (Singapore)</a></p>
                        <p><a href="mailto:jay@nxmco.net">jay@nxmco.net (Indonesia)</a></p>
                        <p><a href="mailto:sales@nxmco.net">sales@nxmco.net (Anthony) (Indonesia)</a></p>
                        <p><a href="mailto:jay@nxmco.net">jay@nxmco.net (Thailand)</a></p>
                        <p><a href="mailto:amnut@nxmco.net">amnut@nxmco.net (Thailand)</a></p>
                        <p><a href="mailto:jay@nexxtrade.net">jay@nexxtrade.net (Philippines)</a></p>
                        <p><a href="mailto:leah@nexxtrade.net">leah@nexxtrade.net (Philippines)</a></p>

                        


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