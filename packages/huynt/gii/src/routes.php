<?php
/**
 * Created by PhpStorm.
 * User: huyjuku
 * Date: 4/28/2018
 * Time: 10:03 PM
 */

Route::group(['prefix' => 'gii'], function () {
	Route::get('/', 'huynt\gii\controllers\GiiController@index');
	Route::get('generate-model', 'huynt\gii\controllers\GiiController@generateModels');
});