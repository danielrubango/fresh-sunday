<?php

Auth::routes();

Route::prefix('admin')->group(function () {
	
	Route::get('reservations', 'Admin\ReservationsController@index');
	
});

Route::get('/', function () {
	return view('welcome');
});

Route::get('reservations', 'ReservationsController@index')->name('reservation.home');
Route::get('reservations/{reservation}', 'ReservationsController@show');
Route::post('reservations', 'ReservationsController@create')->name('reservation.create');

Route::get('chambres', 'BedroomsController@index')->name('chambre.home');
Route::get('chambres/{bedroom}', 'BedroomsController@show');
Route::get('chambres/{bedroom}/reservation', 'ReservationsController@create')->name('chambre.reserver');