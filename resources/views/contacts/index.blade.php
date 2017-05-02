@extends('layout')
@section('module')
Indicadores
@stop
@section('base_url')
<base href="{{URL::to('/')}}/contacts"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="contacts">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/contacts/app.js"></script>
    <script src="/js/app/contacts/controllers.js"></script>

@stop

@stop