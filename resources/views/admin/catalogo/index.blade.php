@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col">
		<section class="card">
			<header class="card-header">
				<div class="card-actions">
					<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
					<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
				</div>

				<h2 class="card-title">Maestro</h2>
			</header>
			<div class="card-body">
				<table class="table table-bordered table-striped table-responsive-lg mb-0 mytable">
				    <thead>
				        <tr>
				            <th> Id </th>
				            <th> IdTable </th>
				            <th> IdItem </th>
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
				        <tr >
				            <td> {{ $item->id }} </td>
				            <td> {{ $item->idtable }} </td>
				            <td> {{ $item->iditem }} </td>
				            <td> {{ $item->codigo }} </td>
				            <td> {{ $item->nombre }} </td>
				            <td> {{ $item->descripcion }} </td>
				            <td> {{ $item->valor }} </td>
				            <td>
							@if ($item->activo)
								<a href="#" class="badge badge-info">Activo</a>
				            @else
				            	<a href="#" class="badge badge-danger">Inactivo</a>
							@endif
				            </td>
				            <td>
				            	<a href="{{--route('admin.miembro.edit',$item->id)--}}" title="Editar" class="on-default">
									<i class="fa fa-pencil"></i>
								</a>
								<a href="{{--route('admin.miembro.show',$item->id)--}}" title="Eliminar" class="on-default">
									<i class="fa fa-trash"></i>
								</a>
				            </td>
				        </tr>
					@endforeach
				    </tbody>
				</table>
			</div>
		</section>
	</div>
</div>
@endsection

@section('js-scripts')
<script>
$('.mytable').dataTable({
	"language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "lengthMenu": "_MENU_ registros",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Ultimo"
        },
    },

});
</script>
@stop




