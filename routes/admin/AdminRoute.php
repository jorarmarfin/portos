<?php

Route::get('/admin', 'AdminController@index')->name('index');

/*Route::group(['namespace'=>'Usuarios'], function() {
	Route::resource('usuarios','UsuariosController',['names'=>'admin.usuarios','only'=>['index','show','edit','update','store']]);
	Route::get('activar/{tabla}/{id}/{sw}','UsuariosController@activate')->name('admin.usuarios.activar');
	Route::get('usuarios-create/','UsuariosController@create')->name('admin.usuarios.create');
	Route::get('usuarios-delete/{id}','UsuariosController@delete')->name('admin.usuarios.delete');
});*/