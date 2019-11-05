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
    return view('page.index');
});
Route::resource('events-categories', 'Admin\EoDetailCategoryController');

Route::resource('events', 'Events\EventsController');

Route::resource('tenants', 'Tenants\TenantController');

Route::resource('products', 'Tenants\ProductsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
