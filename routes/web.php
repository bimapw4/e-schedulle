<?php

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

Route::get('/dashboard', function () {
    return view('schedule');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/agenda', function () {
    return view('agenda');
});
Route::get('/member', function () {
    return view('member');
});

