<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories' , [CategoryController::class , 'index']);
Route::get("/categories/create" , [CategoryController::class , 'create']);

Route::get("/categories/{category}" , [CategoryController::class , 'show']);
Route::post("/categories" , [CategoryController::class , 'store']);
Route::get("/categories/{category}/edit" , [CategoryController::class , 'edit']);
Route::put("/categories/{category}" , [CategoryController::class , 'update']);
Route::delete("/categories/{category}" , [CategoryController::class , 'destroy']);