<?php

use Illuminate\Support\Facades\Route;

// 
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// 



Route::get('/', function () {
    return view('clients.homepage');
})->name('homepage');

Route::view('product-detail', 'clients.product-detail')->name('product-detail');
