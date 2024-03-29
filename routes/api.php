<?php

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

// api/v1
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::apiResource('vehicles', VehicleController::class);
    Route::apiResource('vehicle_owners', VehicleOwnerController::class);
    Route::apiResource('vehicle_categories', VehicleCategoryController::class);
    Route::apiResource('parking_slots', ParkingSlotController::class);
    Route::apiResource('parking_slot_statuses', ParkingSlotStatusController::class);
    Route::apiResource('payments', PaymentController::class);
    Route::apiResource('payment_statuses', PaymentStatusController::class);
    Route::apiResource('bookings', BookingController::class);
    Route::apiResource('booking_statuses', BookingStatusController::class);
    Route::apiResource('users', UserController::class);
});
