@extends('layouts.login4')


@section('login')
@include('layouts.alerts.errors')
{!! Form::open(['route'=>'login','method'=>'POST','class'=>'m-login__form m-form']) !!}
        <div class="form-group m-form__group">
            {!! Form::text('username', '', ['placeholder'=>'username','class'=>'form-control m-input','autocomplete'=>'off']) !!}
        </div>
        <div class="form-group m-form__group">
            {!! Form::password('password', ['placeholder'=>'Password','class'=>'form-control m-input m-login__form-input--last']) !!}

        </div>
        <div class="row m-login__form-sub">
            <div class="col m--align-left m-login__form-left">
                <label class="m-checkbox  m-checkbox--light">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Recuerdame
                    <span></span>
                </label>
            </div>
            <div class="col m--align-right m-login__form-right">
                <a href="javascript:;" id="m_login_forget_password" class="m-link">
                    ¿ Olvidaste tu clave ?
                </a>
            </div>
        </div>
        <div class="m-login__form-action">
            {!! Form::submit('Ingresar',['class'=>'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn']) !!}
        </div>
{!! Form::close() !!}
@endsection