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
    return view('home');
})->name('home');

Route::get('/dummys', "DummysController@listDummys")->name('listDummys');
Route::get('/dummys/detail/{id}', "DummysController@detail")->name('dummys/detail');
Route::get('/dummys/insert', "DummysController@insertView")->name('dummys/insertView');
Route::post('/dummys/insert', "DummysController@insert")->name('dummys/insert');
Route::get('/dummys/edit/{id}', "DummysController@editView")->name('dummys/editView');
Route::put('/dummys/edit/{id}', "DummysController@edit")->name('dummys/edit'); 
Route::delete('/dummys/delete/{id}', "DummysController@delete")->name('dummys/delete'); 

Route::get('/customers', "Customz\CustomersController@list")->name('customers');
Route::post('/customers', "Customz\CustomersController@insert");

Route::get('/contacts', "ContactController@getIndex")->name('contactGetIndex');
Route::get('/contacts/details/{id?}', "ContactController@getDetails")->name('contactGetDetails');
Route::get('/contacts/list/', "ContactController@getListPage")->name('contactGetList');
Route::post('/contacts/store', "ContactController@postStore")->name('contactPostStore');
Route::post('/contacts/update', "ContactController@postUpdate")->name('contactPostUpdate');
Route::post('/contacts/delete', "ContactController@postDelete")->name('contactPostDelete');

Route::resource('profiles', "ProfileController");

