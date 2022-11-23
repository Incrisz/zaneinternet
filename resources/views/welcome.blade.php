







<!DOCTYPE HTML>
<html lang="en">
 

<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>zanesinternetresource</title>
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="{{ asset('public/assets/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
		<link type="text/css" rel="stylesheet" href="{{ asset('public/assets/css/dark-style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('public/assets/css/color.css')}}">
        <!--=============== favicons ===============-->
        <!-- <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico')}}"> -->
    </head>
    <body>
        <!--loader-->
        <div class="main-loader-wrap">
            <div class="loader-spin"><span></span></div>
            <div class="loader-dec"></div>
        </div>
        <!--loader end-->
        <!--================= main start ================-->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar"></div>
            </div>
            <!-- progress-bar end -->
            <!--=============== header main-header ===============-->
            <header class="main-header">
                <!-- logo-holder--> 
                <div class="logo-holder">
                    <a href="index.html" class="ajax"><img src="{{ asset('public/assets/images/logo.png')}}" alt="" /></a>
                </div>
                <!-- logo-holder end-->
                <!-- breadcrumb-wrap--> 
                <div class="breadcrumb-wrap">
                    <span></span>
                </div>
                <!-- breadcrumb-wrap end--> 
                <!-- nav-button-wrap--> 
                <div class="nav-button-wrap vis-menbut">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!-- share button--> 	
                <div class="share-button show-share">
                    
                   <a href="{{ route('login') }}">
                        <i class="fa fa-bullhorn"></i><span>Log-in/Sign-up</span>
                </a>
                </div>
                <!-- share button end--> 
            </header>
            <!-- Header   end-->
            <!--=============== nav-holder-wrap ===============-->	
            <div class="nav-holder-wrap">
                <!-- navigation -->
                <div class="nav-title">Menu</div>
                <div class="nav-holder fl-wrap nv-widget">
                    <nav class="onepage-nav">
                 
                        <ul>
                            <li> <i class="fal fa-home"></i><a href="#sec1">Home </a></li>
							 <li> <i class="fal fa-users"></i><a href="#sec2">About</a></li>
							 <!-- <li> <i class="fal fa-file-user"></i><a href="#sec3">Resume</a></li> -->
							 <li> <i class="fal fa-briefcase"></i><a href="#sec4">Buy Exam Cards</a></li>
							 <li> <i class="fal fa-file"></i><a href="#sec5">Services</a></li>
                             <li> <i class="fal fa-comments-alt"></i><a href="#sec6">Blog</a></li>
							 <li> <i class="fal fa-file-user"></i><a href="#sec5" onclick="page()">Buy / Sell</a></li>
                             
                        
                             @if (Route::has('login'))
                             @auth
                             <li> <i class="fal fa-globe"></i><a href="{{ route('home') }}">Dashboard</a></li>
                             @else
                             <li> <i class="fal fa-globe"></i><a href="{{ route('login') }}" onclick="login()">Log-in / Sign-up</a></li>
                             @endauth
                             @endif
 
                        </ul>
                       
                    </nav>
                </div>
                <!-- navigation end-->
                <!--nav-contacts  -->
                <div class="nav-title fl-wrap">Contact info</div>
                <div class="nav-contacts fl-wrap nv-widget">
                    <ul>
                        <li><i class="far fa-envelope"></i><a href="mailto:zanesinternetresource@gmail.com"> zanesinternetresource@gmail.com</a></li>
                        <li><i class="far fa-map-marker"></i><a href="https://goo.gl/maps/dj5UaNJFkJ6rLNJy9" target="_blank"> Shop 16, Faculty of Arts,
                            Nasarawa State University, Keffi</a></li>
                        <li><i class="far fa-phone"></i><a href="tel:+2348106338158"> 08106338158</a></li>
                    </ul>
                </div>
                <!-- nav-contacts end -->
                <!-- nav-social -->
                <div class="nav-title fl-wrap">Find us </div>
                <div class="nav-social fl-wrap nv-widget">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                <!-- nav-social end -->
            </div>
            <!-- nav-holder-wrap end-->
            <!--=============== wrapper ===============-->
            <div id="wrapper">
                <!--=============== content-holder ===============-->	
                <div class="content-holder" data-pagetitle="zane's internet">
                    <!--Content -->
                    <div class="content full-height home-content" id="sec1">
                        <!-- home-slider  -->
                        <div class="fs-gallery-wrap home-slider fl-wrap full-height" data-autoplayslider="5000">
                            <div class="swiper-container" data-scrollax-parent="true" >
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="fs-slider-item full-height fl-wrap">
                                            <div class="bg"  data-bg="{{ asset('public/assets/images/bg/8.jpg')}}" data-swiper-parallax="40%"></div>
                                            <a href="{{ asset('public/assets/images/bg/8.jpg')}}" class="slider-zoom image-popup"><i class="fas fa-search"  ></i></a>
                                            <div class="overlay"></div>
                                            <!-- hero-wrap-->           
                                            <div class="hero-wrap">
                                                <div class="container">
                                                    <div class="hero-item">
                                                        <h3>Welcome to my Website</h3>
                                                        <h2>Buy Scratch Cards Make Payment on the GO with
                                                            Zanebiz e-Services </h2>
                                                        <div class="hero-dec"></div>
                                                        <p>Buy and Sell your product on
                                                            ZaneBiz e-market.
                                                            (WAEC, NECO, NABTEB & NBAIS).</p>
                                                        <a href="{{route('home')}}" class="btn hide-icon custom-scroll-link"><i class="fas fa-caret-right"></i><span>Get Started</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- hero-wrap end--> 
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="fs-slider-item full-height fl-wrap">
                                            <div class="bg"  data-bg="{{ asset('public/assets/images/bg/7.jpg')}}" data-swiper-parallax="40%"></div>
                                            <a href="{{ asset('public/assets/images/bg/7.jpg')}}" class="slider-zoom image-popup"><i class="fas fa-search"  ></i></a>
                                            <div class="overlay"></div>
                                            <!-- hero-wrap-->           
                                            <div class="hero-wrap">
                                                <div class="container">
                                                    <div class="hero-item">
                                                        <h3>Welcome to my Website</h3>
                                                        <h2> Make Payment on the GO <br>with
                                                            Zanebiz e-Services</h2>
                                                        <div class="hero-dec"></div>
                                                        <!-- <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary .</p> -->
                                                        <a href="{{route('home')}}" class="btn hide-icon custom-scroll-link"><i class="fas fa-caret-right"></i><span>Get Started</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- hero-wrap end-->   
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="fs-slider-item full-height fl-wrap">
                                            <div class="bg"  data-bg="{{ asset('public/assets/images/bg/9.jpg')}}" data-swiper-parallax="40%"></div>
                                            <a href="{{ asset('public/assets/images/bg/8.jpg')}}" class="slider-zoom image-popup"><i class="fas fa-search"  ></i></a>
                                            <div class="overlay"></div>
                                            <!-- hero-wrap-->           
                                            <div class="hero-wrap">
                                                <div class="container">
                                                    <div class="hero-item">
                                                        <h3>Welcome to my Website</h3>
                                                        <h2>Buy and Sell your product on <br>
                                                            ZaneBiz e-market.</h2>
                                                        <div class="hero-dec"></div>
                                                        <!-- <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary .</p> -->
                                                        <a href="{{route('home')}}" class="btn hide-icon custom-scroll-link"><i class="fas fa-caret-right"></i><span>Get Started</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- hero-wrap end-->   
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="fs-slider-item full-height fl-wrap">
                                            <div class="bg"  data-bg="{{ asset('public/assets/images/bg/10.jpg')}}" data-swiper-parallax="40%"></div>
                                            <a href="{{ asset('public/assets/images/bg/10.jpg')}}" class="slider-zoom image-popup"><i class="fas fa-search"  ></i></a>
                                            <div class="overlay"></div>
                                            <!-- hero-wrap-->           
                                            <div class="hero-wrap">
                                                <div class="container">
                                                    <div class="hero-item">
                                                        <h3>Welcome to my Website</h3>
                                                        <h2>Buy and Sell your product on <br>
                                                            ZaneBiz e-market.</h2>
                                                        <div class="hero-dec"></div>
                                                        <!-- <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary .</p> -->
                                                        <a href="#sec4" class="btn hide-icon custom-scroll-link"><i class="fas fa-caret-right"></i><span>Get Started</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- hero-wrap end-->
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                </div>
                                <div class="sw-button swiper-button-next mob_bottom"><i class="fas fa-caret-right"></i></div>
                                <div class="sw-button swiper-button-prev mob_bottom"><i class="fas fa-caret-left"></i></div>
                                <div class="swiper-pagination"></div>
                                <div class="slider-progress-bar act-slider">
                                    <span>
                                        <svg class="circ" width="30" height="30">
                                            <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none" />
                                            <circle class="circ1" cx="15" cy="15" r="13" stroke="#F7B90F" stroke-width="2" fill="none" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="hero-dec_top"></div>
                            <div class="hero-dec_bottom"></div>
                        </div>
                        <!-- home-slider end-->
                    </div>
                    <!-- content  end -->
                    <!--Content -->
                    <div class="content">
                        <!-- column-content -->
                        <div class="column-content">
 
                            <!-- section -->
                            <section data-scrollax-parent="true" id="sec2">
                                <div class="wrap-inner fl-wrap">
                                    <div class="container small-container">
                                        <div class="about-wrap">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="about-image fl-wrap">
                                                        <img src="{{ asset('public/assets/images/about.jpg')}}" class="respimg" alt="">
                                                        <div class="triangle-dec" data-scrollax="properties: { translateY: '100px' }">
                                                            <span></span>
                                                        </div>
                                                        <div class="ab_cirle-dec" data-scrollax="properties: { translateY: '-100px' }"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-5">
                                                    <div class="about-text fl-wrap">
                                                        <h3>Welcome To Zane's Internet</h3>
                                                        <!-- <h4>The first line of Lorem Ipsum,   comes from a line in section. </h4> -->
                                                        <p>We live in the age of the internet. Also, it has become an important part of our life that we can't live without it. Besides, the internet is an invention of high-end science and modern technology. Apart from that, we are connected to internet 24×7.</p>
                                                        <div class="line-dec fl-wrap"></div>
                                                        <!-- <a href="#sec4" class="btn hide-icon custom-scroll-link"><i class="fas fa-caret-right"></i><span>View Portfolio</span></a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pattern-bg right-pos"></div>
                            </section>
                            <!-- section end-->
                            <!-- section -->
                            <section>
                                <div class="inline-facts-holder row">
                                    <!-- inline-facts -->
                                    <div class="inline-facts-wrap col-md-4">
                                        <div class="inline-facts">
                                            <i class="fal fa-business-time"></i>
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="1461">1461</div>
                                                </div>
                                            </div>
                                            <h6>Finished projects</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap col-md-4">
                                        <div class="inline-facts">
                                            <i class="fal fa-users"></i>
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="2168">2168</div>
                                                </div>
                                            </div>
                                            <h6>Happy customers</h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                    <!-- inline-facts  -->
                                    <div class="inline-facts-wrap col-md-4">
                                        <div class="inline-facts">
                                            <i class="fal fa-clock"></i>
                                            <div class="milestone-counter">
                                                <div class="stats animaper">
                                                    <div class="num" data-content="0" data-num="247">24/7</div>
                                                </div>
                                            </div>
                                            <h6>Working hours </h6>
                                        </div>
                                    </div>
                                    <!-- inline-facts end -->
                                </div>
                            </section>
                            <!-- section end-->
                    
							
						</div>
                    <!--Content -->
                    <div class="content fs-content" id="sec4">
                        <!--Filter    -->
                        <div class="filter-wrap inline-filter">
                            <div class="mob-filter_btn"><i class="fas fa-filter"></i> Filters</div>
                            <div class="gallery-filters gfm">
                                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">Our Jmab Services</a>
                                <!-- <a href="#" class="gallery-filter" data-filter=".web">Web Design</a>
                                <a href="#" class="gallery-filter" data-filter=".photography">Photo</a>
                                <a href="#" class="gallery-filter" data-filter=".branding">Branding</a>
                                <a href="#" class="gallery-filter" data-filter=".uides">Ui Design</a> -->
                            </div>
                            <div class="folio-counter">
                                <div class="num-album"></div>
                                <span></span>
                                <div class="all-album"></div>
                                <i class="fal fa-list"></i>
                            </div>
                        </div>
                        <!--Filter  end    -->
                        <!-- portfolio start -->
                        <div class="gallery-items hid-port-info spad">
                            <!-- gallery-item-->
                            <div class="gallery-item photography web">
                                <div class="grid-item-holder">
                                    <div class="box-item vis-det folio-img fl-wrap">
                                        <img  src="{{ asset('public/assets/images/folio/1.jpg')}}"    alt="">
                                        <a data-src="{{ asset('public/assets/images/folio/1.jpg')}}" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="grid-det fl-wrap">
                                        <h3><a href="{{route('home')}}">Print Jamb Admission Letter</a></h3>
                                        <!-- <span>Web design , Branding</span> -->
                                    </div>
                                </div>
                            </div>
                            <!-- gallery-item end-->
                            <!-- gallery-item-->
                            <div class="gallery-item branding web">
                                <div class="grid-item-holder">
                                    <div class="box-item vis-det folio-img fl-wrap">
                                        <img  src="{{ asset('public/assets/images/folio/2.jpg')}}"    alt="">
                                        <a data-src="{{ asset('public/assets/images/folio/2.jpg')}}" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="grid-det fl-wrap">
                                        <h3><a href="{{route('home')}}">Print Jamb Original Result</a></h3>
                                        <!-- <span>Branding</span> -->
                                    </div>
                                </div>
                            </div>
                            <!-- gallery-item end-->                               	
                            <!-- gallery-item-->
                            <div class="gallery-item branding uides">
                                <div class="grid-item-holder">
                                    <div class="box-item vis-det folio-img fl-wrap">
                                        <img  src="{{ asset('public/assets/images/folio/3.jpg')}}"    alt="">
                                        <a data-src="{{ asset('public/assets/images/folio/3.jpg')}}" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="grid-det fl-wrap">
                                        <h3><a href="{{route('home')}}">waec-result-checker</a></h3>
                                        <!-- <span>Web design , Branding</span> -->
                                    </div>
                                </div>
                            </div>
                            <!-- gallery-item end-->  
                               <!-- gallery-item-->
                               <div class="gallery-item branding uides">
                                <div class="grid-item-holder">
                                    <div class="box-item vis-det folio-img fl-wrap">
                                        <img  src="{{ asset('public/assets/images/folio/4.jpg')}}"    alt="">
                                        <a data-src="{{ asset('public/assets/images/folio/4.jpg')}}" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="grid-det fl-wrap">
                                        <h3><a href="{{route('home')}}">neco-result-checker</a></h3>
                                        <!-- <span>Web design , Branding</span> -->
                                    </div>
                                </div>
                            </div>
                            <!-- gallery-item end-->    
                               <!-- gallery-item-->
                               <div class="gallery-item branding uides">
                                <div class="grid-item-holder">
                                    <div class="box-item vis-det folio-img fl-wrap">
                                        <img  src="{{ asset('public/assets/images/folio/5.jpg')}}"    alt="">
                                        <a data-src="{{ asset('public/assets/images/folio/5.jpg')}}" class="image-popup single-popup"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="grid-det fl-wrap">
                                        <h3><a href="{{route('home')}}">nabteb-result-checker</a></h3>
                                        <!-- <span>Web design , Branding</span> -->
                                    </div>
                                </div>
                            </div>
                            <!-- gallery-item end-->                                
                 
                                          
                        </div>
                        <!-- portfolio end-->
 
                    </div>
                    <!-- content  end -->							
							
							
			                        <!-- column-content -->
                        <div class="column-content">				
							
							
							
							
                            <!-- section -->
                            <section  class=" parallax-section content-parallax-section" data-scrollax-parent="true" id="sec5">
                                <div class="bg"  data-bg="{{ asset('public/assets/images/bg/7.jpg')}}" data-scrollax="properties: { translateY: '150px' }" ></div>
                                <div class="overlay"></div>
                                <div class="container">
                                    <div class="section-title">
                                        <h2>Services <span>provided</span></h2>
                                        <p>Communication Services. There are various Communication Services available that offer exchange of information with individuals or groups.</p>
                                    </div>
                                </div>
                            </section>
                            <!-- section end-->
                            <!-- section -->
                            <section>
                                <div class="fl-wrap serv-wrap">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="tabs sl-tabs fix-tab">
                                                <li class="tab-link current" data-tab="tab-1">
                                                    <div class="tb-item">
                                                        <i class="far fa-desktop"></i>
                                                        <h3>ONLINE REGISTRATION ON ZANE BIZ</h3>
                                                    </div>
                                                </li>
                                                <!-- <li class="tab-link" data-tab="tab-2">
                                                    <div class="tb-item">
                                                        <i class="far fa-anchor"></i>
                                                        <h3>Branding</h3>
                                                    </div>
                                                </li>
                                                <li class="tab-link" data-tab="tab-3">
                                                    <div class="tb-item">
                                                        <i class="far fa-mobile-android"></i>
                                                        <h3>UI/UX Design</h3>
                                                    </div>
                                                </li> -->
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <!-- tab1 -->
                                            <div id="tab-1" class="tab-content current">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="box-item vis-det fl-wrap">
                                                            <img src="{{ asset('public/assets/images/services/1.jpg')}}" class="respimg" alt="">
                                                            <a data-src="{{ asset('public/assets/images/services/1.jpg')}}" class="image-popup"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <ul class="dec-list">
                                                            <li> NSUK x FULAFIA POST UTME
                                                                FORM</li>
                                                            <li>  NSUK x FULAFIA
                                                                POSTGRADUATE FORM </li>
                                                            <li> NSUK x FULAFIA
                                                                PART TIME (BSc) FORM</li>
                                                        </ul>
                                                        <span class="price">Register / Apply</span>
                                                    </div>
                                                </div>
                                                <!-- <h3><span>01. </span>Web Design</h3>
                                                <div class="serv-text fl-wrap">
                                                    <p>FLorem Gpsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </p>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a> -->
                                                <div class="serv-dec"></div>
                                                <div class="pattern-bg right-pos"></div>
                                            </div>
                                            <!-- tab1 end -->
                                            <!-- tab2 -->
                                            <div id="tab-2" class="tab-content">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="box-item vis-det fl-wrap">
                                                            <img src="{{ asset('public/assets/images/services/2.jpg')}}" class="respimg" alt="">
                                                            <a data-src="{{ asset('public/assets/images/services/2.jpg')}}" class="image-popup"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <ul class="dec-list">
                                                            <li>Research / Develop</li>
                                                            <li> User inerface /  Photography  </li>
                                                            <li> Flayers / Marketing  </li>
                                                        </ul>
                                                        <span class="price">Price: 190-250 $</span>
                                                    </div>
                                                </div>
                                                <h3><span>02. </span>Branding</h3>
                                                <div class="serv-text fl-wrap">
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                                <div class="serv-dec"></div>
                                                <div class="pattern-bg right-pos"></div>
                                            </div>
                                            <!-- tab2 end -->
                                            <!-- tab3-->
                                            <div id="tab-3" class="tab-content">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="box-item vis-det fl-wrap">
                                                            <img src="{{ asset('public/assets/images/services/3.jpg')}}" class="respimg" alt="">
                                                            <a data-src="{{ asset('public/assets/images/services/3.jpg')}}" class="image-popup"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <ul class="dec-list">
                                                            <li> Flayers / Branding</li>
                                                            <li>  Marketing / Develop  </li>
                                                            <li>User inerface /  Photography </li>
                                                        </ul>
                                                        <span class="price">Price: 1190-2250 $</span>
                                                    </div>
                                                </div>
                                                <h3><span>03. </span>UI/UX Design</h3>
                                                <div class="serv-text fl-wrap">
                                                    <p>Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Curabitur convallis fringilla diam sed aliquam.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Dolore magna aliqua. Quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </p>
                                                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea. commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <a href="#" class="cus-inner-head-link color-bg">Details + </a>
                                                <div class="serv-dec"></div>
                                                <div class="pattern-bg right-pos"></div>
                                            </div>
                                            <!-- tab3 end -->
                                        </div>
                                    </div>
                                    <div class="limit-box fl-wrap"></div>
                                </div>
                            </section>
                            <!-- section end-->
                            <!-- section -->
                            <!-- order-wrap-->
                            <div class="order-wrap fl-wrap color-bg">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h4>BLOG POST</h4>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- <a href="#sec7" class="ord-link custom-scroll-link">Get In Touch</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- order-wrap end-->
                            <!-- section end-->
                      
                            <!-- section -->
                            <section id="sec6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="clients-header fl-wrap">
                                            <h2>BLOG POST</h2>
                                            <div class="client-control inline-car-control fl-wrap">
                                                <div class="swiper-button-prev"><i class="fas fa-caret-left"></i></div>
                                                <div class="swiper-button-next"><i class="fas fa-caret-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="clients-carousel-wrap inline-carousel client-list fl-wrap">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!-- client-item -->
                                                    <div class="swiper-slide">
                                                        <div class="client-item fl-wrap">
                                                            <div class="client-img">
                                                                <img src="{{ asset('public/assets/images/clients/1.png')}}" alt="">
                                                            </div>
                                                            <div class="client-text fl-wrap">
                                                                <h4>NSUK Releases Admission List</h4>
                                                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea</p>
                                                                <a href="#" class="client-link" target="_blank">View<i class="fas fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- client-item  end -->
                                                    <!-- client-item -->
                                                    <div class="swiper-slide">
                                                        <div class="client-item fl-wrap">
                                                            <div class="client-img">
                                                                <img src="{{ asset('public/assets/images/clients/1.png')}}" alt="">
                                                            </div>
                                                            <div class="client-text fl-wrap">
                                                                <h4>NSUK Releases PG Admission List</h4>
                                                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea</p>
                                                                <a href="#" class="client-link" target="_blank">View<i class="fas fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- client-item  end -->
                                                    <!-- client-item -->
                                                    <div class="swiper-slide">
                                                        <div class="client-item fl-wrap">
                                                            <div class="client-img">
                                                                <img src="{{ asset('public/assets/images/clients/3.png')}}" alt="">
                                                            </div>
                                                            <div class="client-text fl-wrap">
                                                                <h4>Nigeria will not catch fire.</h4>
                                                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea</p>
                                                                <a href="#" class="client-link" target="_blank">View<i class="fas fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- client-item  end -->
                                                    <!-- client-item -->
                                                    <div class="swiper-slide">
                                                        <div class="client-item fl-wrap">
                                                            <div class="client-img">
                                                                <img src="{{ asset('public/assets/images/clients/4.png')}}" alt="">
                                                            </div>
                                                            <div class="client-text fl-wrap">
                                                                <h4>Noordy</h4>
                                                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea</p>
                                                                <a href="#" class="client-link" target="_blank">View<i class="fas fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- client-item  end -->
                                                    <!-- client-item -->
                                                    <div class="swiper-slide">
                                                        <div class="client-item fl-wrap">
                                                            <div class="client-img">
                                                                <img src="{{ asset('public/assets/images/clients/5.png')}}" alt="">
                                                            </div>
                                                            <div class="client-text fl-wrap">
                                                                <h4>Kliff Inc.</h4>
                                                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip exea</p>
                                                                <a href="#" class="client-link" target="_blank">View<i class="fas fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- client-item  end -->
                                                </div>
                                                <div class="swiper-pagination client-pagin"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- section end-->
                            <!-- section -->
                            <section>
                                <div class="wrap-inner fl-wrap">
                                    <div class="container">
                                        <div class="section-title fl-wrap">
                                            <h2> Testimonials<span>  and Reviews</span></h2>
                                            <h4>Internet tend to repeat predefined chunks  look even slightly believable to use a passage of Lorem Ipsum.</h4>
                                        </div>
                                        <div class="testilider fl-wrap" data-effects="slide">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!-- swiper-slide -->
                                                    <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <div class="testi-header fl-wrap">
                                                                <img src="{{ asset('public/assets/images/face/1.jpg')}}" alt="">
                                                                <h3>Andy Smith</h3>
                                                                <span class="testi-num">01.</span>
                                                            </div>
                                                            <div class="testi-text fl-wrap">
                                                                <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words"</p>
                                                            </div>
                                                            <a href="#" target="_blank" class="testi-link">Via Twitter</a>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide -->
                                                    <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <div class="testi-header fl-wrap">
                                                                <img src="{{ asset('public/assets/images/face/2.jpg')}}" alt="">
                                                                <h3>Gary Trust</h3>
                                                                <span class="testi-num">02.</span>
                                                            </div>
                                                            <div class="testi-text fl-wrap">
                                                                <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words"</p>
                                                            </div>
                                                            <a href="#" target="_blank" class="testi-link">Via Facebook</a>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide end-->
                                                    <!-- swiper-slide -->
                                                    <div class="swiper-slide">
                                                        <div class="testi-item fl-wrap">
                                                            <div class="testi-header fl-wrap">
                                                                <img src="{{ asset('public/assets/images/face/3.jpg')}}" alt="">
                                                                <h3>Liza Minovski</h3>
                                                                <span class="testi-num">03.</span>
                                                            </div>
                                                            <div class="testi-text fl-wrap">
                                                                <p>"All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words"</p>
                                                            </div>
                                                            <a href="#" target="_blank" class="testi-link">Via Myspace</a>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide end-->
                                                </div>
                                                <div class="swiper-button swiper-button-prev"><i class="fas fa-caret-left"></i></div>
                                                <div class="swiper-button swiper-button-next"><i class="fas fa-caret-right"></i></div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                    <div class="pattern-bg"></div>
                                    <div class="sec-dec"></div>
                                </div>
                            </section>
                    
                            <section>
                                <div class="wrap-inner fl-wrap">
                                    <div class="container">
                                        <div class="section-title fl-wrap">
                                            <h2>Get in Touch <span> With zanesinternetresource</span></h2>
                                            <h4>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised .</h4>
                                        </div>
                                        <div class="fl-wrap">
                                            <!-- contact form -->
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form method="post" action="https://trion.kwst.net/dark/php/contact.php" name="contactform" id="contactform">
                                                    <div class="input-wrap"><i class="fal fa-user-plus"></i><input name="name" type="text" id="name"  class="inputForm2" onClick="this.select()" value="Name" ></div>
                                                    <div class="input-wrap"><i class="fal fa-envelope"></i><input name="email" type="text" id="email" onClick="this.select()" value="E-mail" ></div>
                                                    <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                                    <button type="submit"  id="submit"  class="btn hide-icon"  ><i class="fas fa-caret-right"></i><span>Send Message </span></button> 
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pattern-bg right-pos"></div>
                                    <div class="sec-dec"></div>
                                </div>
                            </section>							
							
							
                        </div>
                        <!-- column wrap end-->
                    </div>
                    <!-- content  end -->					
					
					
					
                    <!--=============== footer ===============-->
                    <footer class="main-footer fl-wrap">
                        <!-- footer-wrap end-->
                        <div class="footer-wrap fl-wrap">
                            <!-- footer-inner-->
                            <div class="footer-inner">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3>Subscribe on our updates</h3>
                                        <p>Praesent nec leo venenatis elit semper aliquet id ac enim. Maecenas nec mi leo. Etiam venenatis ut dui non hendrerit. Integer dictum, diam vitae blandit accumsan.</p>
                                        <!-- subcribe-form end-->   
                                        <div class="subcribe-form fl-wrap">
                                            <form id="subscribe">
                                                <div class="shadow-box fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button">Submit</button>
                                                </div>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-inner end-->
                                <!-- policy-box-->
                                <div class="policy-box fl-wrap">
                                    <span>&#169;ZaneBiz 2022  /  All rights reserved. </span>
                                </div>
                                <!-- policy-box end-->
                                <a class="to-top"><span>Back to Top</span><i class="fas fa-caret-up"></i></a>
                            </div>
                            <!-- subcribe-form end-->
                            <!-- footer decor -->
                            <div class="footer-decor">
                            </div>
                            <!-- footer decor end-->
                        </div>
                        <!-- footer-wrap end-->
                    </footer>
                    <!-- footer end -->
                    <div class="share-wrapper">
                        <div class="share-container isShare"></div>
                    </div>
                </div>
                <!-- content-holder end -->
            </div>
            <!-- wrapper end -->
            <!-- body bg-->
            <div class="circle-bg">
                <div class="middle-circle"></div>
                <div class="big-circle"></div>
                <div class="small-circle"></div>
            </div>
            <!-- body bg end-->
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->			
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->   
        <script  src="{{ asset('public/assets/js/jquery.min.js')}}"></script>
        <script  src="{{ asset('public/assets/js/plugins.js')}}"></script>
        <script  src="{{ asset('public/assets/js/scripts.js')}}"></script>

                <script>
            function page() {
                window.location.replace("https://www.google.com/");
            }     
            function login() {
                window.location.replace("http://zane.com/zaneinternet/login");
            }     
            setTimeout("pageRedirect()", 10000);
        </script>
        
    </body>


</html>