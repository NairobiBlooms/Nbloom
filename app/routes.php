<?php


Route::get('/', 'HomeController@showWelcome');
Route::controller('make','StoreController');





/*      var_dump(Input::get('months'));*/
