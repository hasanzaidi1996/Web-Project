<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Session\Session;

Session();

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

Route::get('/live_search', function () {
    return view('live_search');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/Buying', function () {
    return view('Buying');
});
Route::get('/Contact', function () {
    return view('Contact');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/Repair', function () {
    return view('Repair');
});
Route::get('/Selling', function () {
    if(Session()->has('user')) {
        return view('Selling');
    } else {
        return view('Login');
    }
});
Route::get('/Services', function () {
    return view('Services');
});
Route::get('/Message', function () {
    return view('Message');
});
Route::get('/Logout', function () {
    Session()->forget('user');
    return view('Login');
});
Route::get('/InvalidLogin', function () {
    return view('InvalidLogin');
});
Route::post('/Register', 'App\Http\Controllers\UserController@storeUser');
Route::post('/Login', 'App\Http\Controllers\UserController@getUser');
Route::post('/Contact', 'App\Http\Controllers\ContactController@storeContact');
Route::post('/Repair', 'App\Http\Controllers\RepairController@storeProblem');
Route::post('/Selling', 'App\Http\Controllers\VehicleController@StoreSelling');
Route::get('/Buying', 'App\Http\Controllers\VehicleController@getVehicle');
Route::get('VehicleDetails/{id}', 'App\Http\Controllers\VehicleController@viewDetials');
Route::get('/ViewAds', 'App\Http\Controllers\VehicleController@viewAds');
Route::post('/UpdateSelling', 'App\Http\Controllers\VehicleController@editAd');
Route::get('UpdateSelling/{id}', 'App\Http\Controllers\VehicleController@adID');
Route::get('deleteAd/{id}', 'App\Http\Controllers\VehicleController@deleteUserAd');
Route::get('/searching', 'App\Http\Controllers\VehicleController@productSuggestions');
Route::get('/UpdateSelling', function() {
    return view('UpdateSelling');
});
Route::get('/Buying', 'App\Http\Controllers\LiveSearch@index');
Route::get('/Buying/action', 'App\Http\Controllers\LiveSearch@action')->name('Buying.action');
