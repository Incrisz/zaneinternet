







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
                    
                   <a href="{{ route('login') }}" >
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
                            <li> <i class="fal fa-home"></i><a href="#sec1" onclick="welcome()">Home </a></li>
							 <li> <i class="fal fa-users"></i><a href="#sec2 " onclick="welcome()">About</a></li>
							 <!-- <li> <i class="fal fa-file-user"></i><a href="#sec3">Resume</a></li> -->
							 <li> <i class="fal fa-briefcase"></i><a href="#sec4" onclick="welcome()">Buy Exam Cards</a></li>
							 <li> <i class="fal fa-file"></i><a href="#sec5" onclick="welcome()">Services</a></li>
                             <li> <i class="fal fa-comments-alt"></i><a href="#sec6" onclick="welcome()">Blog</a></li>
							 <li> <i class="fal fa-file-user"></i><a href="#sec5" onclick="shop()">Buy / Sell</a></li>
                             
                        
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
                        <li><i class="far fa-map-marker"></i><a href="#" target="_blank"> Shop 16, Faculty of Arts,
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
                <div class="content-holder" data-pagetitle="Last News">
                    <!-- content  -->
                    <div class="content">
                        <!-- column-content -->
                        <div class="column-content">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="post-container fl-wrap">
                                        <!-- section-->
                                      
                                        <section>
                                            <div class="wrap-inner fl-wrap sm-mar-w">
                                                <div class="container">
                                                    @foreach($users as $key=>$user)
                                                    @foreach($products as $key=>$product)
                                                    <!-- post-->
                                                    @if($user->id == $product->user_id)
                                                    @if($product->status == 1)
                                                    <div class="post">
                                                        <div class="single-media fl-wrap">
                                                            <img src="{{ URL::asset('public/storage/product/'.$product->img) }}" class="respimg" alt="">
                                                        </div>
                                                        <div class="post-item fl-wrap">
                                                            <h4><a href="blog-single.html" class="ajax">{{$product->name}}</a></h4>
                                                            <div class="post-opt single_post-opt">
                                                                <ul class="no-list-style">
                                                                    <li><i class="fal fa-calendar"></i> <span>{{$product->created_at->toFormattedDateString()}}</span></li>
                                                                    <!-- <li><i class="fal fa-eye"></i> <span>uploaded by {{$user->name}}</span></li> -->
                                                                    <!-- <li><i class="far fa-comments-alt"></i> <span>Contact: {{$user->email}}</span></li> -->
                                                                </ul>
                                                            </div>
                                                            <p>uploaded by {{$user->name}}  <br> Phone No: {{$user->phone}} <br>Address:  {{$user->address}} <br> Product Price : ₦{{$product->price}}</p>
                                                            <a href="#" class="btn hide-icon ajax"><i class="fas fa-caret-right"></i><span>₦{{$product->price}}</span></a> 
                                                     
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endif
                                                    <!-- post-->
                                                    @endforeach
                                                    @endforeach
                                                </div>
                                            </div>
                                        </section>
                                     
                                    </div>
                                </div>
                           
                            </div>
                            <div class="fl-wrap limit-box"></div>
                           
                        </div>
                    </div>
                    <!-- content  end -->
                    <!--=============== footer ===============-->
                    <footer class="main-footer fl-wrap">
                        <!-- footer-wrap end-->
                        <div class="footer-wrap fl-wrap">
                            <!-- footer-inner-->
                            <div class="footer-inner">
                              
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
                       function welcome() {
                window.location.replace("{{ route('welcome') }}");
            }   
            function shop() {
                window.location.replace("{{ route('shop') }}");
            }     
            function login() {
                window.location.replace("{{ route('login') }}");
            }     
            setTimeout("pageRedirect()", 10000);
        </script>
        
    </body>


</html>