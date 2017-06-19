<?php

Route::get('/', [
	'as' => 'index',
	'uses' => 'SceneController@index'
]);