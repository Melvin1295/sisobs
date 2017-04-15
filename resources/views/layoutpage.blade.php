<!DOCTYPE html>
<html ng-app="pages">
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
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/creative-brands.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/color-switcher.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/color/red.css') }}" rel="stylesheet">

@section('base_url')
@show

@section('css-customize')
@show
   <!-- ==========================
    	SCROLL TOP - START 
    =========================== -->
    <body >
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
  <header class="navbar navbar-default navbar-static-top" >
    	<div class="container">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><img src="assets/images/logo.png" class="img-responsive" alt=""></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
                	<li class="active" ><a href="/pages" onclick="myFunction()">Home</a></li>                    
                    <li class="dropdown megamenu">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Pages <i class="fa fa-caret-down"></i></a>
                      	<ul class="dropdown-menu">
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                    <li><a href="index.html" onclick="myFunction()">Homepage - Default <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-2.html">Homepage - Project <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-3.html">Homepage - Event <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-4.html">Homepage - Video <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-5.html">Homepage - Coming Soon <span class="label label-primary">New</span></a></li>
                                    <li><a href="homepage-6.html">Homepage - Classic <span class="label label-success">Updated</span></a></li>
                                </ul>
                            </li>
                            <li class="col-sm-4 col-md-3">
                            	<ul class="list-unstyled">
                                    <li><a href="/pages/blog" onclick="myFunction()">Blog</a></li>
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

                        <script>
                            function myFunction() {
                                //alert("hola");
                               document.write('<?php $ruta=$_SERVER['REQUEST_URI']; ?>');
                            }
                        </script>
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
     
    <?php $ruta=$_SERVER['REQUEST_URI']; ?>
    
    @if($ruta == ('/pages') )
     <!-- ==========================
        JUMBOTRON - START
    =========================== --> 
    <section class="jumbotron jumbotron-carousel">
        <div id="homepage-1-carousel" class="nav-inside owl-animation">
            
            <!-- SLIDESHOW ITEM - START -->
            <div class="item slide-1">
                <div class="slide-mask"></div>
                <div class="slide-body">
                    <div class="container">
                        <h2 class="animation top-to-bottom slow">Observatorio</h2>
                        <h3 class="animation bottom-to-top slow delay-1">de Salud Sexual Reproductiva</h3>
                        <a href="https://wrapbootstrap.com/theme/supreme-precision-business-theme-WB08P8D88?ref=themejumbo" class="btn btn-normal animation bottom-to-top slow delay-2" target="_blank">Más Información</a>
                    </div>
                </div>
            </div>
            <!-- SLIDESHOW ITEM - END -->
            
            <!-- SLIDESHOW ITEM - START -->
            <div class="item slide-2">
                <div class="slide-mask"></div>
                <div class="slide-body">
                    <div class="container">
                        <h2 class="animation right-to-left delay-1">Salud Sexual <span class="color">Reproductiva</span></h2>
                        <ul class="list-unstyled">
                            <li class="animation right-to-left delay-2">Anticoncepción de emergencia</li>
                            <li class="animation right-to-left delay-3">Embarazo adolescente y Planificación Familiar</li>
                            <li class="animation right-to-left delay-3">Nacimientos prematuros y Mortalidad materna</li>
                            <li class="animation right-to-left delay-4">VIH/SIDA y ETS</li>
                            <li class="animation right-to-left delay-4">Violencia contra la mujer</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- SLIDESHOW ITEM - END -->
            
            <!-- SLIDESHOW ITEM - START -->
            <div class="item slide-3">
                <div class="slide-mask"></div>
                <div class="slide-body">
                    <div class="container">
                        <div class="row">
                        <div class="col-sm-12 col-md-11 col-lg-10">
                        <h2 class="animation top-to-bottom delay-1">Información Y Conocimiento</h2>
                        <p class="animation bottom-to-top delay-2">Promoción de la salud y de los derechos sexuales y reproductivos desde una perspectiva de derechos humanos, de equidad social y de género.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDESHOW ITEM - END -->
            
        </div>
    </section>
    <!-- ==========================
        JUMBOTRON - END 
    =========================== --> 
     @endif 
     

    
    
  <div class="content-wrapper">
       @yield('content')  
     @if($ruta == ('/pages') )
    <!-- ==========================
        TESTIMONIALS - START
    =========================== -->
    <section class="content-item" id="testimonials">
        <div class="container">
            <div class="content-headline">
                <h2>Equipo de Profesionales</h2>
                <h3>Especialistas al Servicio de las Mujeres del Perú.</h3>
            </div>
            <div id="testimonials-carousel">
                
                <!-- TESTIMONIAL ITEM - START -->
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-2 col-sm-offset-1 col-md-offset-2">
                            <img src="assets/images/avatar_04.jpg" class="img-responsive img-circle" alt="">
                        </div>
                        <div class="col-xs-9 col-sm-7 col-md-6">
                            <p>Es una breve descripcion del perfil del profesional al servicio de la Salud Sexual Repro.</p>
                            <h4>John Doe</h4>
                            <span>Freelance Web Developer</span>
                        </div>
                    </div>
                </div>
                <!-- TESTIMONIAL ITEM - END -->
                
                <!-- TESTIMONIAL ITEM - START -->
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-2 col-sm-offset-1 col-md-offset-2">
                            <img src="assets/images/avatar_02.jpg" class="img-responsive img-circle" alt="">
                        </div>
                        <div class="col-xs-9 col-sm-7 col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor dictum nibh, ac gravida orci porttitor et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam posuere magna a dapibus luctus.</p>
                            <h4>Paul Smith</h4>
                            <span>CEO of Company</span>
                        </div>
                    </div>
                </div>
                <!-- TESTIMONIAL ITEM - END -->
                
                <!-- TESTIMONIAL ITEM - START -->
                <div class="item">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-2 col-sm-offset-1 col-md-offset-2">
                            <img src="assets/images/avatar_03.jpg" class="img-responsive img-circle" alt="">
                        </div>
                        <div class="col-xs-9 col-sm-7 col-md-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor dictum nibh, ac gravida orci porttitor et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam posuere magna a dapibus luctus.</p>
                            <h4>Kate Moore</h4>
                            <span>Art Director</span>
                        </div>
                    </div>
                </div>
                <!-- TESTIMONIAL ITEM - END -->
                
            </div>
        </div>
    </section>
    <!-- ==========================
        TESTIMONIALS - END
    =========================== --> 

    <!-- ==========================
        RECENT POSTS - START
    =========================== -->
    <section class="content-item" id="recent-posts">
        <div class="container">
            <div class="content-headline">
                <h2>Recent Posts</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
            </div>
            <div class="row">
                
                <!-- RECENT POST - START -->
                <div class="col-sm-4">
                    <div class="recent-post">
                        <h4><a href="blogitem.html">Introducing WordPress 4.0 “Benny”</a></h4>
                        <div class="date">27/02/2014</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, quis hendrerit.</p>
                        <a href="blogitem.html" class="btn btn-normal">Read More</a>
                    </div>
                </div>
                <!-- RECENT POST - START -->
                
                <!-- RECENT POST - START -->
                <div class="col-sm-4">
                    <div class="recent-post">
                        <h4><a href="blogitem.html">Nature Center: Earth Day Festival</a></h4>
                        <div class="date">18/02/2014</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, quis hendrerit.</p>
                        <a href="blogitem.html" class="btn btn-normal">Read More</a>
                    </div>
                </div>
                <!-- RECENT POST - START -->
                
                <!-- RECENT POST - START -->
                <div class="col-sm-4">
                    <div class="recent-post">
                        <h4><a href="blogitem.html">Two New Stores Set to Open</a></h4>
                        <div class="date">05/02/2014</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In venenatis lacus ac semper viverra. Etiam consequat odio sollicitudin metus condimentum, quis hendrerit.</p>
                        <a href="blogitem.html" class="btn btn-normal">Read More</a>
                    </div>
                </div>
                <!-- RECENT POST - START -->
                
            </div>
        </div>
    </section>
    <!-- ==========================
        RECENT POSTS - END
    =========================== -->
    @endif
    
  </div>
  
</body>
  <script src="{{ asset('/vendor/angular/angular.js') }}"></script>
  <script src="/vendor/moment/moment.js"></script>
  <script src="/vendor/angular-route/angular-route.js"></script>
  <script src="/vendor/angular-sanitize/angular-sanitize.js"></script>
  <script src="/vendor/angular-ui-router/release/angular-ui-router.js"></script>
  <script src="/vendor/angular-socket-io/socket.js"></script>
  <script src="/js/app/routes.js"></script>
  <script src="/js/app/servicesglobal.js"></script>
  <script src="/vendor/angular-bootstrap/ui-bootstrap-tpls.js"></script>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.min.js') }}"></script>
    <script src="{{ asset('assets/js/creative-brands.js') }}"></script>
    <script src="{{ asset('assets/js/color-switcher.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
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