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

Route::get('/', function () {
    return view('welcome');
});
Route::get('user/{id}', function($userId) {
   echo $userId;
});
Route::get('find/{fid?}', function($findId = null){
    echo 'Congrats '. $findId;
});
Route::get('test/{id1}/{id2}', 'TestsController@user');
Route::get('id/{id?}', 'UserController@user');
Route::get('form', 'FormController@user');
Route::post('form', 'FormController@user');
