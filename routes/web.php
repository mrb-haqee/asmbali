<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/blog', BlogController::class)->name('*', 'blog');


Route::get('/test1', fn() => view('test'))->name('test1');
Route::get('/test2', fn() => view('test'))->name('test2');

// Route::resource('/faq', '');
// Route::resource('/program', '');
// Route::resource('/jumber', '');
// Route::resource('/khitan', '');
// Route::resource('/donation', '');
// Route::resource('/ambulan', '');
// Route::resource('/dakwah', '');
