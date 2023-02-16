<?php

use App\Http\Controllers\DailyController;
use App\Http\Controllers\KeywordController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//user routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/user/{id}',[UserController::class,"show"])->name("show.user");
Route::get('/user',[UserController::class,"index"])->name("index.user");
Route::post('/user',[UserController::class,"store"])->name("store.user");
Route::delete('/user/{id}',[UserController::class,"destroy"])->name("destroy.user");
Route::put('/user/{id}',[UserController::class,"update"])->name("update.user");

//Daily Routes
Route::middleware('store.daily')->post('/daily',function(){
    return "Sonho Salvo com sucesso";
});
Route::get('/daily',[DailyController::class,"show"])->name("show.daily");
Route::delete('/daily/{id}',[DailyController::class,"destroy"])->name("destroy.daily");

//Keyword Routes
Route::post('/keyword',[KeywordController::class,"store"])->name("store.keyword");
Route::get('/keyword',[KeywordController::class,"index"])->name("index.keyword");
Route::get('/keyword/{id}',[KeywordController::class,"show"])->name("show.keyword");
Route::put('/keyword/{id}',[KeywordController::class,"update"])->name("update.keyword");
Route::delete('/keyword/{id}',[KeywordController::class,"destroy"])->name("destroy.keyword");

