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
    Route::get('/adminpanel/contact/data', 'ContactController@anyData')->name('contact.anydata');
    #main admin
    Route::get('/adminpanel', 'AdminController@index')->name('admin');
    #user
    Route::resource('/adminpanel/users', 'UserController');
    Route::put('/adminpanel/users/updatepassword/{user}', 'UserController@updatePassword')->name('Password');
    Route::get('/adminpanel/{id}/delete', 'UserController@delete')->name('delete');
    #sitesetting
    Route::get('/adminpanel/sitesetting', 'SiteSettingController@index')->name('siteSetting');
    Route::post('/adminpanel/sitesetting', 'SiteSettingController@store')->name('siteSetting.save');
    Route::get('/adminpanel/bus/{bu}/{status}', 'BuController@activeBu')->name('active.bu');
    #bu
    Route::resource('/adminpanel/bu', 'BuController', ['except' => ['index', 'show']]);
    Route::get('/adminpanel/bu/{id?}', 'BuController@index')->name('buindex');
    Route::put('/adminpanel/bu/updatepassword/{bu}', 'BuController@updatePassword')->name('Password.bu');
    Route::get('/adminpanel/bu/{bu}/delete', 'BuController@delete')->name('delete.bu');

    Route::get('/adminpanel/contact/{contact}/delete', 'ContactController@delete')->name('contact.delete');
    Route::get('/adminpanel/contact', 'ContactController@index')->name('contact.index');
    Route::get('/adminpanel/{contact}/showmessage', 'ContactController@show')->name('show');
});




/*
user Route
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('page');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});





Route::get('showallbuilding', 'BuController@showEnable')->name('allBu');
Route::get('forRent', 'BuController@forRent')->name('forRent');
Route::get('ownership', 'BuController@ownership')->name('ownership');
Route::get('showByType/{type}', 'BuController@showByType')->name('showByType');
Route::get('search', 'BuController@search')->name('search');
Route::get('singleshow/{bu}', 'BuController@singleshow')->name('singleshow');
Route::get('/ajax/bu/information', 'BuController@ajexInfo');
Route::get('/contact_us', 'ContactController@contact')->name('contact_us');
Route::post('/contact_us', 'ContactController@store')->name('contact.store');
Route::get('/addbu', 'BuController@addbu')->name('add.bu');
Route::post('/addbu', 'BuController@add')->name('add');
Route::get('/addbu/done', 'BuController@done')->name('done');
Route::get('/userBuildings', 'BuController@userBuildings')->name('user.buildings')->middleware('auth');
Route::get('/edituser', 'BuController@editUser')->name('edit.user')->middleware('auth');
Route::put('/edituser/{user}', 'BuController@updateUser')->name('update.user')->middleware('auth');
Route::put('/adminpanel/users/updatepassword/{user}', 'BuController@updatePassword')->name('Password.user')->middleware('auth');
