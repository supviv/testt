<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',"HomeController@index" 
);


Route::get('/chat', function () {
    return view('chat');
});
Route::post('/',"HomeController@create" 
);


Route::get('/admin/{session_id}', 'AdminController@index');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/{session_id}', 'AdminController@sendMessage');
Route::post('/admin', 'AdminController@sendMessage');

//Route::get('/admin/{session_id}', 'AdminController@fetchMessages');

Route::get('admin/{session_id}/messages ', 'AdminController@fetchMessages');









