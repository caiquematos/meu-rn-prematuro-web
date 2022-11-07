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

Route::get('/notas/nota/{titulo}/{img}', function ($titulo, $img) {
    return view('nota', ['page' => 'notas', 'titulo' => $titulo, 'img' => $img]);
})->name('notas.nota');

Route::get('/perfil', function () {
    return view('perfil')->with('page', 'perfil');
})->name('perfil');

Route::get('/estimulacao/{index}', function ($index) {
    return view('estimulacao')->with('index', $index);;
})->name('estimulacao');

Route::get('/alerta/{index}', function ($index) {
    return view('alerta')->with('index', $index);;
})->name('alerta');

Route::get('/cuidados/{index}', function ($index) {
    return view('cuidados')->with('index', $index);;
})->name('cuidados');

Route::get('/sono-e-repouso/{index}', function ($index) {
    return view('sono-e-repouso')->with('index', $index);
})->name('sono-e-repouso');

Route::get('/amamentacao/{index}', function ($index) {
    return view('amamentacao')->with('index', $index);;
})->name('amamentacao');

Route::get('/canguru/{index}', function ($index) {
    return view('canguru')->with('index', $index);
})->name('canguru');

/** Menu */
Route::get('/estimulacao-menu', function () {
    return view('estimulacao-menu')->with('page', 'main');
})->name('estimulacao-menu');

Route::get('/alerta-menu', function () {
    return view('alerta-menu')->with('page', 'main');
})->name('alerta-menu');

Route::get('/cuidados-menu', function () {
    return view('cuidados-menu')->with('page', 'main');
})->name('cuidados-menu');

Route::get('/sono-menu', function () {
    return view('sono-menu')->with('page', 'main');
})->name('sono-menu');

Route::get('/canguru-menu', function () {
    return view('canguru-menu')->with('page', 'main');
})->name('canguru-menu');

Route::get('/amamentacao-menu', function () {
    return view('amamentacao-menu')->with('page', 'main');
})->name('amamentacao-menu');



Route::get('/home', function () {
    return view('home')->with('page', 'home');
})->name('home');

Route::get('/album', function () {
    return view('album')->with('page', 'home');
})->name('album');

Route::get('/register-album', function () {
    return view('register-album');
})->name('register-album');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
