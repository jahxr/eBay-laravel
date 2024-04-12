<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/loginvendedor', function () {
    return view('loginvendedor');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/pay', function () {
    return view('pagar');
});
Route::get('/addproduct', function () {
    return view('addproduct');
});