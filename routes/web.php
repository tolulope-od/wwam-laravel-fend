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
    return view('home');
});
Route::get('/pages/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/users/forgot_password', function () {
    return('forgot_password');
});
Route::get('/users/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
