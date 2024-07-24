<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Primeira lógica com Laravel</h1>";
});

Route::get('/outra', function () {
    return "<h1>Outra lógica com Laravel</h1>";
});

Route::get('/produtos', ProdutoController::class . '@lista')->name('prod');

Route::get('/produtos/mostra/{id}', ProdutoController::class . '@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', ProdutoController::class . '@novo');

Route::post('/produtos/adiciona', ProdutoController::class . '@adiciona');

Route::get('produtos/json', ProdutoController::class . '@listaJson');

Route::get('produtos/remove/{id}', ProdutoController::class . '@remove')->where('id', '[0-9]+');

Route::get('produtos/edita/{id}', ProdutoController::class . '@edita')->where('id', '[0-9]+');
Route::post('produtos/atualiza/{id}', ProdutoController::class . '@atualiza');
