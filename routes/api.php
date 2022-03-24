<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FinancialDataController;
use App\Http\Controllers\OtherDataController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ZoneController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['cors']], function () {
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('financial_data', FinancialDataController::class);
    Route::get('show_financial_client/{id}', [FinancialDataController::class, 'show_client']);
    Route::apiResource('other_data', OtherDataController::class);
    Route::get('show_client/{id}', [OtherDataController::class, 'show_client']);
    Route::apiResource('sellers', SellerController::class);
    Route::apiResource('zones', ZoneController::class);
});
