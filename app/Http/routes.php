<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function(){
    
    Route::group(['middleware' => 'auth'], function(){
        
        Route::get('/', [
            'as' => 'index',
            'uses' => 'DashboardController@index'
        ]);

        // Logout Routes
        Route::get('/logout', [
            'as' => 'logout',
            'uses' => 'Auth\AuthController@logout'
        ]);
        
        // Data Routes
        require_once 'Routes/RoutesData.php';
        
    });
    
    Route::group(['middleware' => 'guest'], function(){
        
        // Login Routes
        Route::get('/login', [
            'as' => 'login',
            'uses' => 'Auth\AuthController@getLogin'
        ]);
        Route::post('/signin', [
            'as' => 'signin',
            'uses' => 'Auth\AuthController@postLogin'
        ]);
    });


});
