<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send.mail');
