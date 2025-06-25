<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return 'ok';
// });
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//route api auth regis
Route::post('/register' , RegisterController::class);