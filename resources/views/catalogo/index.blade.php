@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		@component('components.portlet-light')
			@slot('title','Tabla Catalogo')
			@slot('icon','fa fa-table')

            <table class="table table-bordered table-hover" id="Tabla">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> idtable </th>
                        <th> iditem </th>
                        <th> Codigo </th>
                        <th> Nombre </th>
                        <th> Descripcion </th>
                        <th> Valor </th>
                        <th> Activo </th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Lista as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->idtable }} </td>
                        <td> {{ $item->iditem }} </td>
                        <td> {{ $item->codigo }} </td>
                        <td> {{ $item->nombre }} </td>
                        <td> {{ $item->descripcion }} </td>
                        <td> {{ $item->valor }} </td>
                        <td> {{ $item->activo }} </td>
                        <td> {{ $item->id }} </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

		@endcomponent
	</div>
</div>
@endsection


@section('js-scripts')
<script>
$('#Tabla').dataTable({
    "language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "search": "Buscar :",
        "lengthMenu": "_MENU_ registros"
    },
    "bProcessing": true,
    "pagingType": "bootstrap_full_number",

});
</script>
@stop

@section('title','Catalogo')

