<?php

use App\Http\Controllers\AuthUserController;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/users', function () {
        return User::with('roles')->get();
    });
    Route::get('/users/count', function () {
        return (object)["count" => User::all()->count()];
    });
    Route::get('/user', [AuthUserController::class, 'index']);
    Route::get('/roles', function (Request $request) {
        return Role::all()->pluck('name');
    });
});