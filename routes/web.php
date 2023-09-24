<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullNameController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ProductController;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/product-details/{id}',[HomeController::class,'productDetails'])->name('product-details');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function (){
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/full-name',[FullNameController::class ,'fullName'])->name('full-name');
    Route::post('/get-full-name',[FullNameController::class,'getFullName'])->name('get-full-name');
    Route::get('/calculator-page',[CalculatorController::class,'calculatorPage'])->name('calculator-page');
    Route::post('/calculator-result',[CalculatorController::class,'calculatorResult'])->name('calculator-result');
    Route::get('/create-product',[ProductController::class,'create'])->name('products.create');
    Route::post('/store-product',[ProductController::class,'store'])->name('products.store');
    Route::get('/manage-product',[ProductController::class,'manage'])->name('products.manage');
    Route::get('/delete-product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/update-product/{id}',[ProductController::class,'update'])->name('products.update');
});


