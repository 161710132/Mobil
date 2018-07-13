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
    return view('home');
});


	Route::get('/home', 'HomeController@index')->name('home');

	Route::group(['prefix'=>'adminn', 'middleware'=>['auth','role:admin']], function(){
	Route::resource('mobil','MobilController');
	Route::get('daftarmobil','RentalController@daftarmobil')->name('daftarmobil');
	Route::get('thanks','RentalController@thanks')->name('thanks');
	Route::resource('supir','SupirController');
	Route::resource('rental','RentalController');
	Route::resource('kembali','KembaliController');

});
//member 

Route::group(['prefix'=>'member', 'middleware'=>['auth','role:member']], function(){
Route::get('daftarmobil','RentalController@daftarmobil')->name('daftarmobil');
Route::resource('karyawan','KaryawanController');
Route::resource('rentalkaryawan','RentalController');
Route::resource('kembalikaryawan','KembaliController');
Route::get('thanks','KaryawanController@thanks')->name('thanks');
Route::get('mobil','KaryawanController@mobil')->name('mobil');
Route::get('supir','KaryawanController@supir')->name('supir');
Route::get('rental','KaryawanController@rental')->name('rental');
Route::get('kembali','KaryawanController@kembali')->name('kembali');
Route::get('/showsupir/{id}','KaryawanController@showsupir')->name('showsupir');
Route::get('/showrental/{id}','KaryawanController@showrental')->name('showrental');
Route::get('daftarmobil','MemberController@daftarmobil')->name('daftarmobil');
// Route::get('/createkembali/{id}','KaryawanController@createkembali')->name('createkembali');
// Route::post('/createkembali/{id}','KaryawanController@storekembali')->name('createkembali');
Route::resource('member','MemberController');

Route::resource('memberrental','RentalmemberController');
Route::resource('membersupir','SupirmemberController');
}); 




	 



