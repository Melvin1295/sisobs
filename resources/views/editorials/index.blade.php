@extends('layout')
@section('module')
Editoriales
@stop
@section('base_url')
<base href="{{URL::to('/')}}/editorials"/>
@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="editorials">
    <div ng-view>

    </div>
</section>

@section('js-customize')
<script src="/js/app/editorials/app.js"></script>
    <script src="/js/app/editorials/controllers.js"></script>

@stop

@stop