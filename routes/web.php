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

    #datatable
    Route::get('/adminpanel/users/data', 'UserController@anyData')->name('anydata');
    Route::get('/adminpanel/bu/data', 'BuController@anyData')->name('bu.anydata');
    #main admin
    Route::get('/adminpanel', 'AdminController@index')->name('admin');
    #user
    Route::resource('/adminpanel/users', 'UserController');
    Route::put('/adminpanel/users/updatepassword/{user}', 'UserController@updatePassword')->name('Password');
    Route::get('/adminpanel/{id}/delete', 'UserController@delete')->name('delete');
    #sitesetting
    Route::get('/adminpanel/sitesetting', 'SiteSettingController@index')->name('siteSetting');
    Route::post('/adminpanel/sitesetting', 'SiteSettingController@store')->name('siteSetting.save');
    #bu
    Route::resource('/adminpanel/bu', 'BuController');
    Route::put('/adminpanel/bu/updatepassword/{bu}', 'BuController@updatePassword')->name('Password.bu');
    Route::get('/adminpanel/bu/{bu}/delete', 'BuController@delete')->name('delete.bu');
});




/*
user Route
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('showallbuilding', 'BuController@showEnable')->name('allBu');
    Route::get('forRent', 'BuController@forRent')->name('forRent');
    Route::get('ownership', 'BuController@ownership')->name('ownership');
    Route::get('showByType/{type}', 'BuController@showByType')->name('showByType');
    Route::get('search', 'BuController@search')->name('search');
});


Route::get('/', function () {
    return view('welcome');
})->name('page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
