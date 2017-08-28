<?php

Route::group(['namespace'=>'Catalogo'], function() {
	Route::resource('catalogo','CatalogoController');
});
