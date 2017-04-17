<?php

Route::group(['namespace' => 'CoderStudios'], function() {
    Route::get('/laravel-package', ['as' => 'lp', 'uses' => 'LPController@lp']);
});