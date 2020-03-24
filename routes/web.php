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
    return redirect('/sequences');
});




Route::get('/defi2', 'Defi2Controller@index');

Route::get('/distance', 'DistanceController@index');
Route::get('/generate', 'PeopleGenerationController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('sequences', 'SequencesController');
Route::post('/sequences/{sequence}/infos', 'SequencesController@addInfo');

Route::resource('sequences.seances', 'SeancesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
