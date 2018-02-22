<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Auth::routes();
Route::get('/home', 'Admin\AdminController@index')->name('home');


Route::namespace('Admin')->middleware('auth')->name('admin.')->group(function(){
	require __DIR__.'/admin/AdminRoute.php';

});
Route::namespace('Admin\Catalogo')->middleware('auth')->name('admin.')->group(function(){
	require __DIR__.'/catalogo/CatalogoRoute.php';
});
