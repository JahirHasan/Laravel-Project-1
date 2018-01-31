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
use App\User;
use App\Role;

Route::get('/', function () {

    return view('welcome');

});

Route::name('admin')->get('/admin', function () {

    return view('Admin.index');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'],function (){

    Route::resource('admin/users','AdminUsersController');
    Route::resource('admin/posts','AdminPostsController');

});


