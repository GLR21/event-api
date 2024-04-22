<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
    Route::get('/events', 'EventApiController@index');
    Route::get('/events/{id}', 'EventApiController@show');
});



?>
