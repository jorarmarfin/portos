<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Auth::routes();
Route::get('/home', 'Admin\AdminController@index')->name('home');
Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');