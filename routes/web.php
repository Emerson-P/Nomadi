<?php

use App\Http\Controllers\app;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[app::class, 'getIndex'] )->name('getIndex');
Route::get('/alta',[app::class, 'getAlta'] )->name('getAlta');

Route::get('/cadastro',[AuthController::class, 'getCadastro'] )->name('getCadastro');
Route::get('/login',[AuthController::class, 'getLogin'] )->name('login');

Route::post('/cadastro',[AuthController::class, 'postCadastro'] )->name('postCadastro');
Route::post('/login',[AuthController::class, 'postLogin'] )->name('postLogin');


Route::middleware(['auth'])->group(function(){

    Route::post('/favoritos',[app::class, 'postFavorito'] )->name('postFavorito');

});