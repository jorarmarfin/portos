<?php

Route::get('/', 'HomeController@index')->name('home.index');

Auth::routes();
Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::namespace('Admin')->middleware('auth')->name('admin.')->group(function(){
	require __DIR__.'/admin/AdminRoute.php';
});
Route::namespace('Admin\Catalogo')->middleware('auth')->name('admin.')->group(function(){
	require __DIR__.'/catalogo/CatalogoRoute.php';
});
Route::namespace('Admin\Profile')->middleware('auth')->name('admin.')->group(function(){
	require __DIR__.'/profile/ProfileRoute.php';
});
