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

Route::get('/meetings', 'MeetingsController@index')->name('meetings.index');

Route::get('meetings/create', 'MeetingsController@create')->name('meetings.create');

/*Route::resources([
    'employees' => 'EmployeesController',
    'equipment' => 'EquipmentController',
    'meetings' => 'MeetingsController',
    'rooms_equipment' => 'Rooms_EquipmentController',
    'rooms' => 'RoomsController'
]);
*/




