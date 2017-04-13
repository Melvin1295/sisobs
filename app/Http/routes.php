<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

\Debugbar::disable();

Route::get('/', 'Layout\LayoutController@index');

Route::get('/login', function () {
    return view('login');
});
 
Route::get('/test', function() {
    event(new \Salesfly\Events\SomeEvent());
    return 'event fired';
});

Route::get('/vista-redis', function() {
   return view('test');
});

Route::get('status', function(){
    return response('holi', 422)
        ->header('Content-Type', 'text/html; charset=UTF-8');
});
Route::get('/factura/{id}', 'SalesController@factura1');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::group(['middleware' => 'role'], function () {
Route::get('users/create',['as'=>'user_create','uses'=>'Auth\AuthController@indexU']);
Route::get('users/form-create',['as'=>'user_form_create','uses'=>'Auth\AuthController@form_create']);
Route::post('api/users/create',['as'=>'user_create', 'uses'=>'UserController2@create']);
Route::post('api/users/destroy',['as'=>'person_destroy', 'uses'=>'UserController2@destroy']);
});
Route::get('users/edit/{id?}', ['as' => 'user_edit', 'uses' => 'Auth\AuthController@indexU']);
Route::get('users/form-edit',['as' => 'user_form_edit','uses' => 'Auth\AuthController@form_edit']);
Route::get('users',['as'=>'user','uses'=>'Auth\AuthController@indexU']);
Route::get('api/users/all',['as'=>'user_all', 'uses'=>'Auth\AuthController@all']);
Route::get('api/users/paginate/',['as' => 'user_paginate', 'uses' => 'Auth\AuthController@paginate']);
Route::put('api/users/edit',['as'=>'user_edit', 'uses'=>'UserController2@edit']);
Route::put('api/editPasword/edit',['as'=>'user_edit', 'uses'=>'UserController2@editpassword']);
Route::get('api/users/search/{q?}',['as'=>'user_search', 'uses'=>'Auth\AuthController@search']);
Route::get('api/users/find/{id}',['as'=>'user_find', 'uses'=>'Auth\AuthController@find']);
Route::get('api/users/stores',['as' => 'user_stores_select','uses' => 'Auth\AuthController@store_select']);

Route::get('employees',['as'=>'person','uses'=>'EmployeesController@index']);
Route::get('employees/create',['as'=>'person_create','uses'=>'EmployeesController@index']);
Route::get('employees/edit/{id?}', ['as' => 'person_edit', 'uses' => 'EmployeesController@index']);
Route::get('employees/form-create',['as'=>'person_form_create','uses'=>'EmployeesController@form_create']);
Route::get('employees/form-edit',['as'=>'person_form_edit','uses'=>'EmployeesController@form_edit']);
Route::get('api/employees/all',['as'=>'person_all', 'uses'=>'EmployeesController@all']);
Route::get('api/employees/paginate/',['as' => 'person_paginate', 'uses' => 'EmployeesController@paginatep']);
Route::post('api/employees/create',['as'=>'person_create', 'uses'=>'EmployeesController@create']);
Route::put('api/employees/edit',['as'=>'person_edit', 'uses'=>'EmployeesController@edit']);
Route::post('api/employees/destroy',['as'=>'person_destroy', 'uses'=>'EmployeesController@destroy']);
Route::get('api/employees/search/{q?}',['as'=>'person_search', 'uses'=>'EmployeesController@search']);
Route::get('api/employees/find/{id}',['as'=>'person_find', 'uses'=>'EmployeesController@find']);
Route::get('api/employeesVenta/search/{q?}',['as'=>'person_search', 'uses'=>'EmployeesController@searchVenta']);

/* incio rutas de pagina web */
Route::get('pages',['as'=>'person','uses'=>'PageController@index']);
/* fin rutas de pagina web */

Route::group(['middleware' => 'role'], function () {
Route::get('stores',['as'=>'store','uses'=>'StoresController@index']);
Route::get('stores/create',['as'=>'store_create','uses'=>'StoresController@index']);
Route::get('stores/edit/{id?}', ['as' => 'store_edit', 'uses' => 'StoresController@index']);
Route::get('stores/form-create',['as'=>'store_form_create','uses'=>'StoresController@form_create']);
Route::get('stores/form-edit',['as'=>'store_form_edit','uses'=>'StoresController@form_edit']);
Route::get('api/stores/all',['as'=>'store_all', 'uses'=>'StoresController@all']);
Route::get('api/stores/paginate/',['as' => 'store_paginate', 'uses' => 'StoresController@paginatep']);
Route::post('api/stores/create',['as'=>'store_create', 'uses'=>'StoresController@create']);
Route::put('api/stores/edit',['as'=>'store_edit', 'uses'=>'StoresController@edit']);
Route::post('api/stores/destroy',['as'=>'store_destroy', 'uses'=>'StoresController@destroy']);
Route::get('api/stores/search/{q?}',['as'=>'store_search', 'uses'=>'StoresController@search']);
Route::get('api/storeReport/search/{q?}',['as'=>'store_search', 'uses'=>'StoresController@searchReport']);

Route::get('api/stores/find/{id}',['as'=>'store_find', 'uses'=>'StoresController@find']);
Route::get('api/stores/select','StoresController@selectStores');
});


Route::get('publishers',['as'=>'person','uses'=>'PublishersController@index']);
Route::get('publishers/create',['as'=>'person_create','uses'=>'PublishersController@index']);
Route::get('publishers/edit/{id?}', ['as' => 'person_edit', 'uses' => 'PublishersController@index']);
Route::get('publishers/form-create',['as'=>'person_form_create','uses'=>'PublishersController@form_create']);
Route::get('publishers/form-edit',['as'=>'person_form_edit','uses'=>'PublishersController@form_edit']);
Route::get('api/publishers/all',['as'=>'person_all', 'uses'=>'PublishersController@all']);
Route::get('api/publishers/paginate/',['as' => 'person_paginate', 'uses' => 'PublishersController@paginatep']);
Route::post('api/publishers/create',['as'=>'person_create', 'uses'=>'PublishersController@create']);
Route::put('api/publishers/edit',['as'=>'person_edit', 'uses'=>'PublishersController@edit']);
Route::post('api/publishers/destroy',['as'=>'person_destroy', 'uses'=>'PublishersController@destroy']);
Route::get('api/publishers/search/{q?}',['as'=>'person_search', 'uses'=>'PublishersController@search']);
Route::get('api/publishers/find/{id}',['as'=>'person_find', 'uses'=>'PublishersController@find']);
Route::get('api/employeesVenta/search/{q?}',['as'=>'person_search', 'uses'=>'PublishersController@searchVenta']);





