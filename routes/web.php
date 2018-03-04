<?php

Route::get('/', 'Homecontroller@index')->name('home.index');

Auth::routes();
Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::namespace('Admin')->middleware('auth')->name('admin.')->group(function(){
	require __DIR__.'/admin/AdminRoute.php';
});
Route::namespace('Admin\Catalogo')->middleware('auth')->name('admin.')->group(function(){
	require __DIR__.'/catalogo/CatalogoRoute.php';
});
