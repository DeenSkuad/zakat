<?php

use App\Http\Controllers\Api\AdultAPIController;
use App\Http\Controllers\Api\AmilProfileAPIController;
use App\Http\Controllers\Api\ApplicationAPIController;
use App\Http\Controllers\Api\AsnafProfileAPIController;
use App\Http\Controllers\Api\AuthAPIController;
use App\Http\Controllers\Api\BankAPIController;
use App\Http\Controllers\Api\DiseaseAPIController;
use App\Http\Controllers\Api\PrescriptionAPIController;
use App\Http\Controllers\Api\ServiceAPIController;
use App\Http\Controllers\Api\StateAPIController;
use App\Http\Controllers\Api\CityAPIController;
use App\Http\Controllers\Api\DistrictAPIController;
use App\Http\Controllers\Api\GenderAPIController;
use App\Http\Controllers\Api\HeadOfFamilyAPIController;
use App\Http\Controllers\Api\KariahAPIController;
use App\Http\Controllers\Api\MaritalStatusAPIController;
use App\Http\Controllers\Api\OccupationAPIController;
use App\Http\Controllers\Api\PaymentAPIController;
use App\Http\Controllers\Api\SchoolAPIController;
use App\Http\Controllers\Api\AsnafSpouseAPIController;
use App\Http\Controllers\Api\EducationAPIController;
use App\Http\Controllers\Api\ZakatTypeAPIController;
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

Route::group(['as' => 'api.'], function () {
    Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
        Route::post('/login', [AuthAPIController::class, 'auth'])->name('login');
        Route::post('/register', [AuthAPIController::class, 'register'])->name('register');
    });

    Route::group(['middleware' => 'auth:api'], function () {
        Route::group(['prefix' => 'applications', 'as' => 'applications.'], function () {
            Route::get('/by-user-id/{id?}', [ApplicationAPIController::class, 'byUserId'])->name('by-user-id');
        });

        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::get('/', [AuthAPIController::class, 'index'])->name('index');
            Route::get('/show/{id?}', [AuthAPIController::class, 'show'])->name('show');
            Route::get('/asnaf-by-auth-or-id/{id?}', [AuthAPIController::class, 'asnafByAuthOrId'])->name('asnaf-by-auth-or-id');
            Route::match(['PUT', 'PATCH'], '/update/{id?}', [AuthAPIController::class, 'update'])->name('update');
            Route::get('/by-role/{id}', [AuthAPIController::class, 'byRole'])->name('by-role');
        });

        Route::apiResources([
            'applications' => ApplicationAPIController::class,
            'prescriptions' => PrescriptionAPIController::class,
            'asnaf-profiles' => AsnafProfileAPIController::class,
            'payments' => PaymentAPIController::class,
            'asnaf-spouses' => AsnafSpouseAPIController::class
        ]);
    });

    Route::group(['prefix' => 'cities', 'as' => 'cities.'], function () {
        Route::get('/by-state-id/{id}', [CityAPIController::class, 'byStateId'])->name('by-state-id');
    });

    Route::group(['prefix' => 'districts', 'as' => 'districts.'], function () {
        Route::get('/by-state-id/{id}', [DistrictAPIController::class, 'byStateId'])->name('by-state-id');
        Route::get('/by-city-id/{id}', [DistrictAPIController::class, 'byCityId'])->name('by-city-id');
    });

    Route::group(['prefix' => 'kariahs', 'as' => 'kariahs.'], function () {
        Route::get('/by-district-id/{id}', [KariahAPIController::class, 'byDistrictId'])->name('by-district-id');
        Route::get('/by-postcode/{postcode}', [KariahAPIController::class, 'byPostcode'])->name('by-postcode-id');
    });

    Route::group(['prefix' => 'amil-profiles', 'as' => 'amil-profiles.'], function () {
        Route::get('/type/{type}', [AmilProfileAPIController::class, 'byType'])->name('type');
    });

    Route::apiResources([
        'services' => ServiceAPIController::class,
        'diseases' => DiseaseAPIController::class,
        'states' => StateAPIController::class,
        'cities' => CityAPIController::class,
        'kariahs' => KariahAPIController::class,
        'genders' => GenderAPIController::class,
        'marital-statuses' => MaritalStatusAPIController::class,
        'educations' => EducationAPIController::class,
        'adults' => AdultAPIController::class,
        'banks' => BankAPIController::class,
        'head-of-families' => HeadOfFamilyAPIController::class,
        'occupations' => OccupationAPIController::class,
        'schools' => SchoolAPIController::class,
        'zakat-types' => ZakatTypeAPIController::class,
        'amil-profiles' => AmilProfileAPIController::class,
        'districts' => DistrictAPIController::class,
    ]);
});
