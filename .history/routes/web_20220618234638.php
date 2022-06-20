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
    return view('frontend/index3');
})->name('homepage');

Route::get('swastik', function () {
    return view('admin/swastik');
})->name('swastik');

Route::get('welcome', function () {
    return view('frontend/welcome');
})->name('welcome');

Route::get('/404', function () {
    return view('frontend/404');
});

Route::get('about', function () {
    return view('frontend/about');
})->name('about');

Route::get('blog', function () {
    return view('frontend/blog-grid');
})->name('blog');

Route::get('single-blog' function(){
    return view('frontend/single');
})->name('single');
