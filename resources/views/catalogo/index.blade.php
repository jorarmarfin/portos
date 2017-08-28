@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		@component('components.portlet-light')
			@slot('title','Tabla Catalogo')
			@slot('icon','fa fa-table')

            <table class="table  MyTabla">
                <thead>
                    <tr>
                        <th> Codigo </th>
                        <th> Nombre </th>
                        <th> Fecha </th>
                        <th> Observacion </th>
                        <th> Activo </th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

		@endcomponent
	</div>
</div>
@endsection


@section('js-scripts')
<script>

</script>
@stop


@section('title')
Escritorio
@endsection

@section('menu-sider')
@include('menu.sider')
@stop