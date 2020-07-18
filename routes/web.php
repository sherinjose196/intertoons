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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'guest'], function () {

    Route::post('user/auth', ['as' => 'AdminAuthManage', 'uses' => 'SettingsController@authManage']);
    Route::get('admin_login', ['as' => 'AdminLogin', 'uses' => 'SettingsController@getView']);



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('profile', ['as' => 'Profile', 'uses' => 'SettingsController@getView']);
    Route::get('password', ['as' => 'Password', 'uses' => 'SettingsController@getView']);
    Route::get('logout', ['as' => 'AdminLogout', 'uses' => 'SettingsController@logout']);
    Route::get('customers', ['as' => 'Customers', 'uses' => 'SettingsController@getView']);
    Route::get('edit_customer/{token?}', ['as' => 'EditCustomer', 'uses' => 'SettingsController@getView']);

    Route::post('edit-customer', ['as' => 'editCustomer', 'uses' => 'PostController@editCustomer']);
    Route::post('delete-data', ['as' => 'deleteData', 'uses' => 'PostController@deleteData']);

    Route::post('post-profile', ['as' => 'PostProfile', 'uses' => 'PostController@postProfile']);
    Route::post('post-password', ['as' => 'PostPassword', 'uses' => 'PostController@postPassword']);


});
