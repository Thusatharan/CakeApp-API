<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PeopleController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\BbotController;
use App\Http\Controllers\BbotDeleteController;
use App\Http\Controllers\JavaquizController;
use App\Http\Controllers\PhpquizController;
use App\Http\Controllers\PythonquizController;
use App\Http\Controllers\TankController;

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

//Authentication Routes
Route::post("register", [AuthController::class, 'register']);
Route::post("login", [AuthController::class, 'login']);

Route::post('tanklevel', [TankController::class, 'store']);
Route::post('updatelevel', [TankController::class, 'update']);
Route::get('getTankLevel', [TankController::class, 'index']);
Route::get('getSingle', [TankController::class, 'getSingle']);

// Public Routes
Route::resource("category", CategoryController::class);
Route::resource("product", ProductController::class);
Route::resource("peoples", PeopleController::class);
Route::post("stress", [ImageController::class, 'storeData']);

//Quiz

Route::resource("pythonquiz", PythonquizController::class);
Route::resource("javaquiz", JavaquizController::class);
Route::resource("phpquiz", PhpquizController::class);

Route::resource("bbot", BbotController::class);
Route::post('deleteAll', [BbotDeleteController::class, 'deleteAll']);
Route::get('getLatest', [BbotDeleteController::class, 'getLatest']);

// Requires Authentication
Route::middleware('auth:sanctum')->group(function () {
});
