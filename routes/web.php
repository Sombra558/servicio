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
Route::get('/proyectos-servicio-comunitario', function () {
    return view('pages.proyectos');
});
Route::get('/servicio-comunitario', function () {
    return view('pages.servicio');
});
Route::get('/alumnoscursando', 'PublicoController@Alumnos');
Route::get('/proyectosdeservicio', 'PublicoController@Proyectos');
Route::get('/proyectosdeservicioscomu', 'PublicoController@Servicios');
Route::get('/proyecto-get-publico/{codigo}', 'PublicoController@ProyectosFind');
Route::get('/estudiante-get-publico/{cedula}', 'PublicoController@EstudianteFind');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/ControlAdmin', 'AdminController@index');
    Route::get('/contadorproyectos', 'AdminController@contadorProyectos');
    Route::get('/contadorpendientes', 'AdminController@contadorPendientes');
    Route::get('/contadorprocesos', 'AdminController@contadorProcesos');
    Route::get('/contadorterminados', 'AdminController@contadorTerminados');
    Route::get('/contadordocentes', 'AdminController@contadorDocentes');
    Route::get('/get-pendientes', 'AdminController@getPendientes');
    Route::get('/get-procesos', 'AdminController@getProcesos');
    Route::get('/get-terminados', 'AdminController@getTerminados');
    Route::get('/get-docentes', 'AdminController@getDocentes');
    Route::resource('/proyectos','ProyectoController')->except(['create', 'edit']);
    Route::put('/asignar/{id}', 'AdminController@asignartutor');
    Route::get('/captura/{id}', 'AdminController@showproyecto');
    Route::get('/get-objetivos-admin/{id}', 'AdminController@ObjetivosDelProyectoAdmin');
    Route::get('/get-estudiantes-admin/{id}', 'AdminController@AlumnosDelProyectoAdmin');
    Route::get('/get-actividades-admin/{id}', 'AdminController@ActividadesDelProyectoAdmin');
    Route::get('/get-imagenes-admin/{id}', 'AdminController@ImagenesDeActividadAdmin');
    Route::put('/update/{id}', 'AdminController@updaterole');
    Route::get('/user/porempleados', 'AdminController@getfuturosempleados');
    Route::get('/user/{id}', 'AdminController@getfuturosempleado');
});
Route::group(['middleware' => 'docente'], function () {
    Route::get('/Docente', 'DocenteController@index');
    Route::get('/contadorproyectosdocentes', 'DocenteController@contadorProyectos');
    Route::get('/contadorprocesosdocente', 'DocenteController@contadorProcesos');
    Route::get('/contadorterminadosdocente', 'DocenteController@contadorTerminados');
    Route::get('/get-procesos-docente', 'DocenteController@getProcesos');
    Route::get('/get-terminados-docente', 'DocenteController@getTerminados');
    Route::resource('/proyectos','ProyectoController')->except(['create', 'edit','store','index']);
    Route::resource('/objetivos','ObjetivosController')->except(['create', 'edit']);
    Route::get('/get-objetivos/{id}', 'DocenteController@ObjetivosDelProyecto');
    Route::resource('/estudiantes','EstudiantesController')->except(['create', 'edit']);
    Route::resource('/actividades','ActividadesController')->except(['create', 'edit']);
    Route::get('/get-estudiantes/{id}', 'DocenteController@AlumnosDelProyecto');
    Route::get('/get-actividades/{id}', 'DocenteController@ActividadesDelProyecto');
    Route::get('/get-imagenes/{id}', 'DocenteController@ImagenesDeActividad');
    Route::put('/asignar-horas/{cedula}', 'DocenteController@Asignarhoras');
    Route::resource('image', 'ImagesController');
});