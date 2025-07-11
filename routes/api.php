<?php

use App\Http\Controllers\Api\DefaultController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/data', DefaultController::class, ['only' => ['index', 'store']]);