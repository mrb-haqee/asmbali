<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('/blog', BlogController::class)->name('*', 'blog');


Route::get('/tentang-kami', fn() => view('system.maintenance'))->name('tentang-kami');
Route::get('/jumber', fn() => view('page.jumber.index'))->name('jumber');
Route::get('/sembako', fn() => view('system.maintenance'))->name('sembako');
Route::get('/ambulan', fn() => view('system.maintenance'))->name('ambulan');
Route::get('/khitan', fn() => view('system.maintenance'))->name('khitan');
Route::get('/sosial-dakwah', fn() => view('system.maintenance'))->name('sosial-dakwah');
Route::get('/rumah-tahfidz', fn() => view('system.maintenance'))->name('rumah-tahfidz');
Route::get('/galeri', fn() => view('system.maintenance'))->name('galeri');
Route::get('/donatur', fn() => view('system.maintenance'))->name('donatur');
Route::get('/pengurus', fn() => view('system.maintenance'))->name('pengurus');
Route::get('/program', fn() => view('system.maintenance'))->name('program');
Route::get('/layanan', fn() => view('system.maintenance'))->name('layanan');
Route::get('/faq', fn() => view('system.maintenance'))->name('faq');
Route::get('/no-rekening', fn() => view('system.maintenance'))->name('no-rekening');
Route::get('/kalkulator-zakat', fn() => view('system.maintenance'))->name('kalkulator-zakat');
Route::get('/test2', fn() => view('test'))->name('test2');


Route::fallback(function () {
    return response()->view('system.404', [], 404);
});

// Route::resource('/faq', '');
// Route::resource('/program', '');
// Route::resource('/jumber', '');
// Route::resource('/khitan', '');
// Route::resource('/donation', '');
// Route::resource('/ambulan', '');
// Route::resource('/dakwah', '');
