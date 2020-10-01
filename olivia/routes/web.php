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

         //Pengumuman
         Route::prefix('pengumuman')->group(function () {
            Route::get('/', 'Admin\AdminPageController@pengumuman');
            Route::get('data', 'Admin\Home\PengumumanController@getPengumumanDataTable');
            Route::get('datatable', 'Admin\Home\PengumumanController@loadDataTable');
            Route::post('/', 'Admin\Home\PengumumanController@store');
            Route::get('edit/{id}', 'Admin\Home\PengumumanController@edit');
            Route::post('update/{id}', 'Admin\Home\PengumumanController@update');
            Route::get('delete/{id}', 'Admin\Home\PengumumanController@destroy');
        });

        //STRUKTUR ORGANISASI
        Route::prefix('struktur')->group(function () {
            Route::get('/', 'Admin\AdminPageController@struktur');
            Route::get('data', 'Admin\strukturOrganisasiController@getstrukturOrganisasiDataTable');
            Route::get('data', 'Admin\strukturOrganisasiController@getstrukturOrganisasiDataTable');
            Route::get('datatable', 'Admin\strukturOrganisasiController@loadDataTable');
            // Route::post('/', 'Admin\Home\AdminAHome\rtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
         //VISI DAN MISI
         Route::prefix('visimisi')->group(function () {
            Route::get('/', 'Admin\AdminPageController@visimisi');
            Route::get('data', 'Admin\visimisiController@getvisimisiDataTable');
            Route::get('data', 'Admin\visimisiController@getvisimisiDataTable');
            Route::get('datatable', 'Admin\visimisiController@loadDataTable');
            // Route::post('/', 'Admin\Home\AdminAHome\rtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
        //TUGAS DAN Fungsi
        Route::prefix('tugasfungsi')->group(function () {
            Route::get('/', 'Admin\AdminPageController@tugasfungsi');
            Route::get('data', 'Admin\tugasfungsiController@gettugasfungsiDataTable');
            Route::get('data', 'Admin\tugasfungsiController@gettugasfungsiDataTable');
            Route::get('datatable', 'Admin\tugasfungsiController@loadDataTable');
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
        Route::prefix('tanya')->group(function () {
            Route::get('/', 'Admin\AdminPageController@pertanyaan');
            Route::get('data', 'Admin\Footer\PertanyaanUserController@getAllPertanyaan');
            Route::get('datatable', 'Admin\Footer\PertanyaanUserController@loadDataTable');
            Route::post('kirim', 'Admin\Footer\PertanyaanUserController@jawabPertanyaan');
            Route::get('show/{id}', 'Admin\Footer\PertanyaanUserController@show');
            Route::get('tes', function() {
                // dd(session('email'));
                $data = session('email');
                dd($data['pertanyaan']);
                return session('email');
            });
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
        //FAQ
        Route::prefix('faq')->group(function () {
            Route::get('/', 'Admin\AdminPageController@faq');
            Route::get('data', 'Admin\Footer\FaqController@getFAQDataTable');
            Route::get('datatable', 'Admin\Footer\FaqController@loadDataTable');
            Route::post('/', 'Admin\Footer\FaqController@store');
            Route::get('edit/{id}', 'Admin\Footer\FaqController@edit');
            Route::post('update/{id}', 'Admin\Footer\FaqController@update');
            Route::get('delete/{id}', 'Admin\Footer\FaqController@destroy');
        });
         //SOCIAL MEDIA
         Route::prefix('sosialmedia')->group(function () {
            Route::get('/', 'Admin\AdminPageController@socialmedia');
            Route::get('data', 'Admin\sosialmediaController@getBeritaDataTable');
            Route::get('data', 'Admin\sosialmediaController@getBeritaDataTable');
            Route::get('datatable', 'Admin\sosialmediaController@loadDataTable');
            // Route::post('/', 'Admin\AdminArtikelController@store');
            // Route::get('edit/{id}', 'Admin\AdminArtikelController@edit');
            // Route::post('update/{id}', 'Admin\AdminArtikelController@update');
            // Route::get('delete/{id}', 'Admin\AdminArtikelController@destroy');
        });
    });
    
});

Route::get('/', 'User\UserPageController@index');

Route::get('tes', function () {
    return view('tes');
});

Route::get('coba', 'CobaController@coba');

Auth::routes();

Auth::routes(['verify' => true]);
  
Route::get('/home', 'HomeController@index')->name('home');

Route::any('/{all}', function(){
    return '404 ! It Works';
})->where('all', '.*');
