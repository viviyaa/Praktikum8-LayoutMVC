<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [LayoutController::class, 'admin']);
Route::get('/user', [LayoutController::class, 'user']);