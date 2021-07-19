<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/billReciept','RecieptController@index');

Route::get('/getPrice/{id}','RecieptController@getPrice');
