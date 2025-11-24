@extends('layouts.master')

@section('title', 'Product')

@section('content')
<section class="banner_area team_banner_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/productbanner.jpg) no-repeat;"></div>
    <div class="container">
        <div class="breadcrumb_content">
            <h2>OUR PRODUCT</h2>
            <ol class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li>PRODUCT</li>
            </ol>
        </div>
    </div>
</section>
<section class="con_team_area_three sec_gap">
    <div class="container">
        <div id="portfolio_filter" class="portfolio_filter">
            <div data-filter="*" class="work_portfolio_item active">ALL</div>
            <div data-filter=".downlight" class="work_portfolio_item">Downlight</div>
            <div data-filter=".tracklight" class="work_portfolio_item">Tracklight</div>
        </div>
        <div class="row portfolio_gallery" id="work-portfolio">
            <div class="col-lg-4 col-sm-6 portfolio_item downlight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Moon_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/moon" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/moon" target="_blank">
                            <h5>Moon</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item downlight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Moon_Micro_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/moon-micro" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/moon-micro" target="_blank">
                            <h5>Moon Micro</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item downlight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Moon_Mini_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/moon-mini" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/moon-mini" target="_blank">
                            <h5>Moon Mini</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item downlight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Titan_L_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/titan-l" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/titan-l" target="_blank">
                            <h5>Titan L</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item downlight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Titan_micro_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/titan-micro" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/titan-micro" target="_blank">
                            <h5>Titan Micro</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item downlight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Titan_Mini_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/titan-mini" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/downlights-panels/titan-mini" target="_blank">
                            <h5>Titan Mini</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item tracklight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Zen_Evo_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/tracklights/zen-evo" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/tracklights/zen-evo" target="_blank">
                            <h5>Zen EVO</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item tracklight in" data-wow-delay="0.6s">
                <div class="con_team_item_two">
                    <div class="team_img hover_effect">
                        <img src="img/product/Zen_Evo_Mini_Black.jpg" style="width:370px;height:330px" alt="team1">
                        <div class="social_icon">
                            <a href="https://itab.com/products-and-services/products/retail-lighting/tracklights/zen-evo-mini" target="_blank"><i class="ti-arrow-right"></i></a>
                            {{-- <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a> --}}
                        </div>
                    </div>
                    <div class="content">
                        <a href="https://itab.com/products-and-services/products/retail-lighting/tracklights/zen-evo-mini" target="_blank">
                            <h5>Zen EVO mini</h5>
                        </a>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection