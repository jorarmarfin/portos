<?php

Route::group(['namespace'=>'Catalogo'], function() {
	Route::resource('catalogo','CatalogoController',['only'=>['index','show','edit','update','store']]);
	Route::get('activar/{tabla}/{id}/{sw}','CatalogoController@activate')->name('catalogo.activar');
	Route::get('create/{id}','CatalogoController@create')->name('catalogo.create');
	Route::get('delete/{id}','CatalogoController@delete')->name('catalogo.delete');
});
