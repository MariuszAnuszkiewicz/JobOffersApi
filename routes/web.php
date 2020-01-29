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
    return redirect('/json-api/job_offers');
});

Route::prefix('json-api')->group(function() {
    Route::get('job_offers', 'ApiJobOfferController@offersAll');
    Route::get('job_offers/{id}', 'ApiJobOfferController@offersById')->where('id', '[0-9]+');
});