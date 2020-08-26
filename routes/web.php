<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Crear referencias manualmente hacia el controlador
//Route::get('/personas','PersonasController@index');
//Route::get('/personas/create','PersonasController@create');


//Crear  Referencias de forma automatizada hacia el controlador
//Para poder comprobarlo ingresamos en la terminal "php artisan route:list"
Route::resource('personas', 'PersonasController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
