@extends('layoutpage')
@section('module')
Paginas
@stop
@section('base_url')
<base href="{{URL::to('/')}}/pages"/>

@stop
@section('css-customize')
@stop
@section('content')

<section ng-app="pages">
    <div ng-view>
       
    </div>
</section>

@section('js-customize')
    <script src="/js/app/pages/app.js"></script>
    <script src="/js/app/pages/controllers.js"></script>
 

@stop

@stop