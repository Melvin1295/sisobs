@extends('layoutpage')
@section('module')
Paginas
@stop
@section('base_url')
<base href="{{URL::to('/')}}/pages"/>

@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="pages">
    <div ng-view>
       
    </div>
</section>

@section('js-customize')
    <script src="/js/app/pages/app.js"></script>
    <script src="/js/app/pages/controllers.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="assets/js/typed.min.js"></script>
    <script src="assets/js/creative-brands.js"></script>
    <script src="assets/js/color-switcher.js"></script>
    <script src="assets/js/custom.js"></script>

@stop

@stop