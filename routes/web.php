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

route::get('/about', function (){
    return view('about',[
    'title' => 'About'
    ]);
});

route::get('/login', function (){
    return view('login', [
    'title' => 'Login'
    ]);
});

route::get('/home', function () {
    $username = "Doni";

    $dataMahasiswa = [
        [
            "nama" => "Yadi",
            "NIM" => "012345678",
            "nilai" => 100
        ],
        [
            "nama" => "Evi",
            "NIM" => "012345679",
            "nilai" => 85
        ],
        [
            "nama" => "Ferry",
            "NIM" => "012345689",
            "nilai" => 80
        ],
        [
            "nama" => "Menanda",
            "NIM" => "012345659",
            "nilai" => 70
        ],
        [
            "nama" => "Rafika",
            "NIM" => "012345579",
            "nilai" => 100
        ]
        ];

    return view('home', [
        'title' => 'Home',
        'user' => $username,
        'usia' => 18,
        'isMember' => true,
        'grade' => 100,
        'dataMahasiswa' => $dataMahasiswa
    ]);
});
