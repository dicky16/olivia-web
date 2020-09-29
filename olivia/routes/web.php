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
            Route::get('data', 'Admin\Home\BeritaController@getBeritaDataTable');
            Route::post('/', 'Admin\Home\BeritaController@store');
            Route::get('datatable', 'Admin\Home\BeritaController@loadDataTable');
            Route::get('edit/{id}', 'Admin\Home\BeritaController@edit');
            Route::post('update/{id}', 'Admin\Home\BeritaController@update');
            Route::get('delete/{id}', 'Admin\Home\BeritaController@destroy');
        });
        //lomba
        Route::prefix('lomba')->group(function () {
            Route::get('/', 'Admin\Home\LombaController@index');
            Route::get('data', 'Admin\Home\LombaController@getLombaDataTable');
            Route::get('datatable', 'Admin\Home\LombaController@loadDataTable');
            Route::post('/', 'Admin\Home\LombaController@store');
            Route::get('edit/{id}', 'Admin\Home\LombaController@edit');
            Route::post('update/{id}', 'Admin\Home\LombaController@update');
            Route::get('delete/{id}', 'Admin\Home\LombaController@destroy');
        });
        //artikel
        Route::prefix('artikel')->group(function () {
            Route::get('/', 'Admin\Home\ArtikelController@index');
            Route::get('data', 'Admin\Home\ArtikelController@getArtikelDataTable');
            Route::get('datatable', 'Admin\Home\BeritaController@loadDataTable');
            // Route::post('/', 'Admin\Home\AdminAHome\rtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
        //Foto
        Route::prefix('foto')->group(function () {
            Route::get('/', 'Admin\AdminPageController@foto');
            Route::get('data', 'Admin\FotoController@getBeritaDataTable');
            Route::get('data', 'Admin\FotoController@getBeritaDataTable');
            Route::get('datatable', 'Admin\FotoController@loadDataTable');
            // Route::post('/', 'Admin\AdminArtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
        //VIDEO
        Route::prefix('video')->group(function () {
            Route::get('/', 'Admin\AdminPageController@video');
            Route::get('data', 'Admin\VideoController@getBeritaDataTable');
            Route::get('data', 'Admin\VideoController@getBeritaDataTable');
            Route::get('datatable', 'Admin\VideoController@loadDataTable');
            // Route::post('/', 'Admin\AdminArtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
         //Pertanyaan User(other Question)
        Route::prefix('pertanyaan')->group(function () {
            Route::get('/', 'Admin\AdminPageController@Pertanyaan');
            Route::get('data', 'Admin\pertanyaanController@getBeritaDataTable');
            Route::get('data', 'Admin\pertanyaanController@getBeritaDataTable');
            Route::get('datatable', 'Admin\pertanyaanController@loadDataTable');
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
