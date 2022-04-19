<?php

use App\Http\Controllers\AlternatecodeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FinancialDataController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ItbmsbuyController;
use App\Http\Controllers\ItbmssaleController;
use App\Http\Controllers\LineController;
use App\Http\Controllers\OtherDataController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShelfController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SupplierFinancialController;
use App\Http\Controllers\TrademarkController;
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
    //Route::get('show_financial_client/{id}', [FinancialDataController::class, 'show_client']);
    Route::apiResource('other_data', OtherDataController::class);
    //Route::get('show_client/{id}', [OtherDataController::class, 'show_client']);
    Route::apiResource('sellers', SellerController::class);
    Route::apiResource('zones', ZoneController::class);
    Route::apiResource('suppliers', SupplierController::class);
    Route::apiResource('suppliers_financial', SupplierFinancialController::class);
    Route::get('supplier_show_financial/{id}', [SupplierFinancialController::class, 'show_client']);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('departments', DepartmentController::class);
    Route::apiResource('groups', GroupController::class);
    Route::apiResource('lines', LineController::class);
    Route::apiResource('itbmsbuys', ItbmsbuyController::class);
    Route::apiResource('itbmssales', ItbmssaleController::class);
    Route::apiResource('trademark', TrademarkController::class);
    Route::apiResource('alternatecodes', AlternatecodeController::class);
    Route::apiResource('shelves', ShelfController::class);
    Route::apiResource('stocks', StockController::class);
    Route::apiResource('storages', StorageController::class);
    Route::apiResource('prices', PriceController::class);
});
