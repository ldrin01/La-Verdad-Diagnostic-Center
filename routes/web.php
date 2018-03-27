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

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/add-patient', 'HomeController@addPatient');
	Route::post('/add-patient/add', 'HomeController@addNew');
	Route::get('/add-patient/clicked/{id}', 'HomeController@clicked');
Route::get('/patients-today', 'HomeController@patientsToday');
Route::get('/admissions-list', 'HomeController@admissionsList');
Route::get('/patients-list', 'HomeController@patientsList');
Route::get('/medical-staffs-list', 'HomeController@medicalstaffsList');