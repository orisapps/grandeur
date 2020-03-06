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



Route::get('/', function () {
    return view('auth.login');
});
Route::group(['middleware' => ['guest']], function () {
    Route::get('/register/{reference}', 'FrontController@referRegister');
    Route::post('clientregister', '\Auth\RegisterController@clientregister');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'DashboardController@index')->name('home');
Route::get('/home/profile', 'DashboardController@profile')->name('profile');
Route::get('/home/myclient', 'DashboardController@myclient')->name('myclient');
Route::get('/home/generation1', 'GenerationController@generationone')->name('generationone');
Route::get('/home/generation2', 'GenerationController@generationtwo')->name('generationtwo');
Route::get('/home/generation3', 'GenerationController@generationthree')->name('generationthree');
Route::get('/home/generation4', 'GenerationController@generationfour')->name('generationfour');
Route::get('/home/generation5', 'GenerationController@generationfive')->name('generationfive');
Route::get('/home/transactions', 'DashboardController@transactions')->name('transactions');
Route::get('/home/faq', 'DashboardController@faq')->name('faq');

//Route::get('/{{$user->cid}}', 'ClientController@clientregister')->name('clientregister');

});

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.


});
