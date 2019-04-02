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

Route::get('/index', function () {
    return view('index');
});
Route::get('/course', function () {
    return view('course');
});

Route::get('/app-email', function () {
    return view('app-email');
});
Route::get('/css-media', function () {
    return view('css-media');
});
Route::get('/eCommerce-invoice', function () {
    return view('eCommerce-invoice');
});
Route::get('/user-profile-page', function () {
    return view('user-profile-page');
});

Route::get('/sections', function () {
    return view('sections');
});