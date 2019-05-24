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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('layouts.default');
});
	Route::resource('clients','ClientController');
	//Route::get('devices/{device}/upload','DeviceController@upload')->name('devices.upload');
	Route::post('devices/{device}/upload','DeviceController@upload')->name('devices.upload');
	//Route::get('backups/{id}/download','DeviceController@download')->name('devices.download');
	Route::get('backups/download','BackupController@download')->name('backups.download');
	//Route::get('backups/download','BackupController@download')->name('backup.download');
	Route::resource('backups','BackupController');
	Route::resource('devices','DeviceController');
	Route::resource('suppliers','SupplierController');
	Route::resource('accounts','AccountController');
	Route::resource('licenses','LicenseController');
	Route::resource('items','ItemController');
	Route::resource('orders','OrderController');
