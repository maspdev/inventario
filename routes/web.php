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

Route::get('/', 'DashboardController@index')->name('dashboard.index')->middleware(['auth']);

// Brands Routes
Route::resource('brands', 'BrandController')->middleware(['auth']);

// Categories Routes
Route::resource('categories', 'CategoryController')->middleware(['auth']);

// Devices Routes
Route::resource('devices', 'DeviceController')->middleware(['auth']);

// Licences Routes
Route::resource('licences', 'LicenceController')->middleware(['auth']);

// Patterns Routes
Route::resource('patterns', 'PatternController')->middleware(['auth']);

// Sellers Routes
Route::resource('sellers', 'SellerController')->middleware(['auth']);

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/login/{provider}', 'Auth\SocialLoginController@redirectToProvider')->name('socialite.provider');
Route::get('/auth/{provider}/callback', 'Auth\SocialLoginController@handleProviderCallback')->name('socialite.callback');
