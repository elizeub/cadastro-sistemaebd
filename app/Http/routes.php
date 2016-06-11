<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::auth();

Route::get('/home', 'HomeController@index');

//sala Resources
/********************* sala ***********************************************/
Route::resource('sala','\App\Http\Controllers\SalaController');
Route::post('sala/{id}/update','\App\Http\Controllers\SalaController@update');
Route::get('sala/{id}/delete','\App\Http\Controllers\SalaController@destroy');
Route::get('sala/{id}/deleteMsg','\App\Http\Controllers\SalaController@DeleteMsg');
/********************* sala ***********************************************/


//atividade Resources
/********************* atividade ***********************************************/
Route::resource('atividade','\App\Http\Controllers\AtividadeController');
Route::post('atividade/{id}/update','\App\Http\Controllers\AtividadeController@update');
Route::get('atividade/{id}/delete','\App\Http\Controllers\AtividadeController@destroy');
Route::get('atividade/{id}/deleteMsg','\App\Http\Controllers\AtividadeController@DeleteMsg');
/********************* atividade ***********************************************/



//matricula Resources
/********************* matricula ***********************************************/
Route::resource('matricula','\App\Http\Controllers\MatriculaController');
Route::post('matricula/{id}/update','\App\Http\Controllers\MatriculaController@update');
Route::get('matricula/{id}/delete','\App\Http\Controllers\MatriculaController@destroy');
Route::get('matricula/{id}/deleteMsg','\App\Http\Controllers\MatriculaController@DeleteMsg');
/********************* matricula ***********************************************/
