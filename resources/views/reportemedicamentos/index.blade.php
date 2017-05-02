@extends('layout')
@section('module')
Reporte Medicamentos
@stop
@section('base_url')
<base href="{{URL::to('/')}}/reportemedicamentos"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="reportemedicamentos">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/reportemedicamentos/app.js"></script>
    <script src="/js/app/reportemedicamentos/controllers.js"></script>

@stop

@stop