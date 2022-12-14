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

Route::fallback(function () {
    abort(404, 'API resource not found');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/ccc', function () {
        return response()->json(['sanctum']);
    });
});
Route::get('/user', function (Request $request) {
    return ['test'];
});