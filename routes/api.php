<?php

use App\Http\Controllers\admin\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('post', PostController::class,['except' => 'create','edit']);
