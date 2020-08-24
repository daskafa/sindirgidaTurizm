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
// https://pqina.nl/filepond/?ref=pqina
// Login Route's
Route::get('/login', 'Back\authController@login')->middleware('isLogin')->name('login');
Route::post('/login', 'Back\authController@loginPost')->middleware('isLogin')->name('adminLoginPost');
Route::get('/logout', 'Back\authController@logout')->middleware('isAdmin')->name('logout');

// Front route's
Route::get('/', 'Front\HomepageController@index')->name('homepage');
Route::get('/GezilecekYerler', 'Front\HomepageController@gezilecekYerler')->name('gezilecekYerler');
Route::get('/GezilecekYerler2', 'Front\HomepageController@gezilecekYerler2')->name('gezilecekYerler2');
Route::get('/Tarihimiz', 'Front\HomepageController@tarihimiz')->name('tarihimiz');
Route::get('/İletisim', 'Front\HomepageController@iletisim')->name('iletisim');
Route::get('/KonaklamaTesisleri', 'Front\HomepageController@konaklamaTesisleri')->name('konaklamaTesisleri');
Route::get('/YapmadanDonmeyin', 'Front\HomepageController@yapmadanDonmeyin')->name('yapmadanDonmeyin');
Route::get('/YapmadanDonmeyin2', 'Front\HomepageController@yapmadanDonmeyin2')->name('yapmadanDonmeyin2');
Route::get('/Ulasim', 'Front\HomepageController@ulasim')->name('ulasim');
Route::get('/SindirgidaNeYenir', 'Front\HomepageController@sindirgidaNeYenir')->name('sindirgidaNeYenir');
Route::get('/YagcibedirHalisi', 'Front\HomepageController@yagcibedirHalisi')->name('yagcibedirHalisi');
Route::get('/Festival', 'Front\HomepageController@festival')->name('festival');
Route::get('/Tumhaberler', 'Front\HomepageController@tumhaberler')->name('tumhaberler');
Route::get('/haberler/{slug}', 'Front\HomepageController@single')->name('single');

// Back Route's
Route::get('dashboard', 'Back\DashboardController@index')->name('dashboard')->middleware('isAdmin');
//Create Route's
Route::get('/dashboard/create', 'Back\ArticleControlller@create')->name('create');
Route::post('/dashboard/createPost', 'Back\ArticleControlller@createPost')->name('createPost');
//Delete Route's
Route::get('/dashboard/deletePost/{id}', 'Back\ArticleControlller@deletePost')->name('deletePost');
//Update Route's
Route::get('/dashboard/update/{id}', 'Back\ArticleControlller@update')->name('update');
Route::post('dashboard/updatePost/{id}', 'Back\ArticleControlller@updatePost')->name('updatePost');



























//
