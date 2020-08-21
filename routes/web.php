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

// Front route's
Route::get('/', 'Front\HomepageController@index')->name('homepage');
Route::get('/GezilecekYerler', 'Front\HomepageController@gezilecekYerler')->name('gezilecekYerler');
Route::get('/GezilecekYerler2', 'Front\HomepageController@gezilecekYerler2')->name('gezilecekYerler2');
Route::get('/Tarihimiz', 'Front\HomepageController@tarihimiz')->name('tarihimiz');
Route::get('/İletisim', 'Front\HomepageController@iletisim')->name('iletisim');
