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

Route::get('/login', function () {
    return view('login');
});

Route::post('/auth/login','Controller@login');

Route::get('/', function () {
    return view('schedule');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::post('/agenda', function () {
    return view('agenda');
});
Route::get('/member', function () {
    return view('member');
});

