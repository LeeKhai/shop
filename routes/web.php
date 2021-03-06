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
// Route::get('/', 'HomeController@index')->name('home');

// Route::resource('itemController', 'ItemController');

// Route::get('/single', function () {
//     return view('shop/single');
// });

// Route::get('/login', function () {
//     return view('anonymous/login');
// });

// Route::get('/anonymous/home', function () {
//     return view('anonymous/home');
// });

Route::get('{vue?}', function(){
    return view('vue-layout.vue');
})->where('vue', '[\/\w\.-]*')->name('vue');
