@extends('layout')
@section('module')
Menus
@stop
@section('base_url')
<base href="{{URL::to('/')}}/excels"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="excels">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/excels/app.js"></script>
    <script src="/js/app/excels/controllers.js"></script>

@stop

@stop