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


Route::get('/referencias', function () {
    return view('referencias')->with('page', 'referencias');
})->name('referencias');

Route::get('/notas', function () {
    return view('notas')->with('page', 'notas');
})->name('notas');

Route::get('/notas/nota/{titulo}', function ($titulo) {
    return view('nota', ['page' => 'notas', 'titulo' => $titulo]);
})->name('notas.nota');

Route::get('/perfil', function () {
    return view('perfil')->with('page', 'perfil');
})->name('perfil');

Route::get('/estimulacao', function () {
    return view('estimulacao');
})->name('estimulacao');

Route::get('/alerta', function () {
    return view('alerta');
})->name('alerta');

Route::get('/cuidados', function () {
    return view('cuidados');
})->name('cuidados');

Route::get('/sono-e-repouso', function () {
    return view('sono-e-repouso');
})->name('sono-e-repouso');

Route::get('/amamentacao', function () {
    return view('amamentacao');
})->name('amamentacao');

Route::get('/canguru', function () {
    return view('canguru');
})->name('canguru');

Route::get('/home', function () {
    return view('home')->with('page', 'home');
})->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
