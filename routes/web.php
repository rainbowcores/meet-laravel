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

//rooms_equipment routes
Route::get('/rooms_Equipment', 'Rooms_EquipmentController@index')->name('rooms_Equipment.index');

Route::get('rooms_Equipment/create', 'Rooms_EquipmentController@create')->name('rooms_Equipment.create');

Route::post('rooms_Equipment/create', 'Rooms_EquipmentController@store')->name('rooms_Equipment.store');

Route::post('rooms_Equipment/{rooms_Equipment}', 'Rooms_EquipmentController@update')->name('rooms_Equipment.update');

Route::get('rooms_Equipment/delete/{rooms_Equipment}', 'Rooms_EquipmentController@delete')->name('rooms_Equipment.delete');

Route::post('rooms_Equipment/delete/{rooms_Equipment}', 'Rooms_EquipmentController@destroy')->name('rooms_Equipment.destroy');

Route::get('rooms_Equipment/{rooms_Equipment}', 'Rooms_EquipmentController@show')->name('rooms_Equipment.show');

//employees routes
Route::get('/employees', 'EmployeesController@index')->name('employees.index');

Route::get('employees/create', 'EmployeesController@create')->name('employees.create');

Route::post('employees/create', 'EmployeesController@store')->name('employees.store');

Route::post('employees/{employees}', 'EmployeesController@update')->name('employees.update');

Route::get('employees/delete/{employees}', 'EmployeesController@delete')->name('employees.delete');

Route::post('employees/delete/{employees}', 'EmployeesController@destroy')->name('employees.destroy');

Route::get('employees/{employees}', 'EmployeesController@show')->name('employees.show');









/*Route::resources([
    'employees' => 'EmployeesController',
    'equipment' => 'EquipmentController',
    'meetings' => 'MeetingsController',
    'rooms_equipment' => 'Rooms_EquipmentController',
    'rooms' => 'RoomsController'
]);
*/





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin routes
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()

{

Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');

});

//Member Routes
Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()

{

Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');

});

