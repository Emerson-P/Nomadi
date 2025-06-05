<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AppController::class, 'getIndex'] )->name('getIndex');
Route::get('/alta',[AppController::class, 'getAlta'] )->name('getAlta');
Route::get('/quemSomos',[AppController::class, 'getQuemSomos'] )->name('getQuemSomos');
Route::get('/pesquisa',[AppController::class, 'getPesquisa'] )->name('getPesquisa');

Route::get('/cadastro',[AuthController::class, 'getCadastro'] )->name('getCadastro');
Route::get('/login',[AuthController::class, 'getLogin'] )->name('login');

Route::post('/cadastro',[AuthController::class, 'postCadastro'] )->name('postCadastro');
Route::post('/login',[AuthController::class, 'postLogin'] )->name('postLogin');


Route::middleware(['auth'])->group(function(){
    Route::get('/favoritos',[AppController::class, 'getFavoritos'] )->name('getFavoritos');
    Route::post('/addFavoritos/{id}',[AppController::class, 'postAddFavorito'] )->name('postAddFavorito');
    Route::post('/removeFavoritos/{id}',[AppController::class, 'postRemoveFavorito'] )->name('postRemoveFavorito');
    Route::get('/carrinho',[AppController::class, 'getCarrinho'] )->name('getCarrinho');
    Route::post('/addCarrinho/{id}',[AppController::class, 'postAddCarrinho'] )->name('postAddCarrinho');
    Route::post('/removeCarrinho/{id}',[AppController::class, 'postRemoveCarrinho'] )->name('postRemoveCarrinho');
});