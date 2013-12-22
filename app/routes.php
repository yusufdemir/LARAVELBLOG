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

Route::get('anasayfa',array('as' => 'anasayfa', 'uses' => 'makalelerController@index'));

Route::get('test', function()
{
    return 'Direk Return İle Route döndürüldüğünde ekrana döndürülen text\'i basar! ';
});





Route::get('users',function()
{
    $kullanicilar = user::all();

    return View::make('users')->with('kullanicilar',$kullanicilar);

});

Route::get('makaleler', array('as' => 'makaleler', 'uses' => 'makalelerController@index'));


Route::get('makaleler/makale-ekle', array('as' => 'makale-ekle', 'uses' => 'makalelerController@create'));