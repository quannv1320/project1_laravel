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
        Route::get('/add', [CategoryController::class, 'add'])->name('cate.add');
        Route::post('/add', [CategoryController::class, 'saveAdd']);
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('cate.edit');
        Route::post('/edit/{id}', [CategoryController::class, 'saveEdit']);
        Route::get('/{id}/delete', [CategoryController::class, 'delete'])->name('cate.delete');
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
        Route::get('/add', [ProductController::class, 'add'])->name('pro.add');
        Route::post('/add', [ProductController::class, 'saveAdd']);
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('pro.edit');
        Route::post('/edit/{id}', [ProductController::class, 'saveEdit']);
        Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('pro.delete');
        Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('pro.detail');
});