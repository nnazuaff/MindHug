<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('shop', function () {
    return view('shop', ['title' => 'Shop']);
});
Route::get('curhat', function () {
    return view('curhat', ['title' => 'Shop']);
});
Route::get('login', function () {
    return view('login', ['title' => 'Login']);
});
