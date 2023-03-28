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

Route::get('/home', [HomeController::class, 'index'] );
Route::get('/detail/{id}', [HomeController::class, 'detail'] );

Route::get('/tutor', [HomeController::class, 'tutor'] );
Route::get('/detailTutor/{id}', [HomeController::class, 'detailTutor'] );

Route::get('/about', [AboutController::class, 'index'] );

// AUTH
Route::get('/auth/login', [AuthController::class, 'indexLogin']);

Route::get('/auth/register', [AuthController::class, 'indexRegister']);