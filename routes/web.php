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

// Example Routes
Route::view('/', 'landing');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/users', 'UsersController@index')->name('users');
// Route::get('/user-edit/{id}', 'UsersController@edit')->name('user.edit');
// Route::patch('/user-update/{id}', 'UsersController@update')->name('user.update');
// Route::delete('/user-delete/{id}', 'UsersController@destroy')->name('user.destroy');

Route::resource('/profile', 'ProfileController');
Route::resource('/users', 'UsersController');