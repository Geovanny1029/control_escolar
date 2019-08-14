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

Route::post('usereditasub',[
			'uses' => 'UserController@actualizasub',
			'as'   => 'user.actualizasub'
]);


Route::get('userse',[
			'uses' => 'UserController@view',
			'as'   => 'user.view'
]);

Route::get('usereditcalificaciones',[
			'uses' => 'UserController@viewsub',
			'as'   => 'user.viewsub'
]);

Route::get('usermaestro',[
			'uses' => 'UserController@vistam',
			'as'   => 'user.vistam'
]);

Route::get('useralumno',[
			'uses' => 'UserController@vistaal',
			'as'   => 'user.vistaal'
]);

Route::get('usermaestrogrupo/{id}','UserController@grupoM');

Route::get('useralumnogrupo/{id}','UserController@grupoAl');

Route::get('usermaestrogrupoasignatura/{id}','UserController@asignaturaM');

Route::get('useralumnocalificacion/{id}','UserController@calificacionMat');

Route::get('Calificacion/{id}','UserController@calificacionA');

Route::get('user/{id}/destroy',[
			'uses' => 'UserController@destroy',
			'as'   => 'user.destroy'
]);

Route::post('user/calificaciones',[
			'uses' => 'UserController@storesub',
			'as'   => 'user.storesub'
]);


Route::resource('asignatura','AsignaturaController');
Route::post('asignaturasu',[
			'uses' => 'AsignaturaController@actualiza',
			'as'   => 'asignatura.actualiza'
]);

Route::get('asignaturase',[
			'uses' => 'AsignaturaController@view',
			'as'   => 'asignatura.view'
]);

Route::get('asignatura/{id}/destroy',[
			'uses' => 'AsignaturaController@destroy',
			'as'   => 'asignatura.destroy'
]);
Route::resource('calificaciones','CalificacionController');
Route::resource('grupo','GrupoController');

Route::post('gruposu',[
			'uses' => 'GrupoController@actualiza',
			'as'   => 'grupo.actualiza'
]);

Route::get('grupose',[
			'uses' => 'GrupoController@view',
			'as'   => 'grupo.view'
]);

Route::get('grupo/{id}/destroy',[
			'uses' => 'GrupoController@destroy',
			'as'   => 'grupo.destroy'
]);
Route::resource('periodo','PeriodoController');

Route::post('periodosu',[
			'uses' => 'PeriodoController@actualiza',
			'as'   => 'periodo.actualiza'
]);

Route::get('periodose',[
			'uses' => 'PeriodoController@view',
			'as'   => 'periodo.view'
]);

Route::get('periodo/{id}/destroy',[
			'uses' => 'PeriodoController@destroy',
			'as'   => 'periodo.destroy'
]);
Route::resource('relacion_control','RelacionControlController');

Route::post('relacion_controlsu',[
			'uses' => 'RelacionControlController@actualiza',
			'as'   => 'relacion_control.actualiza'
]);

Route::get('relacion_controlse',[
			'uses' => 'RelacionControlController@view',
			'as'   => 'relacion_control.view'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
