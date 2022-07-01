<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\Process\ProcessController;
use App\Models\Department;

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
    //for brand
    Route::get('/inventory/brand',[BrandController::class,'index'])->name('brand');
    Route::post('/inventory/brand/create',[BrandController::class,'create'])->name('create');
    Route::post('/inventory/brand/edit',[BrandController::class,'edit'])->name('edit');
    Route::get('/inventory/brand/delete/{id}',[BrandController::class,'delete'])->name('delete');

    //for department
    Route::get('/inventory/department',[DepartmentController::class,'index'])->name('department');
    Route::post('/inventory/department/create',[DepartmentController::class,'create'])->name('depcreate');
    Route::post('/inventory/department/edit',[DepartmentController::class,'edit'])->name('depedit');
    Route::get('/inventory/department/delete/{id}',[DepartmentController::class,'delete'])->name('depdel');

    //for model
    Route::get('/inventory/model', [ModelController::class, 'index'])->name('model');
    Route::post('/inventory/model/create',[ModelController::class,'create'])->name('modcreate');
    Route::post('/inventory/model/edit', [ModelController::class, 'edit'])->name('modedit');
    Route::get('/inventory/model/delete/{id}', [ModelController::class, 'delete'])->name('moddel');

    //for type
    Route::get('/inventory/type', [TypeController::class, 'index'])->name('type');
    Route::post('/inventory/type/create',[TypeController::class,'create'])->name('typecreate');
    Route::post('/inventory/type/edit', [TypeController::class, 'edit'])->name('typeedit');
    Route::get('/inventory/type/delete/{id}', [TypeController::class, 'delete'])->name('typedel');

    //for process
    Route::get('/process',[ProcessController::class,'index'])->name('process');
    Route::post('/process/generateqrcode',[ProcessController::class,'generateqr'])->name('generateqrcode');

    Route::get('/process/manual-encode',[ProcessController::class,'manual'])->name('manualencode');
    Route::post('/process/manual-encode/submit',[ProcessController::class,'submit'])->name('manualencode-submit');
    Route::get('/loghistory', [LogController::class,'index'])->name('log');
    // // /
    Route::get('/process/generatedqr',[ProcessController::class,'generatedqr'])->name('generatedqr');
});

