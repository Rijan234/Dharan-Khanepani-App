<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('mobile-login', [ApiController::class, 'checkCredentials']);
Route::post('mobile-schedule', [ApiController::class, 'getSchedule']);
Route::post('mobile-enquiry', [ApiController::class, 'storeEnquiry']);
Route::post('mobile-bill', [ApiController::class, 'checkBill']);