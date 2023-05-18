<?php

use App\Http\Controllers\EndpointController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return view('blank');
});

Route::prefix('some')->group(function () {
    Route::get('/endpoint', [EndpointController::class, 'show']);
});
