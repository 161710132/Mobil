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



Route::get('/', 'Select2Controller@index');
Route::get('/cari', 'Select2Controller@loadData');



Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


	Route::get('/home', 'HomeController@index')->name('home');

	Route::group(['prefix'=>'adminn', 'middleware'=>['auth','role:admin']], function(){
	Route::resource('mobil','MobilController');
	Route::get('daftarmobil','RentalController@daftarmobil')->name('daftarmobil');
	Route::resource('customer','CustomerController');
	Route::resource('supir','SupirController');
	Route::resource('rental','RentalController');
	Route::resource('kembali','KembaliController');
});

	Route::group(['prefix'=>'member', 'middleware'=>['auth','role:member']], function(){
	Route::resource('karyawan','KaryawanController');
	Route::resource('customerkaryawan','CustomerController');
	Route::resource('supirkaryawan','SupirController');
	Route::resource('rentalkaryawan','RentalController');
	Route::resource('kembalikaryawan','KembaliController');
});




	 Route::get('daftarmobil','RentalController@daftarmobil')->name('daftarmobil');



