<?php

use App\Http\Controllers\BidController;
use App\Http\Controllers\BidsController;
use App\Http\Controllers\FifthAliyahController;
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

Route::get('/bids', [BidsController::class, 'index']);
Route::post('/bids/{id}/create', [BidsController::class, 'create']);
Route::get ('/bids/all', [BidsController::class, 'show']);
Route::get('/bids/fifthaliyah', [FifthAliyahController::class, 'show']);
Route::get('bids/history', [BidController::class, 'showAll']);

Route::fallback(function() {
    return 'Access Denied';
});
