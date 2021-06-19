<?php
// super admin Dasboard
Route::group(['middleware'=>['auth','superAdmin']],function(){

	Route::get('/super-admin', 'superAdmin\basicController@index')->name('super.admin');

});