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
    return view('auth.login');
})->middleware('auth');

Route::resource('user','UserController');

Route::post('usersu',[
			'uses' => 'UserController@actualiza',
			'as'   => 'user.actualiza'
]);

Route::get('userse',[
			'uses' => 'UserController@view',
			'as'   => 'user.view'
]);

Route::get('user/{id}/destroy',[
			'uses' => 'UserController@destroy',
			'as'   => 'user.destroy'
]);

Route::resource('asignatura','AsignaturaController');
Route::resource('calificaciones','CalificacionController');
Route::resource('grupo','GrupoController');
Route::resource('perido','PeriodoController');
Route::resource('relacion_control','RelacionControlController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
