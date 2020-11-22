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
    return view('links');
})->name('home');
Route::get('/links', function () {
    return view('links');
})->name('links');

Auth::routes(['register' => false]);

Route::get('/shop', function () {
    return view('shop.main');
})->name('shop');
Route::get('/shop#!/All/c/64746322', function () {
    return view('shop');
})->name('shop.category.all');
Route::get('/shop#!/Prints/c/64743537', function () {
    return view('shop');
})->name('shop.category.prints');
Route::get('/shop#!/Magnets/c/64743533', function () {
    return view('shop');
})->name('shop.category.magnets');
Route::get('/shop#!/Stickers/c/64743532', function () {
    return view('shop');
})->name('shop.category.stickers');
Route::get('/shop#!/Other/c/64742798', function () {
    return view('shop');
})->name('shop.category.other');
Route::get('/shop#!/Last-Chance/c/66208540', function () {
    return view('shop');
})->name('shop.category.limited');
Route::get('/shop#!/Tip/p/260682789/category=0', function () {
    return view('shop');
})->name('tipjar');
Route::get('/shop/about', function () {
    return view('shop.about');
})->name('shop.about');
Route::get('/shop/faq', function () {
    return view('shop.faq');
})->name('shop.faq');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
