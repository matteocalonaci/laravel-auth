<?php

use App\Http\Controllers\Api\ProjectController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('projects', [ProjectController::class, "index"]);

//ROTTA ULTIMI PROGETTI
Route::get('projects/latest', [ProjectController::class, "latest"]);

//ROTTA SINGOLI PROGETTI
Route::get('projects/{$id}', [ProjectController::class, "show"]);
