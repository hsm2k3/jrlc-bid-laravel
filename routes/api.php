<?php

use App\Http\Controllers\FifthAliyahController;
use App\Http\Controllers\FirstAliyahController;
use App\Http\Controllers\FourthAliyahController;
use App\Http\Controllers\MaftirController;
use App\Http\Controllers\SecondAliyahController;
use App\Http\Controllers\ThirdAliyahController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/first_aliyah/bid', [FirstAliyahController::class, 'index']);
Route::get('/second_aliyah/bid', [SecondAliyahController::class, 'index']);
Route::get('/third_aliyah/bid', [ThirdAliyahController::class, 'index']);
Route::get('/fourth_aliyah/bid', [FourthAliyahController::class, 'index']);
Route::get('/fifth_aliyah/bid', [FifthAliyahController::class, 'index']);
Route::get('/maftir/bid', [MaftirController::class, 'index']);
