<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = "";
    return view('home', [
            'title' => 'home',
    ]);
});

// Group Route
// HOME
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index');
    
    Route::get('/tutor', 'tutor');
    Route::get('/detailTutor/{id}','detailTutor')->middleware('admin');

    Route::get('/mhs/mahasiswa', 'mahasiswa');
    Route::get('/mhs/detail/{id}', 'detail');
    Route::get('/mhs/mahasiswa/tambah', 'indexAddMahasiswa');
    Route::post('/mhs/mahasiswa/tambah', 'storeMahasiswa');

    Route::get('/mhs/mahasiswa/edit/{id}', 'indexUpdateMahasiswa');
    Route::put('/mhs/mahasiswa/edit/{id}', 'storeUpdateMahasiswa');

    Route::delete('/mhs/mahasiswa/delete/{id}', 'destroyMahasiswa');
});

Route::get('/about', [AboutController::class, 'index'] );

// AUTH (contoh route jika tidak dilakukan grouping seperti HomeController)
// Route::get('/auth/login', [AuthController::class, 'indexLogin']);
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'indexLogin');
    Route::post('/auth/login', 'storeLogin');
    Route::get('/auth/register', 'indexRegister');
    Route::post('/auth/register', 'storeRegister');
    Route::post('/auth/logout', 'storeLogout');
    
});

// ->middleware('guest')->name('login')
// ->middleware('guest')