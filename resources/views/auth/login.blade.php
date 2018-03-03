@extends('layouts.login')


@section('login')
@include('layouts.alerts.errors')
{!! Form::open(['route'=>'login','method'=>'POST','class'=>'m-login__form m-form']) !!}
        <div class="form-group mb-3">
            <label>Username</label>
            <div class="input-group input-group-icon">
                {!! Form::text('username', '', ['placeholder'=>'username','class'=>'form-control form-control-lg']) !!}
                <span class="input-group-addon">
                    <span class="icon icon-lg">
                        <i class="fa fa-user"></i>
                    </span>
                </span>
            </div>
        </div>
        <div class="form-group mb-3">
            <div class="clearfix">
                <label class="float-left">Password</label>
                <a href="pages-recover-password.html" class="float-right">Olvidaste tu clave?</a>
            </div>
            <div class="input-group input-group-icon">
                {!! Form::password('password', ['placeholder'=>'Password','class'=>'form-control form-control-lg']) !!}
                <span class="input-group-addon">
                    <span class="icon icon-lg">
                        <i class="fa fa-lock"></i>
                    </span>
                </span>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="checkbox-custom checkbox-default">
                        <input id="RememberMe" name="rememberme" type="checkbox"/>
                        <label for="RememberMe">Recuerdame</label>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    {!! Form::submit('Ingresar',['class'=>'btn btn-primary mt-2']) !!}
                </div>
            </div>
{!! Form::close() !!}
@endsection