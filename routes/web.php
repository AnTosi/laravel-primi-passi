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
    $animals = 'gatti';
    $number = '3';
    $cats_name = [
        'Dafne', 'Lenticchia', 'Jinx'
    ];
    return view('home', compact('animals', 'number', 'cats_name'));
})->name('home');

Route::get('/bonus', function () {
    return view('bonus');
})->name('bonus');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/story', function () {
    return view('story');
})->name('story');

Route::get('/enough', function () {
    return view('enough');
})->name('enough');

