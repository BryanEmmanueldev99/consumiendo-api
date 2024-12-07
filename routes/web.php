<?php

use App\Http\Controllers\admin\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/a', [App\Http\Controllers\admin\PostController::class, 'cliente_json']);


