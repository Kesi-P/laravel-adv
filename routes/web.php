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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Auth::routes();

Route::get('/forum',[
  'uses' => 'ForumsController@index',
  'as'=>'forum'
]);

Route::get('{provider}/auth',[
  'uses' => 'SocialsController@auth',
  'as' => 'social.auth'
]);
Route::get('{provider}/redirect',[
  'uses' => 'SocialsController@auth_callback',
  'as' => 'social.callback'
]);

Route::group(['middleware'=>'auth'], function(){
  Route::resource('channel','ChannelsController');

  Route::get('discuss/create' ,[
    'uses' => 'DiscussionsController@create',
    'as' => 'discussions.create'
  ]);

  Route::post('discuss/store' ,[
    'uses' => 'DiscussionsController@store',
    'as' => 'discussions.store'
  ]);

  Route::get('discussion/{slug}' ,[
    'uses' => 'DiscussionsController@show',
    'as'=>'discussion'
  ]);

  Route::post('discussion/reply/{id}',[
    'uses' =>'DiscussionsController@reply',
    'as'=>'discussion.reply'
  ]);

});
