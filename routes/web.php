<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::controller(AppController::class)->group(function () {
    Route::get('/', 'Home');
    Route::get('/detail/{book}', 'BookDetail');
});
