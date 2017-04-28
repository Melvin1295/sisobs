@extends('layout')
@section('module')
Tipo Medicamentos
@stop
@section('base_url')
<base href="{{URL::to('/')}}/tipomedicamentos"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="tipomedicamentos">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/tipomedicamentos/app.js"></script>
    <script src="/js/app/tipomedicamentos/controllers.js"></script>

@stop

@stop