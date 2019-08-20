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
/*
admin Route
*/

Route::group(['middleware' => ['admin', 'web']], function () {

    #datatables
    Route::get('/adminpanel/users/data', 'UserController@anyData')->name('anydata');
    #main admin
    Route::get('/adminpanel', 'AdminController@index')->name('admin');
    #user
    Route::resource('/adminpanel/users', 'UserController');
    Route::put('/adminpanel/users/updatepassword/{user}', 'UserController@updatePassword')->name('Password');
    Route::get('/adminpanel/{user}/delete', 'UserController@delete')->name('delete');
    #sitesetting

    Route::get('/adminpanel/sitesetting', 'SiteSettingController@index')->name('siteSetting');
    Route::post('/adminpanel/sitesetting', 'SiteSettingController@store')->name('siteSetting.save');
    #

});




/*
user Route
*/
Route::get('/', function () {
    return view('welcome');
})->name('page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
