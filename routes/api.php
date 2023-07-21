<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

/* Route::get('/contacts', [ContactController::class, 'index']);
// create route for crud contact
Route::post('/contacts', [ContactController::class, 'store']);
// create route for update contact
Route::put('/contacts/{contact}', [ContactController::class, 'update']);
// create route for delete contact
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);
// create route for show single contact
Route::get('/contacts/{id}', [ContactController::class, 'show']); */

// create route using api resource
Route::apiResource('contacts', ContactController::class);


