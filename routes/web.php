<?php

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
    return view('welcome');
});

route::get('/hello', function() {
    return 'hello Universitas Terbuka';
});


route::get('/helloview', function (){
    return view('helloview');
});

route::get('/home', function (){
    return view('home');
});

route::get('/login', function (){
    return view('login');
});