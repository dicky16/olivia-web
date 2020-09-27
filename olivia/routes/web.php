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
        Route::get('artikel', 'Admin\AdminPageController@artikel')->name('artikel');
		Route::get('sejarah', 'Admin\AdminPageController@sejarah')->name('sejarah');
        //berita
        Route::prefix('berita')->group(function () {
            Route::get('data', 'Admin\BeritaController@getBeritaDataTable');
            Route::get('datatable', 'Admin\BeritaController@loadDataTable');
            // Route::post('/', 'Admin\AdminArtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
        //lomba
        Route::prefix('lomba')->group(function () {
            Route::get('data', 'Admin\LombaController@getBeritaDataTable');
            Route::get('data', 'Admin\LombaController@getBeritaDataTable');
            Route::get('datatable', 'Admin\BeritaController@loadDataTable');
            
            // Route::post('/', 'Admin\AdminArtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
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
