<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Product Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Product routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your Product!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
