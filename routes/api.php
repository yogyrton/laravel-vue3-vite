<?php

use App\Http\Controllers\People\CreateController;
use App\Http\Controllers\People\DeleteController;
use App\Http\Controllers\People\EditController;
use App\Http\Controllers\People\IndexController;
use App\Http\Controllers\People\UpdateController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('people')->group(function (){
    Route::post('/', CreateController::class);
    Route::get('/', IndexController::class);
    Route::get('/{people}', EditController::class);
    Route::patch('/{people}', UpdateController::class);
    Route::delete('/{people}', DeleteController::class);



});
