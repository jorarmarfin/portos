@extends('layouts.admin')

@section('content')
					<header class="page-header">
						<h2>Perfil de usuario</h2>

						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="{{ route('admin.index') }}">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Perfil de usuario</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->

					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">

							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
										<img src="{{ $user->foto }}" class="rounded img-fluid" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">{{ $user->name_pila }}</span>
											<span class="thumb-info-type">{{ $user->role }}</span>
										</div>
									</div>
								</div>
							</section>

						</div>
						<div class="col-lg-8 col-xl-9">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#edit" data-toggle="tab">Datos Usuario</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="edit" class="tab-pane active">
										{!! Form::model($user,['route'=>['admin.profile.update',$user],'method'=>'PUT','class'=>'p-3']) !!}
											<div class="row form-group">
							                	<div class="col-md-6">{!! Field::text('name',['label'=>'Nombre de usuario']) !!}</div>
							                	<div class="col-md-6">{!! Field::text('email',['label'=>'Email de usuario']) !!}</div>
							                </div><!--row-->
							                {!! Field::select('idrole',$roles,$user->idrole,['label'=>'Rol de usuario','empty'=>'Seleccionar']) !!}

											<hr class="dotted tall">

											<h4 class="mb-3">Cambiar contraseña</h4>
											<div class="form-row">
												<div class="form-group col-md-6">
													{!! Field::password('password',['label'=>'Nueva Clave']) !!}
												</div>
												<div class="form-group col-md-6">
													{!! Field::password('password_confirmation',['label'=>'Ingresar de nuevo la clave']) !!}
												</div>
											</div>

											<div class="form-row">
												<div class="col-md-12 text-right mt-3">
													<button class="btn btn-primary modal-confirm">Guardar</button>
												</div>
											</div>

										{!! Form::close() !!}
									</div>
								</div>
							</div>
						</div>

					</div>
@endsection