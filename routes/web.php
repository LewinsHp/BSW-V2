<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


route::group(['middleware' => ['auth','ceklevel:user,admin,staf,kasubbid,kabid,direktur']], function () {
    Route::get('/redirect','DashboardController@redirect')->name('redirect');
    Route::get('/dashboard','DashboardController@dashboard_index')->name('dashboard');
    Route::get('/beranda', 'DashboardController@beranda')->name('beranda');
    Route::get('/listpermohonan','DashboardController@list_permohonan')->name('listpermohonan');
    Route::get('/tracking','DashboardController@tracking_permohonan')->name('tracking');
    Route::get('/usulan','DashboardController@usulan')->name('usulan');
    Route::get('/datadev','DashboardController@datadev')->name('datadev');
    Route::get('/monitoring','DashboardController@monitoring')->name('monitoring');
    Route::get('/layanan','DashboardController@layanan')->name('layanan');
    Route::get('/liburnasional','DashboardController@liburnasional')->name('liburnasional');
    Route::get('/masterplane','DashboardController@masterplane')->name('masterplane');
    Route::get('/prosesizin','DashboardController@prosesizin')->name('prosesizin');
    Route::get('/role','DashboardController@role')->name('role');

    #Manajemen User
    Route::get('/user','UsersController@index')->name('user');
    Route::get('/input-user','UsersController@create')->name('input-user');
    Route::post('/save-user','UsersController@store')->name('save-user');
    Route::get('/edit-user/{id}','UsersController@edit')->name('edit-user');
    Route::post('/update-user/{id}','UsersController@update')->name('update-user');
    Route::get('/delete-user/{id}','UsersController@destroy')->name('delete-user');

    #permohonan
    Route::get('/buatpermohonan','PermohonanController@index')->name('buatpermohonan');
    Route::post('/simpan','PermohonanController@store')->name('simpan');
    Route::get('/listpermohonan','PermohonanController@create')->name('listpermohonan');

    #Data Permohonan (Staff Pemroses)
    Route::get('/data-permohonan','PermohonanController@index_staf')->name('data-permohonan');
    Route::get('/edit-permohonan/{id}','PermohonanController@edit')->name('edit-permohonan');
    Route::post('/update-permohonan/{id}','PermohonanController@update')->name('update-permohonan');

    Route::get('/posisi','DashboardController@posisi')->name('posisi');
    Route::get('/datapemohon','DashboardController@datapemohon')->name('datapemohon');
    Route::get('/statistik','DashboardController@statistik')->name('statistik');
    Route::get('/helpdesk','DashboardController@helpdesk')->name('helpdesk');
    Route::get('/caridata','DashboardController@caridata')->name('caridata');
});

Auth::routes();
Route::get('/profil','UsersController@profil')->name('profil');

#reklame
Route::get('/reklame', function () {
    return view('Pages.reklame.index');
})->name('reklame');
#reklame

#regulasi
Route::get('/regulasi', function () {
    return view('Pages.regulasi');
})->name('regulasi');
#regulasi

#berita
Route::get('/kontak', function (){
    return view('Pages.kontak');
})->name('kontak');
#berita

#search
Route::get('/search','PermohonanController@search');
Route::get('/delete/{id}','PermohonanController@destroy')->name('delete');
#search

#download
Route::get('/download','PermohonanController@download')->name('download');
#download

#detail
Route::get('/detail','DashboardController@detail')->name('detail');
#detail
