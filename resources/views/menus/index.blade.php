@extends('layout')
@section('module')
Menus
@stop
@section('base_url')
<base href="{{URL::to('/')}}/menus"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="menus">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/menus/app.js"></script>
    <script src="/js/app/menus/controllers.js"></script>

@stop

@stop