<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErpatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
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

Route::group(['middleware' => ['api'], 'prefix' => 'v1/erpat'], function ($router) {
    Route::post('init', [ErpatController::class, 'init']);
    Route::post('setup', [ErpatController::class, 'setup']);
});

Route::group(['middleware' => ['jwt.auth', 'user.permit'], 'prefix' => 'v1'], function () {
    Route::post('users/refresh', [UserController::class, 'refresh']);
    Route::post('users/get_user_info', [UserController::class, 'info']);
    Route::post('users/permissions', [UserController::class, 'permission']);
    Route::post('users/logout', [UserController::class, 'logout']);
    Route::post('users/changepass', [UserController::class, 'change_pass']);
    Route::post('users/get', [UserController::class, 'getUser']);

});

Route::group(['middleware' => ['api'], 'prefix' => 'v1/users'], function ($router) {
    Route::post('login', [UserController::class, 'login']);
});

Route::group(['middleware' => ['api'], 'prefix' => 'v1/setting'], function ($router) {
    Route::post('get_options', [SettingController::class, 'get_options']);
});
