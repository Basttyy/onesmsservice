<?php
Route::group(['prefix' => 'api'], function () {
    Route::get('/install/pre-requisite', 'Onesms\Service\Controllers\InstallController@preRequisite');
    Route::post('/install/validate/{option}', 'Onesms\Service\Controllers\InstallController@store');
    Route::post('/install', 'Onesms\Service\Controllers\InstallController@store');
    Route::post('/license', 'Onesms\Service\Controllers\LicenseController@verify');

    Route::post('/biometric', 'Onesms\Service\Controllers\AttendanceController@read');
    Route::post('/biometric/v2', 'Onesms\Service\Controllers\AttendanceController@readV2');

    Route::get('/about', 'Onesms\Service\Controllers\HomeController@about');
    Route::get('/support', 'Onesms\Service\Controllers\SupportController@index');
    Route::post('/support', 'Onesms\Service\Controllers\SupportController@submit');
    Route::get('/update', 'Onesms\Service\Controllers\UpdateController@index');
    Route::post('/download', 'Onesms\Service\Controllers\UpdateController@download');
    Route::post('/update', 'Onesms\Service\Controllers\UpdateController@update');
    Route::post('/help/content', 'Onesms\Service\Controllers\HomeController@helpDoc');

    Route::get('/license/validate', 'Onesms\Service\Controllers\HomeController@licenseValidate');
});
