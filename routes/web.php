<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PositionController;

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

// Welcome
Route::get('/', function () {
    return view('welcome');
});


//Paises
Route::get('pais',[CountryController::class,'index'])->name('country.index');
Route::get('pais/crear',[CountryController::class,'create'])->name('country.create');
Route::post('pais',[CountryController::class,'store'])->name('country.store');
Route::get('pais/{id}',[CountryController::class,'show'])->name('country.show');
Route::get('pais/edit/{id}',[CountryController::class,'edit'])->name('country.edit');
Route::put('pais/{id}',[CountryController::class,'update'])->name('country.update');
Route::delete('pais/{id}',[CountryController::class,'destroy'])->name('country.destroy');

// Cargo
Route::get('cargo',[PositionController::class,'index'])->name('position.index');
Route::get('cargo/crear',[PositionController::class,'create'])->name('position.create');
Route::post('cargo',[PositionController::class,'store'])->name('position.store');
Route::get('cargo/{id}',[PositionController::class,'show'])->name('position.show');
Route::get('cargo/edit/{id}',[PositionController::class,'edit'])->name('position.edit');
Route::put('cargo/{id}',[PositionController::class,'update'])->name('position.update');
Route::delete('cargo/{id}',[PositionController::class,'destroy'])->name('position.destroy');




