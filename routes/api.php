<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apiv1\UserController;
use App\Http\Controllers\Apiv1\CategoryController;
use App\Http\Controllers\Apiv1\Auth\AuthController;

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
Route::group(['middleware' => ['web','auth:api']], function()
{
    Route::resource('categories', CategoryController::class);
    Route::post('register', [AuthController::class, 'Register'])->name('register.post');
    Route::post('login', [AuthController::class, 'postLogin'])->name('login.post');

    Route::resource('users', UserController::class);

});



// Route::middleware('auth:api')->group(function () {
 
// 
// });
