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

// Route::get('/about', function () {
//     return '<h1>about us</h1>';
// });

// Route::get('/user/{user}', function ($user) {
//     return 'hai, ' . $user;
// });
// Route::get('/greeting', function () {
//     return 'hai, selamat siang';
// });

Route::get('/warga', function () {
    return 'hai, selamat siang';
});
