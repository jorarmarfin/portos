<?php

require __DIR__.'/home.route.php';
require __DIR__.'/catalogo.route.php';
require __DIR__.'/users.route.php';

Route::get('logitos', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Auth::routes();
