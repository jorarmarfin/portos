<?php

Route::group(['namespace'=>'Catalogo'], function() {
	Route::resource('catalogo','CatalogoController');
	Route::get('activar/{tabla}/{id}/{sw}','CatalogoController@activate')->name('catalogo.activar');
});
