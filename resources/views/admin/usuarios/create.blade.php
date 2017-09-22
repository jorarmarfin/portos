@extends('layouts.admin')

@section('content')
{!! Alert::render() !!}
@component('components.barra-titulo-light',['title'=>'Usuarios','icon'=>'fa fa-table'])
	<a href="{{ route('admin.usuarios.index') }}" class="icon-btn">
        <i class="fa fa-mail-reply"></i>
        <div> Regresar </div>
    </a>
@endcomponent
<div class="row">
    <div class="col-md-12">
        @component('components.portlet-light')
		{!! Form::open(['route'=>'admin.usuarios.store','method'=>'POST','files'=>'true']) !!}
			{!! Field::text('name',['label'=>'Nombre de Usuario','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth3']) !!}
			{!! Field::text('username',['label'=>'Username','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth3']) !!}
			{!! Field::text('email',['label'=>'Email','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth3']) !!}
			{!! Field::password('password',['label'=>'Contraseña','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth3']) !!}
			{!! Field::text('idrole',['label'=>'Rol','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth3']) !!}

			<div class="row">
				<div class="col-md-3"></div>
            	<div class="col-md-9">
				    <button type="submit" class="btn btn-default">
				    	<i class="fa fa-save"></i>
				        <div> Guardar </div>
				    </button>
            	</div><!--span-->
            </div><!--row-->
		{!! Form::close() !!}
		@endcomponent
	</div>
</div>
@endsection


@section('title','admin>usuarios>create')
