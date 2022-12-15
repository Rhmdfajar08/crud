<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [PlantController::class, 'index']);
Route::get('/add', [PlantController::class, 'create']);
Route::get('/edit/{plant:id}', [PlantController::class, 'edit']);
Route::patch('/edit/{plant:id}',[PlantController::class, 'update']);
Route::post('/store', [PlantController::class, 'store']);
Route::get('/create', [PlantController::class, 'create']);
Route::delete('/delete/{id}',[PlantController::class,'destroy'])->name('destroy');