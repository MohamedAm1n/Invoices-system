<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ProductController;

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



Auth::routes();
Route::get('', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('erp/')->group(function(){

    Route::get('invoices', [InvoiceController::class, 'index'])->name('invoices');
    Route::get('invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::post('invoices/store', [InvoiceController::class, 'store'])->name('invoices.store');
    Route::get('invoices/section/{id}', [InvoiceController::class, 'getProducts'])->name('invoices.section');
    // Section Routes
    Route::get('section',[SectionController::class,'index'])->name('sections');
    Route::post('section/store',[SectionController::class,'store'])->name('section.store');
    Route::get('section/edit/{section}',[SectionController::class,'edit'])->name('section.edit');
    Route::post('section/update/{section}',[SectionController::class,'update'])->name('section.update');
    Route::post('section/delete/{section}',[SectionController::class,'destroy'])->name('section.delete');
    // Product Routes
    Route::get('products', [ProductController::class , 'index'])->name('products');
    Route::post('products/store', [ProductController::class , 'store'])->name('products.store');
    Route::get('products/edit/{product}', [ProductController::class , 'edit'])->name('products.edit');
    Route::post('products/update/{product}', [ProductController::class , 'update'])->name('products.update');
    Route::post('products/{product}', [ProductController::class , 'destroy'])->name('products.delete');
});
