@extends('layouts.master')

@section('title', 'Portfolio')

@section('content')
<section class="banner_area">
    <div class="overlay_bg parallax-effect" style="background: url(./img/projectbanner.jpg) no-repeat;"></div>
    <div class="container">
        <div class="breadcrumb_content">
            <h2>Our PROJECTS</h2>
            <ol class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li>Portfolio</li>
            </ol>
        </div>
    </div>
</section>
<section class="con_latest_project_area">
    <div class="container">
        {{-- <div id="portfolio_filter" class="portfolio_filter">
            <div data-filter="*" class="work_portfolio_item active">ALL</div>
            <div data-filter=".con" class="work_portfolio_item">CONSTRUCTION</div>
            <div data-filter=".build" class="work_portfolio_item">BUILDING</div>
            <div data-filter=".com" class="work_portfolio_item">COMERCIAL</div>
            <div data-filter=".in" class="work_portfolio_item">INDUSTRIAL</div>
            <div data-filter=".design" class="work_portfolio_item">INTERIOR DESIGN</div>
        </div> --}}
        <div id="portfolio_filter" class="portfolio_filter">
            <div data-filter="*" class="work_portfolio_item active">Reference</div>
            <div data-filter=".planning" class="work_portfolio_item">Design</div>
            <div data-filter=".installation" class="work_portfolio_item">Fit Out</div>
            <div data-filter=".renovation" class="work_portfolio_item">LED screen</div>
            <div data-filter=".maintenance" class="work_portfolio_item">Maintenance Services</div>
        </div>
        <div class="row portfolio_gallery" id="work-portfolio">
            <div class="col-lg-4 col-sm-6 portfolio_item planning in">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/fastretailing2.png" alt="">
                    <div class="hover_content">
                        <h5><span>FAST RETAILING (5+ years)</span></h5>
                        <h4><span>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 100 stores<br>Provided lightings with planning, installation, maintenance services & renovation work</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item installation build">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/h&m.png" alt="">
                    <div class="hover_content">
                        {{-- <h5><span>H&M Group (15+ years)</span></h5> --}}
                        <h5><span>Fast Fashion (15+ years)</span></h5>
                        <h4><span>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 100 stores<br>Provided interiors and lightings with planning & installation services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item maintenance design">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/nitori1.png" alt="">
                    <div class="hover_content">
                        <h5><span>NITORI (5+ years)</span></h5>
                        <h4><span>Singapore, Malaysia and Thailand<br>Provided lightings with planning, adjustment services, LED Display & renovation work</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item renovation maintenance">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/muji.png" alt="">
                    <div class="hover_content">
                        {{-- <h5><span>MUJI (3+ years)</span></h5> --}}
                        <h5><span>Fast Fashion (3+ years)</span></h5>
                        <h4><span>Malaysia & Philippine<br>Provided lightings with planning and adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item design renovation">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/decathlon.png" alt="">
                    <div class="hover_content">
                        <h5><span>Decathlon (3+ years)</span></h5>
                        <h4><span>Malaysia & Indonesia<br>Provided lightings with planning, installation & adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item build installation">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/coach.png" alt="">
                    <div class="hover_content">
                        <h5><span>COACH (10+ years)</span></h5>
                        <h4><span>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 50 stores<br>Provided lightings with planning and adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item maintenance installation">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/katespade.png" alt="">
                    <div class="hover_content">
                        <h5><span>Kate Spade (10+ years)</span></h5>
                        <h4><span>Singapore, Malaysia, Thailand, Indonesia & Philippines in over 50 stores<br>Provided lightings with planning and adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item design planning maintenance">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/swarovski.png" alt="">
                    <div class="hover_content">
                        <h5><span>Swarovski (10+ years)</span></h5>
                        <h4><span>Malaysia & Indonesia<br>Provided lightings with planning and adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item build installation">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/geox.png" alt="">
                    <div class="hover_content">
                        <h5><span>GEOX (10+ years)</span></h5>
                        <h4><span>Singapore, Malaysia, Thailand, Indonesia<br>Provided lightings with planning and adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item maintenance installation">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/ikea.png" alt="">
                    <div class="hover_content">
                        <h5><span>IKEA (15+ years)</span></h5>
                        <h4><span>Indonesia<br>Provided check-out, gate, interiors and lightings</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item design renovation planning">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/donki.png" alt="">
                    <div class="hover_content">
                        <h5><span>DON DON DONKI (3+ years)</span></h5>
                        <h4><span>Malaysia (5 stores supplied till 2025)<br>Provided lightings and shelving with planning and adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item build installation">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/dyson.png" alt="">
                    <div class="hover_content">
                        {{-- <h5><span>Dyson (6+ years)</span></h5> --}}
                        <h5><span>Accessible Premium Tech (6+ years)</span></h5>
                        <h4><span>Singapore, Malaysia, Thailand, Indonesia (50+ stores supplied till 2022)<br>Provided lightings with planning and adjustment services</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio_item build maintenance renovation">
                <div class="portfolio_img hover_effect">
                    <img src="img/portfolio/boconcept.png" alt="">
                    <div class="hover_content">
                        <h5><span>BoConcept (5+ years)</span></h5>
                        <h4><span>Singapore, Malaysia, Thailand, Indonesia (30+ stores supplied till 2022)<br>Provided interiors and lightings with design and build services</span></h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- <nav class="navigation pagination" role="navigation">
            <a class="prev page-numbers" href="#"><i class="ti-arrow-left"></i></a>
            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a>
        </nav> --}}
    </div>
</section>
@endsection