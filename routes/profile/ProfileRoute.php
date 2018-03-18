<?php

Route::view('profile','profile.index')->name('profile.index');
Route::put('profile/update/{id}','ProfileController@update')->name('profile.update');
