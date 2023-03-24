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
route::get('/', function () {
    $username = "Rafika";
    $dataMahasiswa = "";
    return view('home', [
            'title' => 'Home',
            'user' => $username,
            'usia' => 18,
            'isMember' => true,
            'grade' => 100,
            'dataMahasiswa' => $dataMahasiswa
    ]);
});

route::get('/home', [HomeController::class, 'index'] );

route::get('/about', [AboutController::class, 'index'] );

// AUTH
route::get('/auth/login', [AuthController::class, 'indexLogin']);
route::get('/auth/register', [AuthController::class, 'indexRegister']);