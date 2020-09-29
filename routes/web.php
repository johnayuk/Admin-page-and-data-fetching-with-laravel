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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>['auth','admin']], function () {

    Route::get('/adminPage', function () {
        return view('admin.adminPage');
    });

    Route::get('/user_patient', 'PatientController@patientcreate');

    Route::get('/role-register', 'Admin\DashboardController@registered');

    Route::get('/role-edit/{id}','Admin\DashboardController@edit');

    Route::put('/update-users/{id}','Admin\DashboardController@update');
     
});

