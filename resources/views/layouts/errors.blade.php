<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title','Sistema Base')</title>
    <!-- BEGIN PAGE TOP STYLES -->
    @yield('styles-plugins-first')
    <!-- END PAGE TOP STYLES -->
	@include('layouts.partials.styles-mandatory')

        <!-- BEGIN THEME GLOBAL STYLES -->
	   @include('layouts.partials.styles-global')

        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('assets/pages/css/error.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
</head>
<body class="page-404-3">
	<div class="page-inner">
        <img src="{{ asset('assets/pages/media/pages/earth.jpg') }}" class="img-responsive" alt="">
    </div>
    <div class="container error-404">
        <h1>@yield('numero-error','404')</h1>
        <h2>Houston, tenemos un problema.</h2>
        <p>@yield('mensaje-error','En realidad, la página que está buscando no existe.')  </p>
        <p>
            <a href="{{ route('home.index') }}" class="btn red btn-outline"> Regresar a inicio </a>
            <br> </p>
    </div>
	<!-- BEGIN CORE PLUGINS -->
	@include('layouts.partials.js-core')
    @yield('js-plugins')
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src={{asset("assets/global/scripts/app.min.js")}} type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src={{asset("assets/layouts/layout/scripts/layout.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/layouts/layout/scripts/demo.min.js")}} type="text/javascript"></script>
    <script src={{asset("assets/layouts/global/scripts/quick-sidebar.min.js")}} type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <!-- BEGIN PLUGINS SCRIPTS -->
    {!! Html::script(asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')) !!}
    {!! Html::script(asset('assets/global/plugins/bootstrap-table/bootstrap-table.min.js')) !!}
    {!! Html::script(asset('assets/global/plugins/select2/js/select2.full.min.js')) !!}
    {!! Html::script(asset('assets/global/plugins/select2/js/i18n/es.js')) !!}
    {!! Html::script(asset('assets/global/scripts/datatable.js')) !!}
    {!! Html::script(asset('assets/global/plugins/datatables/datatables.min.js')) !!}
    {!! Html::script(asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')) !!}
    {!! Html::script(asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')) !!}
    @yield('js-scripts')
    <!-- END PLUGINS SCRIPTS -->
    <!-- BEGIN PERSONAL SCRIPTS -->
    {!! Html::script(asset('js/midatatable.js')) !!}
    <!-- END PERSONAL SCRIPTS -->
</body>
