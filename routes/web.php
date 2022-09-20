<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\AboutController;

// Route::get('/contato', [HomeController::class, 'contatoMetodo'])
Route::name('Site')->group(function() {
    Route::get('/', HomeController::class)->name('.home');


    Route::get('/sobre', AboutController::class)->name(".sobre");

    Route::get('/contato', [ContactController::class, 'index'])->name('.contato');
    //Route::post('/contato', [ContactController::class, 'form']);

});
