<?php

Route::group(['prefix' => 'consolidator'], function(){
    
    Route::get('/', [
        'as' => 'consolidator-index',
        'uses' => 'Data\ConsolidatorController@index'
    ]);
    
});




