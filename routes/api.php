<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::get("students", [StudentController::class, 'index']);
    Route::post("create", [StudentController::class, 'store']);
    Route::get('get/{id}', [StudentController::class, 'show']);
    Route::delete('delete/{id}', [StudentController::class, 'destroy']);
    Route::put('update/{id}', [StudentController::class, 'update']);
});

Route::post("login",[UserController::class,'index']);