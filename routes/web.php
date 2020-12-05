<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/bandejapostulantes', 'AdministradorController@BandejaPostulantes')->name('bandeja');
Route::get('/mensajes', 'AdministradorController@Mensajes')->name('mensajes');
Route::get('/viewmessague/{id}', 'AdministradorController@VerMensajes')->name('ver.mensajes');
Route::get('/crearmensaje', 'AdministradorController@CrearMensajes')->name('crear.mensajes');
Route::get('/postular', 'AdministradorController@Postular')->name('postular');

Route::get('/verpostulante/{id}', 'AdministradorController@VerPostulante')->name('ver.postulante');
/*Route::get('/creapuppey', 'AdministradorController@CrearMascota')->name('puppey.crear');
Route::get('/editapuppey/{id}', 'AdministradorController@EditarMascota')->name('puppey.editar');
Route::get('/deletepuppey/{id}', 'AdministradorController@EliminarMascota')->name('puppey.eliminar');
Route::get('/genealogia', 'AdministradorController@GenealogiaMascota')->name('puppey.genealogia');
Route::get('/detallepuppey/{id}', 'AdministradorController@DetalleMascota')->name('puppey.detalle');*/
Route::resource('/postulante','PostulanteController');

Route::resource('/mensaje','MensajeController');


Route::get('/principaluser', 'AdministradorController@ListaUsuario')->name('usuario');
Route::get('/crearuser', 'AdministradorController@CrearUsuario')->name('crear.usuario');



Route::resource('/user','UsuarioController');
