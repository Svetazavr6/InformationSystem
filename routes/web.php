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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/add_patient', 'HomeController@add_patient');
Route::get('/GlavOsmotr', 'HomeController@GlavOsmotr');
Route::get('/dannie', 'HomeController@Dannie');
Route::get('/menu', 'HomeController@menu');
Route::get('/pervicka', 'HomeController@Pervicka');
Route::get('/ListNaznacheniy', 'HomeController@ListNaznacheniy');
Route::get('/ListNaznacheniy2', 'HomeController@ListNaznacheniy2');
Route::get('/Soglasie', 'HomeController@Soglasie');
Route::get('/patients', 'HomeController@patients');
Route::get('/osmotri', 'HomeController@osmotri');
Route::get('/analizi', 'HomeController@analizi');
Route::get('/palati', 'HomeController@palati');
Route::get('/palata', 'HomeController@palata');
Route::get('/oak', 'HomeController@oak');
Route::get('/patient_operations', 'HomeController@patient_operations');
Route::get('/dokumenti', 'HomeController@dokumenti');
Route::get('/diagnozi', 'HomeController@diagnozi');
Route::get('/klin_razbor', 'HomeController@klin_razbor');
Route::get('/operacia', 'HomeController@operacia');
Route::get('/Gistologiya', 'HomeController@Gistologiya');
Route::get('/patients_vievs', 'HomeController@patients_vievs');
Route::get('/viev_pa', 'HomeController@viev_pa');
