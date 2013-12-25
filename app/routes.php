<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


/*Tümünü Daha Sonra İngilizceye çevir*/
//Anasayfa
Route::get('anasayfa',array('as' => 'anasayfa', 'uses' => 'makalelerController@index'));

//images
Route::get('images',array('as' => 'images', 'uses' => 'kattmatthomeController@index'));

// Üye ol userscontrollers@singUpForm fonksiyonu ile üyelik formunun olduğu sayfa basılır...
Route::get('uye-ol', array('as' => 'uye-ol', 'uses' => 'usersController@signUpForm'));

//giriş yap
Route::get('giris-yap', array('as' => 'giris-yap', 'uses' => 'usersController@signInForm'));

//Kullanıcıları Getirir
Route::get('kullanicilar', array('as' => 'kullanicilar', 'uses' => 'usersController@index'));

//makaleleri getirir
Route::get('makaleler', array('as' => 'makaleler', 'uses' => 'makalelerController@index'));

//makale ekleme formunu basar
Route::get('makaleler/makale-ekle', array('as' => 'makale-ekle', 'uses' => 'makalelerController@create'));