<?php
use App\Http\Controllers\TesztController;
use App\Http\Controllers\KategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('api/teszt',[TesztController::class,'index']);
Route::get('api/kategoria',[KategoriaController::class,'index']);