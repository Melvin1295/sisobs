@extends('layout')
@section('module')
Indicadores
@stop
@section('base_url')
<base href="{{URL::to('/')}}/indicators"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="indicators">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/indicators/app.js"></script>
    <script src="/js/app/indicators/controllers.js"></script>

@stop

@stop