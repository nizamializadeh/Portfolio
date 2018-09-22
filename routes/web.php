<?php

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


Route::get('/', 'Frontend\HomeController@index');



Auth::routes();
Route::get('/register', 'Frontend\HomeController@index');
Route::get('/login', 'Frontend\HomeController@index');
Route::get('/password/reset', 'Frontend\HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'Admin\LoginController@login')->name('adminLogin');
Route::post('/admin/login', 'Admin\LoginController@postLogin')->name('postAdminLogin');

Route::group(['middleware' => 'admin','prefix' => 'admin'],function (){
    Route::get('/home', 'Admin\HomeController@index')->name('adminHome');
    Route::resource('user', 'Backend\UserController');
    Route::resource('social', 'Backend\SocialController');
    Route::resource('service', 'Backend\ServiceController');
    Route::resource('portfolio', 'Backend\PortfolioController');
    Route::resource('news', 'Backend\NewsController');
    Route::resource('category', 'Backend\CategoriController');
    Route::resource('about', 'Backend\AboutController');
});
