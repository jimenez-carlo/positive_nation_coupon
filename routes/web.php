<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/details_2', function () {
    return view('details_2');
});
Route::get('/details', function () {
    return view('details');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/index_2', function () {
    return view('index_2');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/result', function () {
    return view('results');
});
Route::get('/submit', function () {
    return view('submit');
});
Route::get('/untitled', function () {
    return view('Untitled-1');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
