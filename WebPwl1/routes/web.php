<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// C.5 - Route /home mengirim key 'title'
Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);

// C.5 - Route /blog mengirim key 'title'
Route::get('/blog', [HomeController::class, 'blog']);

// C.5 - Route /about mengirim title, nama, nim, prodi, matakuliah, framework
Route::get('/about', [HomeController::class, 'about']);
