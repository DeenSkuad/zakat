<?php

use App\Http\Controllers\Api\AuthAPIController;
use App\Http\Controllers\Api\ServiceAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [AuthAPIController::class, 'auth'])->name('auth.login');
    Route::post('/register', [AuthAPIController::class, 'register'])->name('auth.register');
});

Route::group(['middleware' => 'auth:api'], function() {
    Route::apiResources([
        'services' => ServiceAPIController::class,
    ]);
});
