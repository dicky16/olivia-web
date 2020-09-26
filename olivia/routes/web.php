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

//route admin
Route::group(['middleware' => ['auth', 'checkRole:1']],function() {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'Admin\AdminPageController@dashboard')->name('dashboard');
        Route::get('berita', 'Admin\AdminPageController@berita')->name('berita');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('tes', function () {
    return view('tes');
});

Route::get('coba', 'CobaController@coba');

Auth::routes();

Auth::routes(['verify' => true]);
  
Route::get('/home', 'HomeController@index')->name('home');
