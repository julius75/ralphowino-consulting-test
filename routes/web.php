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
Route::get('/check/{id}', function ($id) {
    return \App\User::find($id);
});

Auth::routes();

//Route::get('/check_relationship_status/{id}', 'FriendshipController@check');


//Route::get('/check/{id}', function ($id) {
//    return App\User::find($id);
//});

//Route::get('/', function () {
//    $user->befriend($recipient);
//});


Route::get('/home', 'HomeController@index')->name('home');


// assign many middleware to a route at once:
Route::group(['middleware' => ['web', 'auth']], function () {

    //these pages are only for loged in users
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/profile/{slug}', 'ProfileController@index');

    //user photo page
    Route::get('/changePhoto', function () {
        return view('profile.edit');
    });

//picture update route
    Route::post('/editPic', 'ProfileController@editPic');


//    Route::get('check/{id}', 'FriendsController@check');

});

Route::get('/logout', 'LoginController@logout')->middleware('auth');
//
////try friendship
//Route::get('/hello', function () {
//    return Auth::user()->hello();
//});