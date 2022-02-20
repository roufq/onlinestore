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


// Route::get('/', function () {
//     return view('home'); 
// });
Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search');



// Route::get('/', 'CokeController@index');

// Route::get('/', 'MugController@index');


// CokeController
Route::get('/coke','CokeController@index')->name('coke');


// MugController
Route::get('/mug','MugController@index')->name('mug');


// ShopController
Route::get('/shop','ShopController@index')->name('shop');


// KeranjangController
Route::get('/keranjang','KeranjangController@index')->name('keranjang');


// AuthController
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('/forgot_password', 'AuthController@forgot');
Route::post('/forgot_password', 'AuthController@password');


// PesanController
Route::get('pesan/{id}','PesanController@index');
Route::post('pesan/{id}','PesanController@pesan')->name('pesan');
Route::get('check_out','PesanController@check_out')->name('check_out');
Route::get('/check_out/destroy/{id}','PesanController@destroy');
Route::get('/history/index/{id}', 'PesanController@konfirmasi');
Route::get('/show/{id}','PesanController@show');
Route::get('/edit/{id}','PesanController@edit')->name('edit');
Route::get('/read','PesanController@read');
Route::post('/check_out/update/{id}','PesanController@update')->name('check_out/update');
Route::get('/pesan/pesanan/{id}','PesanController@pesanan')->name('pesan/pesanan');
Route::get('/pesan/pesanan/{id}','PesanController@cart');
Route::get('/province','PesanController@getProvince')->name('/province');
Route::get('province/{province_id}/city','PesanController@getCity')->name('province/{province_id}/city');
Route::get('get-city','PesanController@getCity')->name('getCity');
Route::get('/list_city/{province_id}','PesanController@listCity');
Route::get('/list_subdistrict/{city_id}','PesanController@listSubdistrict');


// DetailController
Route::get('detail_kategori/{id}','DetailkategoriController@index');


// ProfilController
Route::get('/profil','ProfilController@index');
Route::post('/profil/update/{id}','ProfilController@update');


// HistoryController
Route::get('history','HistoryController@index');
Route::get('/history/index','HistoryController@index')->name('history');
Route::get('/history/store/{id}','HistoryController@store');
Route::get('/history/edit/{id}','HistoryController@edit');
Route::post('/history/update/{id}','HistoryController@update');
Route::post('/history/upload/{id}','HistoryController@upload');
// Route::get('/pesan/check_out',function(){
//  return view('pesan/check_out');
// });


// Route::get('/history/index/{id}','HistoryController@index')->name('history/index');

Route::resource('home','FrontendController');