<?php

// Route::get('timezones2/{timezone}', 'laravelcrud\crudfolder\CrudController@index');

Route::get('create', 'laravelcrud\crudfolder\CrudController@create');
Route::get('modify/{product_id}', 'laravelcrud\crudfolder\CrudController@modify');
Route::get('productlist', 'laravelcrud\crudfolder\CrudController@productlist');
