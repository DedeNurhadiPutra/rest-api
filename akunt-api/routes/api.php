<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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

// Route::get('/transactions', [TransactionController::class, 'index']);
// Route::post('/transactions', [TransactionController::class, 'store']);
// Route::get('/transactions/{transaction}', [TransactionController::class, 'show']);
// Route::put('/transactions/{transaction}', [TransactionController::class, 'update']);
// Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy']);

Route::resource('/transactions', TransactionController::class)->except(['create', 'edit']);