@extends('layout')
@section('module')
Medicamentos
@stop
@section('base_url')
<base href="{{URL::to('/')}}/medicamentos"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="medicamentos">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/medicamentos/app.js"></script>
    <script src="/js/app/medicamentos/controllers.js"></script>

@stop

@stop