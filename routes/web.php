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

Route::pattern('id','[0-9]*');
Route::pattern('cid','[0-9]*');
Route::pattern('slug','(.*)');
Route::namespace('Cland')->group(function(){
	Route::get('/',[
	    'uses' => 'IndexController@index',
	    'as' => 'cland.index.index'
	]);

	Route::get('/tin-tuc',[
	    'uses' => 'NewsController@index',
	    'as' => 'cland.news.index'
	]);

	Route::get('/tin-tuc/{slug}-{cid}',[
	    'uses' => 'NewsController@cat',
	    'as' => 'cland.news.cat'
	]);

	Route::get('/{slug}-{id}.html',[
	    'uses' => 'NewsController@detail',
	    'as' => 'cland.news.detail'
	]);

	Route::get('/lien-he',[
	    'uses' => 'ContactController@index',
	    'as' => 'cland.contact.index'
	]);

	Route::get('/single',[
	    'uses' => 'SingleController@index',
	    'as' => 'cland.single.index'
	]);

});