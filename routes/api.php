<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Questionnaire;
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

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('questions', [Questionnaire::class, 'index']);
    Route::post('questions', [Questionnaire::class, 'store']);
});

Route::get('login', [AuthController::class, 'login']);
