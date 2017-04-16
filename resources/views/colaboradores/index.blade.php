@extends('layout')
@section('module')
Colaboradores
@stop
@section('base_url')
<base href="{{URL::to('/')}}/colaboradores"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="colaboradores">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/colaboradores/app.js"></script>
    <script src="/js/app/colaboradores/controllers.js"></script>

@stop

@stop