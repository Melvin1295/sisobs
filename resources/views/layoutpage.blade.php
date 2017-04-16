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
                <a href="/pages" onclick="myFunction()" class="navbar-brand"><img src="/images/logotipo.png" class="img-responsive" alt=""></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav">
                	<li class="active" ><a href="/pages" onclick="myFunction()">Inicio</a></li>                  
                   
                    <li><a href="/pages/blog" onclick="myFunction()">Publicaciones</a></li>
                    <li><a href="/pages/indicadores" onclick="myFunction()">Indicadores</a></li>
                    <li><a href="/pages/editoriales" onclick="myFunction()">Editoriales</a></li>
                    <li><a href="/pages/contact" onclick="myFunction()">Contactenos</a></li>                        
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
                	
                </div>
            </div>
        </div>
                        <script>
                            function myFunction() {
                                //alert("hola");
                               document.write('<?php $ruta=$_SERVER['REQUEST_URI']; ?>');
                            }
                        </script>
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
        RECENT POSTS - END
    =========================== -->
    @endif
    @if($ruta == ('/pages/contact') )
           <section class="content-item grey" id="contact">
                <div class="container">
                    <div id="googleMap" style="top:-80px;margin-bottom:-100px; width:100%;height:300px;"></div>

                    <script>
                        function myMap() {
                            var mapProp = {
                                center: new google.maps.LatLng(-12.08462, -77.06774510000002),
                                zoom: 15,
                            };

                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                            var marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(-12.08462, -77.06774510000002),
                                title: 'Hello World!'
                            });
                        }
                    </script>       
                </div>  
    
                </div>  
     @endif
  </div>
  
</body>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbF3aN2aKHhnjrRjSHhUlBPzN53whHB60&callback=myMap"></script>
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
   <script src="/js/app/pages/app.js"></script>
    <script src="/js/app/pages/controllers.js"></script>

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