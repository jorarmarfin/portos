@extends('layouts.admin')

@section('content')
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Catalogo <small>portlet sub title</small>
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
		<table class="table m-table table-striped m-table--head-bg-success">
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
			@foreach ($Lista as $item)
		        <tr >
		            <td> {{ $item->codigo }} </td>
		            <td> {{ $item->nombre }} </td>
		            <td> {{ $item->fecha }} </td>
		            <td>
					@if ($item->activo)
						<a href="#" class="label label-sm label-info">Activo</a>
		            @else
		            	<a href="#" class="label label-sm label-danger">Inactivo</a>
					@endif
		            </td>
		            <td> {{ $item->observacion }} </td>
		            <td>
		            	<a href="{{--route('admin.miembro.edit',$item->id)--}}" title="Editar"class="btn btn-icon-only green-haze">
							<i class="fa fa-edit"></i>
						</a>
						<a href="{{--route('admin.miembro.show',$item->id)--}}" title="Eliminar" class="btn -btn-icon-only red">
							<i class="fa fa-trash"></i>
						</a>
						<a href="{{--route('credentials.cne.list',$item->id)--}}" title="Lista" class="btn -btn-icon-only green-jungle">
							<i class="fa fa-eye"></i>
						</a>
		            </td>
		        </tr>
			@endforeach
		    </tbody>
		</table>
	</div>
</div>
@endsection