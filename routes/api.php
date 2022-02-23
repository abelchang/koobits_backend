<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'fake'], function () {
    Route::post('/submitQuestions', [QuestionsController::class, 'submitQuestions']);
    Route::get('/getQuestions/{count}', [QuestionsController::class, 'getQuestions']);
    Route::get('/getQuestions', [QuestionsController::class, 'getQuestions']);
});
