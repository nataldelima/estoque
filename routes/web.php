<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Primeira lógica com Laravel</h1>";
});

Route::get('/outra', function () {
    return "<h1>Outra lógica com Laravel</h1>";
});

Route::get('/produtos', ProdutoController::class . '@lista');
