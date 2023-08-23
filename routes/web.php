<?php

use App\Http\Controllers\VeiculosController;
use Illuminate\Routing\RouteGroup;
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

 
Route::controller(VeiculosController::class)->group(function () {
    Route::put('/update/{id}', 'update')->name('veiculos.update');
    Route::get('/', 'index')->name('veiculos.index');
    Route::get('/create', 'create')->name('veiculos.create');
    Route::post('/store', 'store')->name('veiculos.store');
    Route::get('/edit/{id}', 'edit')->name('veiculos.edit');
    Route::delete('/delete/{id}', 'destroy')->name('veiculos.destroy');
});
