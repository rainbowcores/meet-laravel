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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//meetings routes

Route::get('/meetings', 'MeetingsController@index')->name('meetings.index');

Route::get('meetings/create', 'MeetingsController@create')->name('meetings.create');

Route::post('meetings/create', 'MeetingsController@store')->name('meetings.store');

Route::post('meetings/{meetings}', 'MeetingsController@update')->name('meetings.update');

Route::get('meetings/delete/{meetings}', 'MeetingsController@delete')->name('meetings.delete');

Route::post('meetings/delete/{meetings}', 'MeetingsController@destroy')->name('meetings.destroy');

Route::get('meetings/{meetings}', 'MeetingsController@show')->name('meetings.show');

//rooms routes
Route::get('/rooms', 'RoomsController@index')->name('rooms.index');

Route::get('rooms/create', 'RoomsController@create')->name('rooms.create');

Route::post('rooms/create', 'RoomsController@store')->name('rooms.store');

Route::post('rooms/{rooms}', 'RoomsController@update')->name('rooms.update');

Route::get('rooms/delete/{rooms}', 'RoomsController@delete')->name('rooms.delete');

Route::post('rooms/delete/{rooms}', 'RoomsController@destroy')->name('rooms.destroy');

Route::get('rooms/{rooms}', 'RoomsController@show')->name('rooms.show');

//equipment routes
Route::get('/equipment', 'EquipmentController@index')->name('equipment.index');

Route::get('equipment/create', 'EquipmentController@create')->name('equipment.create');

Route::post('equipment/create', 'EquipmentController@store')->name('equipment.store');

Route::post('equipment/{equipment}', 'EquipmentController@update')->name('equipment.update');

Route::get('equipment/delete/{equipment}', 'EquipmentController@delete')->name('equipment.delete');

Route::post('equipment/delete/{equipment}', 'EquipmentController@destroy')->name('equipment.destroy');

Route::get('equipment/{equipment}', 'EquipmentController@show')->name('equipment.show');








/*Route::resources([
    'employees' => 'EmployeesController',
    'equipment' => 'EquipmentController',
    'meetings' => 'MeetingsController',
    'rooms_equipment' => 'Rooms_EquipmentController',
    'rooms' => 'RoomsController'
]);
*/




