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

Route::get('/', 'CompanyController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/company-list', 'CompanyController@viewCompany');
    Route::get('/add/company', 'CompanyController@add')->name('company.add');
    Route::post('/company', 'CompanyController@store')->name('company.store');
    Route::delete('/company/{id}', 'CompanyController@delete')->name('company.delete');
    Route::get('/company/{id}', 'CompanyController@edit')->name('company.edit');
    Route::patch('/company/{id}', 'CompanyController@update')->name('company.update');
    
    Route::get('/employee-list', 'EmployeeController@viewEmployee');
    Route::get('/add/employee', 'EmployeeController@add')->name('employee.add');
    Route::post('/employee', 'EmployeeController@store')->name('employee.store');
    Route::delete('/employee/{id}', 'EmployeeController@delete')->name('employee.delete');
    Route::get('/employee/{id}', 'EmployeeController@edit')->name('employee.edit');
    Route::patch('/company/{id}', 'CompanyController@update')->name('company.update');
});


