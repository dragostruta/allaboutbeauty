<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => ['api']
], function ($router) {

    // Review
    Route::post('/review/create', 'ReviewController@create')->name('review.create');

    // Employee
    Route::post('/employee/getAllEmployeesByService', 'EmployeeInformationController@getAllEmployeesByService')->name('employee.getAllEmployeesByService');
    Route::get('/employee/getAllEmployeesBySalon', 'EmployeeInformationController@getAllEmployeesBySalon')->name('employee.getAllEmployeesBySalon');

    // Service
    Route::post('/service/getAllServicesBySalon', 'ServiceController@getAllServicesBySalon')->name('service.getAllServicesBySalon');

    // Salon
    Route::post('/salon/process', 'SalonController@process')->name('salon.process');
    Route::get('/salon/showSalonRequests', 'SalonController@showSalonRequests')->name('salon.showSalonRequests');

});
