<?php
//admin Dasboard
Route::group(['middleware'=>['auth','admin']],function(){

	Route::get('/admin', 'admin\basicController@index')->name('admin');
});