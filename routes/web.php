<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('posts/show',[PostController::class,'index']);
// Route::get('posts/create',[PostController::class,'Create']);
// Route::post('posts/store',[PostController::class,'Store']);


Route::get('Writers/',[WriterController::class,'index']);
Route::get('Writers/Create',[WriterController::class,'Create']);
Route::post('Writers/Store',[WriterController::class,'Store']);
Route::get('Writers/delete/{id}',[WriterController::class,'destroy']);
Route::get('Writers/edit/{id}',[WriterController::class,'edit']);
Route::post('Writers/update/{id}',[WriterController::class,'update']);


Route::get('Login',[WriterController::class,'login']);
Route::post('DoLogin',[WriterController::class,'DoLogin']);
Route::get('Logout',[WriterController::class,'logout']);



