<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\Document_TypeController;

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
Route::get('pais/editar/{id}',[CountryController::class,'edit'])->name('country.edit');
Route::put('pais/{id}',[CountryController::class,'update'])->name('country.update');
Route::delete('pais/{id}',[CountryController::class,'destroy'])->name('country.destroy');

// Cargo
Route::get('cargo',[PositionController::class,'index'])->name('position.index');
Route::get('cargo/crear',[PositionController::class,'create'])->name('position.create');
Route::post('cargo',[PositionController::class,'store'])->name('position.store');
Route::get('cargo/{id}',[PositionController::class,'show'])->name('position.show');
Route::get('cargo/editar/{id}',[PositionController::class,'edit'])->name('position.edit');
Route::put('cargo/{id}',[PositionController::class,'update'])->name('position.update');
Route::delete('cargo/{id}',[PositionController::class,'destroy'])->name('position.destroy');

// Genero
Route::get('genero',[GenderController::class,'index'])->name('gender.index');
Route::get('genero/crear',[GenderController::class,'create'])->name('gender.create');
Route::post('genero',[GenderController::class,'store'])->name('gender.store');
Route::get('genero/{id}',[GenderController::class,'show'])->name('gender.show');
Route::get('genero/editar/{id}',[GenderController::class,'edit'])->name('gender.edit');
Route::put('genero/{id}',[GenderController::class,'update'])->name('gender.update');
Route::delete('genero/{id}',[GenderController::class,'destroy'])->name('gender.destroy');


// Tipo de Documento
Route::get('tipo_documento',[Document_TypeController::class,'index'])->name('document_type.index');
Route::get('tipo_documento/crear',[Document_TypeController::class,'create'])->name('document_type.create');
Route::post('tipo_documento',[Document_TypeController::class,'store'])->name('document_type.store');
Route::get('tipo_documento/{id}',[Document_TypeController::class,'show'])->name('document_type.show');
Route::get('tipo_documento/editar/{id}',[Document_TypeController::class,'edit'])->name('document_type.edit');
Route::put('tipo_documento/{id}',[Document_TypeController::class,'update'])->name('document_type.update');
Route::delete('tipo_documento/{id}',[Document_TypeController::class,'destroy'])->name('document_type.destroy');






