@extends('layout')
@section('module')
Slider
@stop
@section('base_url')
<base href="{{URL::to('/')}}/provinces"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="provinces">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/provinces/app.js"></script>
    <script src="/js/app/provinces/controllers.js"></script>

@stop

@stop