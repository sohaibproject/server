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

Route::get('/','Sitecontroller\SitePageController@getsite');
Route::patch('panier/{rowId}','CartController@update')->name('cart.update');
// Route::get('cosmetique', function () {
//     return view('layouts.site');
// });
// Route::group(['namespace'=>'Sitecontroller','middleware'=>'auth'], function () {
//     Route::get('/admin','DashboardController@index')->name('admin.dashboard');
// });
// Route::group(['namespace'=>'Sitecontroller'], function () {

//     Route::get('loginAdmin','LoginController@getlogin');
//     Route::post('loginAdmin','LoginController@login')->name('login.post');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
