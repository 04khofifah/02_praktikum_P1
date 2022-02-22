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

Route::get('/post', function () {
    return view('post');
});
Route::get('/post_vue', function () {
    return view('post_vue');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('app');
});
//membuat halaman folder viwe index
