@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ver posts</div>

                <div class="panel-body">
{!! Form::open(['route'=>'post.store','method'=>'POST']) !!}
                {!! Field::text('nombre',null,['label'=>'Ingresar nombre'])!!}
{!!Form::submit('Guardar')!!}
{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
