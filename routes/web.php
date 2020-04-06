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

Route::get('/', function () {
    return redirect(route('rooms.home'));
});

Auth::routes();

Route::get('rooms/home', 'RoomController@home')->name('rooms.home');
Route::get('rooms/booked', 'RoomController@booked')->name('rooms.booked');
Route::get('rooms/details', 'RoomController@details')->name('rooms.details');
Route::resource('rooms', 'RoomController');

Route::get('/support', 'SupportController@index')->name('support.index');