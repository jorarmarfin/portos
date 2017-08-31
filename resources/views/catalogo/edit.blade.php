@extends('layouts.admin')

@section('content')
{!! Alert::render() !!}
@component('components.barra-titulo-light',['title'=>'Tabla '.$id,'icon'=>'fa fa-table'])
    <a href="javascript:;" class="icon-btn">
        <i class="fa fa-plus"></i>
        <div> Nuevo </div>
    </a>
@endcomponent
<div class="row">
    <div class="col-md-12">
        @component('components.portlet-light')
        {!! Form::model($catalogo,['route'=>['catalogo.update',$catalogo],'method'=>'PUT']) !!}
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

                </div><!--span-->
            </div><!--row-->
            {!!Form::enviar('Actualizar')!!}
            {!!Form::back(route('catalogo.show',$id))!!}
        {!! Form::close() !!}
		@endcomponent
	</div>
</div>
@endsection

@section('title','Catalogo')

@section('menu-sider')
@include('menu.sider')
@stop