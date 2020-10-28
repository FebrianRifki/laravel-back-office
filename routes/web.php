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
    return view('pages/adminLogin');
});
/*user route*/
Route::resource('users', 'UserController');

// Authentication Route
Route::get('/admin/login', 'Auth\LoginController@getLogin')->name('adminLogin');
Route::post('/admin/login', 'Auth\LoginController@postLogin');

// Registration Route
Route::get('/admin/registration', 'Auth\LoginController@registration');
Route::post('/admin/registration', 'Auth\LoginController@postRegistration'); 

Route::get('/index', 'Auth\LoginController@dashboard'); 
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/user/{nama}', 'UserController1@getUser');
Route::get('/form', 'UserController@form');
Route::get('/product', 'ProductController@index');
Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
Route::post('/user/process', 'UserController1@insertUser');

Route::get('/blog', function(){
    return view('pages/blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
