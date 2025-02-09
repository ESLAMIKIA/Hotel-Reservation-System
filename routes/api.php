<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
use App\Http\Controllers\BookingList;

Route::get('/booking', [BookingList::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/book-hotel', [BookingController::class, 'bookHotel']);
    Route::get('/user-bookings', [BookingController::class, 'getUserBookings']);
});


Route::apiResource('users', UserController::class);
Route::apiResource('hotels', HotelController::class);
Route::apiResource('rooms', RoomController::class);
Route::delete('/hotels/{id}', [HotelController::class, 'destroy']);
Route::post('/hotels/{id}', [HotelController::class, 'update']);
Route::get('/hotels', [HotelController::class, 'index']);




Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::middleware('auth:sanctum')->get('/user', [UserController::class, 'getUser']);
Route::middleware('auth:sanctum')->get('/bookings', [BookingController::class, 'getUserBookings']);


// Route::post('/hotels', function (Request $request) {
//     return response()->json([
//         'message' => 'Data received!',
//         'data' => $request->all(),
//     ]);
// });

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->post('/bookings', [BookingController::class, 'store']);

