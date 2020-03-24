<?php

use Illuminate\Support\Facades\Route;

use App\User;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function(){
    return view('home');
});

Route::get('/trangchu', function(){
    return view('layouts.index');
});

Route::group(['middleware' => 'admin'], function(){
    Route::resource('admin/role', 'AdminRoleController');
    Route::resource('admin/user', 'AdminUserController');
    Route::resource('admin/product', 'AdminProductController');
    Route::resource('admin/category', 'AdminCategoryController');
});
