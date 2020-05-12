<?php

Route::group(['prefix' => 'api'], function () {
    Route::get('employee/get/{id}', "People10\Controllers\EmployeeController@get")->name("employee.get");
    Route::post('employee/set', "People10\Controllers\EmployeeController@set")->name("employee.set");
    Route::post('employee/unset/{id}', "People10\Controllers\EmployeeController@unset")->name("employee.unset");

    Route::get('employeeWebHistory/get/{id}', "People10\Controllers\EmployeeWebHistoryController@get")->name("employeeWebHistory.get");
    Route::post('employeeWebHistory/set', "People10\Controllers\EmployeeWebHistoryController@set")->name("employeeWebHistory.set");
    Route::post('employeeWebHistory/unset/{id}', "People10\Controllers\EmployeeWebHistoryController@unset")->name("employeeWebHistory.unset");
});


