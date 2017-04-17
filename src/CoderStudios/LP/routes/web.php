<?php

Route::group(['namespace' => 'CoderStudios\LP\Http\Controllers'], function(){
    Route::get('/laravel-package', ['as' => 'lp', 'uses' => 'LPController@lp']);
});