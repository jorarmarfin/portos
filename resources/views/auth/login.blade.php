@extends('layouts.login')

@section('content')
{!! Form::open(['route'=>'login','method'=>'POST']) !!}
@include('alerts.errors')
    <h3 class="form-title">Ingrese su cuenta</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter any username and password. </span>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
        <p></p>
        <button type="submit" class="btn green btn-block"> ENTRAR </button>
    </div>
    <div class="forget-password">
        <h4>Olvidaste tu contraseña ?</h4>
        <p> No se preocupe, haga clic
            <a href="javascript:;" id="forget-password"> aquí </a> para restablecer su contraseña. </p>
    </div>
{!! Form::close() !!}
@endsection
