<?php

use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Hello World";
});


Route::view('profile','profile');
Route::post('profile', [UploadController::class, 'upload']);
