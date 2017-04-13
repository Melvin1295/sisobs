@extends('layout')
@section('module')
Publicaciones
@stop
@section('base_url')
<base href="{{URL::to('/')}}/publishers"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="publishers">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/publishers/app.js"></script>
    <script src="/js/app/publishers/controllers.js"></script>

@stop

@stop