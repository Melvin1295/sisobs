<!DOCTYPE html>
<html>
<head>
    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ==========================
    	Title 
    =========================== -->
    <title>Supreme - Precision Business Theme</title>
    
    <!-- ==========================
    	Favicons 
    =========================== -->
    <link rel="shortcut icon" href="assets/icons/favicon.ico">
	<link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-touch-icon-114x114.png">
    
    <!-- ==========================
    	Fonts 
    =========================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/creative-brands.css" rel="stylesheet" type="text/css">
    <link href="assets/css/color-switcher.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
    <link href="assets/css/color/red.css" id="main-color" rel="stylesheet" type="text/css">

@section('base_url')
@show

@section('css-customize')
@show
   <!-- ==========================
    	SCROLL TOP - START 
    =========================== -->
    <div id="scrolltop" class="hidden-xs"><i class="fa fa-chevron-up"></i></div>
    <!-- ==========================
    	SCROLL TOP - END 
    =========================== -->
    
    <!-- ==========================
    	COLOR SWITCHER - START
    =========================== -->
    <div id="color-switcher">
        <div id="toggle-switcher"><i class="fa fa-gear"></i></div>
        <span>Color Scheme:</span>
        <ul class="list-unstyled list-inline">
            <li id="red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Red"></li>
            <li id="blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Blue"></li>
            <li id="orange" data-toggle="tooltip" data-placement="top" title="" data-original-title="Orange"></li>
            <li id="green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Green"></li>
            <li id="purple" data-toggle="tooltip" data-placement="top" title="" data-original-title="Purple"></li>
            <li id="light-blue" data-toggle="tooltip" data-placement="top" title="" data-original-title="Light Blue"></li>
            <li id="light-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Light Green"></li>
            <li id="brown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Brown"></li>
            <li id="yellow" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yellow"></li>
            <li id="pink" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pink"></li>
        </ul>
    </div>
  <header class="navbar navbar-default navbar-static-top">
    	<div class="container">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><img src="assets/images/logo.png" class="img-responsive" alt=""></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
                	<li class="active"><a href="index.html">Home</a></li>                    
                    <li class="dropdown megamenu">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pages <i class="fa fa-caret-down"></i></a>
                      	<ul class="dropdown-menu">
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                    <li><a href="index.html">Homepage - Default <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-2.html">Homepage - Project <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-3.html">Homepage - Event <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-4.html">Homepage - Video <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-5.html">Homepage - Coming Soon <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-6.html">Homepage - Classic <span class="label label-success">Updated</span></a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blogitem.html">Blog Item</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="galleryitem.html">Gallery Item</a></li>
                                    <li><a href="portfolio.html">Portfolio <span class="label label-primary">New</span></a></li>
                                    <li><a href="portfolioitem.html">Portfolio Item <span class="label label-primary">New</span></a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                	<li><a href="pricing.html">Pricing Plans</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="error403.html">Error 403</a></li>
                                    <li><a href="error404.html">Error 404</a></li>
                                    <li><a href="signup.html">Sign Up</a></li>
                                    <li><a href="signin.html">Sign In</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3 hidden-xs hidden-sm">
                            	<img src="assets/images/macbook.png" class="img-responsive" alt="">
                            </li>
                      	</ul>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Dropdown Example <i class="fa fa-caret-down"></i></a>
                      	<ul class="dropdown-menu">
                            <li><a href="#">Dropdown link #1</a></li>
                            <li><a href="#">Dropdown link #2</a></li>
                            <li><a href="#">Dropdown link #3</a></li>
                            <li><a href="#">Dropdown link #4</a></li>
                      	</ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <div class="navbar-right hidden-xs">
                	<form id="search-form" class="hidden-xs hidden-sm">
                    	<fieldset>
                            <div class="input-group">
                            	<input type="text" class="form-control">
                            	<span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                            </div>
                        </fieldset>
                    </form>
                	<ul class="list-unstyled list-inline" id="secondary-nav">
                    	<li><a href="signin.html">Sign In</a></li>
                        <li><a href="signup.html">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </header>
        </section>
    
     

    
    
  <div class="content-wrapper">
       @yield('content')        
  </div>
  

  <script src="/vendor/angular/angular.js"></script>
  <script src="/vendor/moment/moment.js"></script>
  <script src="/vendor/angular-route/angular-route.js"></script>
  <script src="/vendor/angular-sanitize/angular-sanitize.js"></script>
  <script src="/vendor/angular-ui-router/release/angular-ui-router.js"></script>
  <script src="/vendor/angular-socket-io/socket.js"></script>
  <script src="/js/app/routes.js"></script>
  <script src="/js/app/servicesglobal.js"></script>
  <script src="/vendor/angular-bootstrap/ui-bootstrap-tpls.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
 @section('js-customize')
 @show
 <!-- ==========================
    	FOOTER - START
    =========================== --> 
    <footer class="navbar">
    	<div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <p>© Supreme 2013 - 2015 All right reserved. Designed by <a href="http://pixelized.cz/" target="_blank">Pixelized Studio</a>.</p>
                </div>
                <div class="col-sm-4">
                    <ul class="brands brands-sm brands-circle brands-inline">
                    	<li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========================
    	FOOTER - END 
    =========================== -->