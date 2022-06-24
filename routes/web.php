<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
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
    //return view('welcome');
    return view('prueba');
});
//Route::get('users/report', 'NotaController@report');
Route::resource('/miproyecto8/public/notas', NotaController::class);
/*Route::get('hola', function () {
    print "ffff";
});
*/
//Route::get('/notas', 'NotaController@index');
//Route::post('/notas/registrar','NotaController@store');
//Route::get('listaddo',NotaController::class, 'index');



//Route::get('/notas', 'App\Http\Controllers\NotaController@index');
//Route::resource('/notas', 'NotaController');
