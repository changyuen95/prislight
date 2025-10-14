<header class="header_area">
    <div class="header_top header_dark">
        <div class="container">
            <div class="header_info">
                <div class="row">
                    <div class="col-md-8 col-9">
                        <div class="header_contact_info">
                            <a href="#"><i class="fas fa-phone"></i>Call Us: +07 554 332 322</a>
                            <a href="mailto:pixelbuilders@email.com"><i class="fas fa-envelope"></i>sales@prislight.net</a>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 col-3 text-right">
                        <div class="h_social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg header_two" id="header">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/prislightlogo.jpg" style="width:120px;height:30px"alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    {{-- <li class="nav-item dropdown submenu active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HOME
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item active"><a href="index.html" class="nav-link">Home One</a></li>
                            <li class="nav-item"><a href="index-2.html" class="nav-link">Home Two</a></li>
                            <li class="nav-item"><a href="index-3.html" class="nav-link">Home Three</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">HOME</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">ABOUT</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="service.html">SERVICES</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('portfolio')}}">PORTFOLIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('team')}}">PARTNER</a></li>
                    {{-- <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BLOG
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li>
                            <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('contactus')}}">CONTACT</a></li>
                </ul>
                {{-- <ul class="list-unstyled search">
                    <li><a href="#" class="search-btn"><i class="fas fa-search"></i></a></li>
                </ul> --}}
            </div>
        </div>
    </nav>
</header>