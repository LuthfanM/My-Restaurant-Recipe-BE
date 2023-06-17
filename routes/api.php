<?php

use App\Http\Controllers\API\FoodController;
use App\Http\Controllers\API\RecipesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CategoriesController;

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

Route::apiResource('categories', CategoriesController::class); //->except(['update']);

Route::apiResource('food', FoodController::class); //->except(['update']);;

Route::apiResource('recipes', RecipesController::class); //->except(['update']);;

Route::get('/food/category/{categoryId}', [FoodController::class, 'getByCategory']);
