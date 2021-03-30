<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// 
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// 



Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::get('/product-detail/{id}', [HomeController::class, 'productDetail'])->name('product-detail');
