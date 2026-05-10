<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

Route::get('/hello', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Hello API'
    ]);
});
Route::apiResource('categories', CategoryController::class);
Route::apiResource('items', ItemController::class);


