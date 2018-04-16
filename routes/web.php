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

Route::get('/musicworld','songInTrack@getIndex');
Route::get('/musicworld/{nameGenre}','orderByGenre@getIndex');
Route::get('musicworld/listen/{nameSong}-{idSong}','listenAudio@getIndex');
Route::get('/uploadMusic',function(){
    return view('musicWorld.uploadMusic');
});

//Auth::routes();

Route::get('/home', 'HomeController@in
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/playlist', 'PlaylistController@get')->name('playlist');

Route::post('/playlist', 'PlaylistController@create')->name('playlist');

Route::delete('/playlist/{id}', 'PlaylistController@delete')->name('playlist');

Route::post('list_track/{playlist_id}/track_id/{track_id}/', 'PlaylistController@insertTracktoList')->name('listtrack');

Route::delete('list_track/{playlist_id}/track_id/{track_id}/delete', 'PlaylistController@deleteTrackfromList')->name('listtrack');

Route::get('track_id/{track_id}/{time_played}/pay', 'PayController@pay')->name('pay');
