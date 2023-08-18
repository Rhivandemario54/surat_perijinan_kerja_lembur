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

Route::get('/about', function () {
    return view('about', [
        "name" => "Rhivan Gabrille Demarrio",
        "email" => "rhivandemario54@gmail.com",
        "image" => "profile.JPEG"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
Route::get('/karyawan', function () {
    return view('karyawan');
});