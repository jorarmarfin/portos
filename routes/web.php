<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('home', 'HomeController@index')->name('home.index');
Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


require __DIR__.'/catalogo/CatalogoRoute.php';


