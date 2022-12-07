<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreApiController;

//use Illuminate\Http\Response;
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

Route::get("/customers", "App\Http\Controllers\StoreApiController@get_customers");
Route::get("/products", "App\Http\Controllers\StoreApiController@get_products");
Route::get("/orders", "App\Http\Controllers\StoreApiController@get_orders");
Route::post("/customers", "App\Http\Controllers\StoreApiController@post_customers");
