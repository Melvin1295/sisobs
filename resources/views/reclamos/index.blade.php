@extends('layout')
@section('module')
Reclamos
@stop
@section('base_url')
<base href="{{URL::to('/')}}/reclamos"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="reclamos">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/reclamos/app.js"></script>
    <script src="/js/app/reclamos/controllers.js"></script>

@stop

@stop