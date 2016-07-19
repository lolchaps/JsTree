<?php

Route::get('tree', [
    'uses' => 'TreeController@index',
]);

Route::get('tree/data', [
    'as' => 'tree.data',
    'uses' => 'TreeController@data',
]);
