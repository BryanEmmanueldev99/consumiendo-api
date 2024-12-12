<?php

use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/a', [App\Http\Controllers\admin\PostController::class, 'cliente_json']);
Route::post('/email', [App\Http\Controllers\UsuariosController::class, 'store'])->name('email');
Route::post('/contacto', [App\Http\Controllers\UsuariosController::class, 'contacto'])->name('contacto');


