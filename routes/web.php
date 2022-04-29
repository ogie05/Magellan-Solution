<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LogController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/inventory',[InventoryController::class,'index'])->name('inventory');
    Route::get('/inventory/brand',[BrandController::class,'index'])->name('brand');
    Route::post('/inventory/brand/create',[BrandController::class,'create'])->name('create');
    Route::post('/inventory/brand/edit',[BrandController::class,'edit'])->name('edit');
    Route::get('/inventory/brand/delete/{id}',[BrandController::class,'delete'])->name('delete');

    Route::get('/loghistory', [LogController::class,'index'])->name('log');

});