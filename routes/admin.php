<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;

//login
Route::view('login', 'auth.login')->name('login');
Route::post('login', [LoginController::class, 'postLogin']);
Route::any('logout', function()
    {
        Auth::logout();
        return redirect(route('login'));
    })->name('logout');


//Admin
Route::view('/', 'admin.index')->middleware('auth');
Route::get('admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');

Route::prefix('category')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('cate.index');
});

Route::prefix('brand')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', [BrandController::class, 'index'])->name('brand.index');
        Route::get('/add', [BrandController::class, 'add'])->name('brand.add');
        Route::post('/add', [BrandController::class, 'saveAdd']);
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::post('/edit/{id}', [BrandController::class, 'saveEdit']);
        Route::get('/{id}/delete', [BrandController::class, 'delete'])->name('brand.delete');
});

Route::prefix('product')
    ->middleware('auth')
    ->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('pro.index');
});