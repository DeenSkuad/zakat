<?php

use App\Http\Controllers\AmilManagementController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AsnafManagementController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KariahController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['as' => 'landings.'], function () {
    Route::get('/', [LandingController::class, 'index'])->name('home');

    Route::group(['prefix' => 'landing'], function () {
        Route::get('/count-zakat', [LandingController::class, 'countZakat'])->name('count-zakat');
    });
});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
    Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');
    Route::get('/new-password/{token}', [AuthController::class, 'newPassword'])->name('new-password');
    Route::match(['PUT', 'PATCH'], '/change-password/{token}', [AuthController::class, 'changePassword'])->name('change-password');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/get-data', [HomeController::class, 'getData'])->name('home.get-data');

    Route::group(['prefix' => 'cities', 'as' => 'cities.'], function () {
        Route::get('/by-state/{id}', [CityController::class, 'byState'])->name('by-state');
    });

    Route::group(['prefix' => 'districts', 'as' => 'districts.'], function () {
        Route::get('/by-city/{id}', [DistrictController::class, 'byCity'])->name('by-city');
        Route::get('/by-state/{id}', [DistrictController::class, 'byState'])->name('by-state');
    });

    Route::group(['prefix' => 'kariahs', 'as' => 'kariahs.'], function () {
        Route::get('/by-district/{id}', [KariahController::class, 'byDistrict'])->name('by-district');
        Route::get('/by-postcode/{id}', [KariahController::class, 'byPostcode'])->name('by-postcode');
    });

    Route::resources([
        'users' => UserController::class,
        'services' => ServiceController::class,
        'kariahs' => KariahController::class,
        'states' => StateController::class,
        'cities' => CityController::class,
        'districts' => DistrictController::class,
        'kariahs' => KariahController::class,
        'applications' => ApplicationController::class,
        'asnaf-managements' => AsnafManagementController::class,
        'claims' => ClaimController::class,
        'amil-managements' => AmilManagementController::class,
    ]);
});
