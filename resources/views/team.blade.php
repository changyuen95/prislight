@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section class="banner_area team_banner_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/partner.jpg) no-repeat;"></div>
    <div class="container">
        <div class="breadcrumb_content">
            <h2>OUR PARTNER</h2>
            <ol class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li>PARTNER</li>
            </ol>
        </div>
    </div>
</section>
<section class="con_team_area_three sec_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/uniqlo.png" style="width:370px;height:420px" alt="team1">
                        {{-- <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div> --}}
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Uniqlo</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/h&m.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>H&M</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.5s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/nitori.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Nitori</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/muji.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Muji</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/donki.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Don Don Donki</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/decathlon.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Decathlon</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/ikea.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>IKEA</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/coach.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Coach</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/katespade.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Kate Spade</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/cos.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>COS</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/lacoste.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Lacoste</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/alo.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>alo</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/swarovski.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Swarovski</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/stuartweitzman.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Stuart Weitzman</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/michaelkors.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Michael Kors</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/padini.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Padini Concept Store</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/insightoptical.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Insight Optical</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/hushpuppies.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Hush Puppies</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/flyingtiger.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Flying Tiger Copenhagen</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/osim.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Osim</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/team/dyson.png" style="width:370px;height:420px" alt="team1">
                        <div class="social_icon">
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5>Dyson</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection