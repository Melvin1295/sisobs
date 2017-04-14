@extends('layout')
@section('module')
Slider
@stop
@section('base_url')
<base href="{{URL::to('/')}}/sliders"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="sliders">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/sliders/app.js"></script>
    <script src="/js/app/sliders/controllers.js"></script>

@stop

@stop