<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\OfficeController;

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

Route::get('/', function () {return view('index');});
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/models', [CarModelController::class, 'index'])->name('models.index');
Route::get('/offices', [OfficeController::class, 'index'])->name('offices.index');
Route::get('/officecreate', [OfficeController::class, 'create'])->name('create.office');
Route::get('/carcreate', [CarController::class, 'create'])->name('create.car');
Route::get('/modelcreate', [CarModelController::class, 'create'])->name('create.model');
Route::post('/addcar',[CarController::class,'store'])->name('store.car');
Route::post('/addmodel',[CarModelController::class,'store'])->name('store.model');
Route::post('/addoffice',[OfficeController::class,'store'])->name('store.office');
Route::get('/cars/{id}', [CarController::class, 'detail'])->name('detail.car');
Route::get('/models/{id}', [CarModelController::class, 'detail'])->name('detail.model');
Route::get('/offices/{id}', [OfficeController::class, 'detail'])->name('detail.office');





