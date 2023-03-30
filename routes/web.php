<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "";
    return view('welcome', [
            'title' => 'welcome',
    ]);
});

// Group Route
// HOME
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth');
    Route::get('/detail/{id}', 'detail');

    Route::get('/tutor', 'tutor')->middleware('auth');
    Route::get('/detailTutor/{id}','detailTutor');

    Route::get('/mahasiswa/tambah', 'indexAddMahasiswa');
    Route::post('/mahasiswa/tambah', 'storeMahasiswa');
    Route::get('/mahasiswa/edit/{id}', 'indexUpdateMahasiswa');
    Route::put('/mahasiswa/edit/', 'storeUpdateMahasiswa');
});

Route::get('/about', [AboutController::class, 'index'] );

// AUTH (contoh route jika tidak dilakukan grouping seperti HomeController)
// Route::get('/auth/login', [AuthController::class, 'indexLogin']);
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'indexLogin')->middleware('guest')->name('login');
    Route::post('/auth/login', 'storeLogin');
    Route::get('/auth/register', 'indexRegister')->middleware('guest');
    Route::post('/auth/register', 'storeRegister');
    Route::post('/auth/logout', 'storeLogout');
    
});