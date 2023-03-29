<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = "";
    return view('welcome', [
            'title' => 'welcome',
    ]);
});

// Group Route
// Home
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index');
    Route::get('/detail/{id}', 'detail');
    Route::get('/tutor', 'tutor');
    Route::get('/detailTutor/{id}','detailTutor');
});

Route::get('/about', [AboutController::class, 'index'] );

// AUTH (contoh route jika tidak dilakukan grouping seperti HomeController)
// Route::get('/auth/login', [AuthController::class, 'indexLogin']);
Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'indexLogin');
    Route::get('/auth/register', 'indexRegister');
    Route::post('/auth/register', 'storeRegister');
    Route::post('/auth/login', 'storeLogin');
    Route::post('/auth/logout', 'storeLogout');
});