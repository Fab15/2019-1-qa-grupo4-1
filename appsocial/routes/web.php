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

Route::resource('student', 'StudentController');
Route::resource('usuario', 'usuarioControlador');

Route::get('logIn.blade.php', function () {
    return view('usuario.logIn');
});

Route::get('inicio.blade.php', function () {
    return view('usuario.inicio');
});
Route::get('ingresoUsuario.blade.php', function () {
    return view('usuario.ingresoUsuario');
});

