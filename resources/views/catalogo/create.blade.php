@extends('layouts.admin')

@section('content')
{!! Alert::render() !!}
@component('components.barra-titulo-light',['title'=>'Crear '.$id,'icon'=>'fa fa-table'])

@endcomponent
<div class="row">
    <div class="col-md-12">
        @component('components.portlet-light')
        {!! Form::open(['route'=>'catalogo.store','method'=>'POST']) !!}
            <div class="row">
                <div class="col-md-6">
                {!! Field::text('codigo',['label'=>'Codigo']) !!}
                </div><!--span-->
                <div class="col-md-6">
                {!! Field::text('nombre',['label'=>'Nombre']) !!}
                </div><!--span-->
            </div><!--row-->
            <div class="row">
                <div class="col-md-6">
                {!! Field::text('descripcion',['label'=>'Descripcion']) !!}
                </div><!--span-->
                <div class="col-md-3">
                {!! Field::text('valor',['label'=>'Valor']) !!}
                </div><!--span-->
                <div class="col-md-3">
                {!! Form::hidden('id',$id) !!}
                </div><!--span-->
            </div><!--row-->
            {!!Form::enviar('Guardar')!!}
            {!!Form::back(route('catalogo.show',$id))!!}
        {!! Form::close() !!}
		@endcomponent
	</div>
</div>
@endsection

@section('title','Escritorio')

