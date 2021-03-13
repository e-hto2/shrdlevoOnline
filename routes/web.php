<?php

use Illuminate\Support\Facades\Route;

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

//Frontend Route
Route::group(['namespace' => 'frontend'], function (){
    Route::get('/','IntroduceController@index')->name('introduce');
    Route::get('/index','ConseptController@index') -> name('consept');
    Route::get('/experiment1','Experiment1Controller@index')->name('experiment1');
    Route::get('/experiment2','Experiment2Controller@index')->name('experiment2');
    Route::get('/survey','SurveyController@index')->name('survey');
    Route::get('/summary','SummaryController@index')->name('summary');
    Route::get('/done','DoneController@index')->name('done');
    Route::post('/add_user_data','SurveyController@add_user_data')->name('add_user_data');

});
//Frontend Route end



Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => ['admin'], 'namespace' => 'Admin'], function () {
    Route::resource('game_dash','GameDashController');
    Route::post('/download_json','GameDashController@download_json')->name('download_json');
    Route::post('/view_personal_information','GameDashController@view_personal_information')->name('view_personal_information');

});
