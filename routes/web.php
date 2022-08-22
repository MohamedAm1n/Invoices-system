<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;

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
Auth::routes();
Route::middleware('auth')->prefix('erp/')->group(function(){
    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::get('invoices', [InvoiceController::class, 'index'])->name('invoices');
    Route::get('section',[SectionController::class,'index'])->name('sections');
    Route::post('section/store',[SectionController::class,'store'])->name('section.store');
    Route::post('section/update/{id}',[SectionController::class,'update'])->name('section.update');
});
