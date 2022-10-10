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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', function () {
    return "Olá".
    "<br> Esta é a rota de listagem de atores.";
});*/


Route::get('atores', [\App\Http\Controllers\AtoresController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('atores/create', [\App\Http\Controllers\AtoresController::class, 'create']);

Route::post('atores/store', [\App\Http\Controllers\AtoresController::class, 'store']);

Route::get('atores/{id}/destroy', [\App\Http\Controllers\AtoresController::class, 'destroy']);

Route::get('atores/{id}/edit', [\App\Http\Controllers\AtoresController::class, 'edit']);

Route::put('atores/{id}/update', [\App\Http\Controllers\AtoresController::class, 'update']);
