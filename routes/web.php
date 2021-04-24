<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
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

