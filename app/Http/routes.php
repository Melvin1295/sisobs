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

Route::get('authors',['as'=>'person','uses'=>'AuthorController@index']);
Route::get('authors/create',['as'=>'person_create','uses'=>'AuthorController@index']);
Route::get('authors/edit/{id?}', ['as' => 'person_edit', 'uses' => 'AuthorController@index']);
Route::get('authors/form-create',['as'=>'person_form_create','uses'=>'AuthorController@form_create']);
Route::get('authors/form-edit',['as'=>'person_form_edit','uses'=>'AuthorController@form_edit']);
Route::get('api/authors/all',['as'=>'person_all', 'uses'=>'AuthorController@all']);
Route::get('api/authors/paginate/',['as' => 'person_paginate', 'uses' => 'AuthorController@paginatep']);
Route::post('api/authors/create',['as'=>'person_create', 'uses'=>'AuthorController@create']);
Route::put('api/authors/edit',['as'=>'person_edit', 'uses'=>'AuthorController@edit']);
Route::post('api/authors/destroy',['as'=>'person_destroy', 'uses'=>'AuthorController@destroy']);
Route::get('api/authors/search/{q?}',['as'=>'person_search', 'uses'=>'AuthorController@search']);
Route::get('api/authors/find/{id}',['as'=>'person_find', 'uses'=>'AuthorController@find']);
Route::get('api/authorsdata/search/{q?}',['as'=>'person_search', 'uses'=>'AuthorController@searchall']);

/* incio rutas de pagina web */
Route::get('pages',['as'=>'person','uses'=>'PageController@index']);
Route::get('pages/blog',['as'=>'person','uses'=>'PageController@index']);
Route::get('pages/form-blog',['as'=>'person','uses'=>'PageController@form_blog']);
Route::get('pages/publisherItem/{id?}',['as'=>'person','uses'=>'PageController@index']);
Route::get('pages/form-publisherItem',['as'=>'person','uses'=>'PageController@form_publisherItem']);
Route::get('pages/contact',['as'=>'person','uses'=>'PageController@index']);
Route::get('pages/form-contact',['as'=>'person','uses'=>'PageController@form_contact']);
Route::get('pages/editoriales',['as'=>'person','uses'=>'PageController@index']);
Route::get('pages/form-editorials',['as'=>'person','uses'=>'PageController@form_editorials']);
Route::get('pages/form-verEditorial',['as'=>'person','uses'=>'PageController@form_verEditorial']);
Route::get('pages/verEditorial/{id?}',['as'=>'person','uses'=>'PageController@index']);

Route::get('pages/indicadores',['as'=>'person','uses'=>'PageController@index']);
Route::get('pages/form-indicadores',['as'=>'person','uses'=>'PageController@form_indicadores']);
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

//===============================================================
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
Route::post('api/publishers/uploadFile',['as'=>'product_disabled', 'uses'=>'PublishersController@uploadFile']);

Route::get('api/publishersUltimo/search/{q?}',['as'=>'product_disabled', 'uses'=>'PublishersController@publishersUltimo']);
Route::get('api/publishers_all/search/{q?}',['as'=>'product_disabled', 'uses'=>'PublishersController@publishers_all']);
Route::get('api/publisher_id/search/{q?}',['as'=>'product_disabled', 'uses'=>'PublishersController@publisher_id']);
Route::get('api/getPublisher/get',['as'=>'product_disabled', 'uses'=>'PublishersController@getPublisher']);
//===============================================================
Route::get('editorials',['as'=>'person','uses'=>'EditorialsController@index']);
Route::get('editorials/create',['as'=>'person_create','uses'=>'EditorialsController@index']);
Route::get('editorials/edit/{id?}', ['as' => 'person_edit', 'uses' => 'EditorialsController@index']);
Route::get('editorials/form-create',['as'=>'person_form_create','uses'=>'EditorialsController@form_create']);
Route::get('editorials/form-edit',['as'=>'person_form_edit','uses'=>'EditorialsController@form_edit']);
Route::get('api/editorials/all',['as'=>'person_all', 'uses'=>'EditorialsController@all']);
Route::get('api/editorials/paginate/',['as' => 'person_paginate', 'uses' => 'EditorialsController@paginatep']);
Route::post('api/editorials/create',['as'=>'person_create', 'uses'=>'EditorialsController@create']);
Route::put('api/editorials/edit',['as'=>'person_edit', 'uses'=>'EditorialsController@edit']);
Route::post('api/editorials/destroy',['as'=>'person_destroy', 'uses'=>'EditorialsController@destroy']);
Route::get('api/editorials/search/{q?}',['as'=>'person_search', 'uses'=>'EditorialsController@search']);
Route::get('api/editorials/find/{id}',['as'=>'person_find', 'uses'=>'EditorialsController@find']);
Route::post('api/editorials/uploadFile',['as'=>'product_disabled', 'uses'=>'EditorialsController@uploadFile']);
Route::get('api/editorialsUltimo/search/{q?}',['as'=>'product_disabled', 'uses'=>'EditorialsController@editorialsUltimo']);
Route::get('api/editorials_all/search/{q?}',['as'=>'product_disabled', 'uses'=>'EditorialsController@editorials_all']);
//===============================================================
Route::get('sliders',['as'=>'person','uses'=>'SliderController@index']);
Route::get('sliders/create',['as'=>'person_create','uses'=>'SliderController@index']);
Route::get('sliders/edit/{id?}', ['as' => 'person_edit', 'uses' => 'SliderController@index']);
Route::get('sliders/form-create',['as'=>'person_form_create','uses'=>'SliderController@form_create']);
Route::get('sliders/form-edit',['as'=>'person_form_edit','uses'=>'SliderController@form_edit']);
Route::get('api/sliders/all',['as'=>'person_all', 'uses'=>'SliderController@all']);
Route::get('api/sliders/paginate/',['as' => 'person_paginate', 'uses' => 'SliderController@paginatep']);
Route::post('api/sliders/create',['as'=>'person_create', 'uses'=>'SliderController@create']);
Route::put('api/sliders/edit',['as'=>'person_edit', 'uses'=>'SliderController@edit']);
Route::post('api/sliders/destroy',['as'=>'person_destroy', 'uses'=>'SliderController@destroy']);
Route::get('api/sliders/search/{q?}',['as'=>'person_search', 'uses'=>'SliderController@search']);
Route::get('api/sliders/find/{id}',['as'=>'person_find', 'uses'=>'SliderController@find']);
Route::get('api/slidersall/paginate/',['as'=>'person_all', 'uses'=>'SliderController@slidersall']);
Route::post('api/sliders/uploadFile',['as'=>'product_disabled', 'uses'=>'SliderController@uploadFile']);

//===============================================================
Route::get('provinces',['as'=>'person','uses'=>'ProvincesController@index']);
Route::get('provinces/create',['as'=>'person_create','uses'=>'ProvincesController@index']);
Route::get('provinces/edit/{id?}', ['as' => 'person_edit', 'uses' => 'ProvincesController@index']);
Route::get('provinces/form-create',['as'=>'person_form_create','uses'=>'ProvincesController@form_create']);
Route::get('provinces/form-edit',['as'=>'person_form_edit','uses'=>'ProvincesController@form_edit']);
Route::get('api/provinces/all',['as'=>'person_all', 'uses'=>'ProvincesController@all']);
Route::get('api/provinces/paginate/',['as' => 'person_paginate', 'uses' => 'ProvincesController@paginatep']);
Route::post('api/provinces/create',['as'=>'person_create', 'uses'=>'ProvincesController@create']);
Route::put('api/provinces/edit',['as'=>'person_edit', 'uses'=>'ProvincesController@edit']);
Route::post('api/provinces/destroy',['as'=>'person_destroy', 'uses'=>'ProvincesController@destroy']);
Route::get('api/provinces/search/{q?}',['as'=>'person_search', 'uses'=>'ProvincesController@search']);
Route::get('api/provinces/find/{id}',['as'=>'person_find', 'uses'=>'ProvincesController@find']);
Route::get('api/provincesdata/search/{q?}',['as'=>'person_search', 'uses'=>'ProvincesController@searchall']);
//===============================================================
Route::get('indicators',['as'=>'person','uses'=>'IndicatorController@index']);
Route::get('indicators/create',['as'=>'person_create','uses'=>'IndicatorController@index']);
Route::get('indicators/edit/{id?}', ['as' => 'person_edit', 'uses' => 'IndicatorController@index']);
Route::get('indicators/form-create',['as'=>'person_form_create','uses'=>'IndicatorController@form_create']);
Route::get('indicators/form-edit',['as'=>'person_form_edit','uses'=>'IndicatorController@form_edit']);
Route::get('api/indicators/all',['as'=>'person_all', 'uses'=>'IndicatorController@all']);
Route::get('api/indicators/paginate/',['as' => 'person_paginate', 'uses' => 'IndicatorController@paginatep']);
Route::post('api/indicators/create',['as'=>'person_create', 'uses'=>'IndicatorController@create']);
Route::put('api/indicators/edit',['as'=>'person_edit', 'uses'=>'IndicatorController@edit']);
Route::post('api/indicators/destroy',['as'=>'person_destroy', 'uses'=>'IndicatorController@destroy']);
Route::get('api/indicators/search/{q?}',['as'=>'person_search', 'uses'=>'IndicatorController@search']);
Route::get('api/indicators/find/{id}',['as'=>'person_find', 'uses'=>'IndicatorController@find']);
Route::post('api/indicators/uploadFile',['as'=>'product_disabled', 'uses'=>'IndicatorController@uploadFile']);
Route::get('api/indicatorsUltimo/search/{q?}',['as'=>'product_disabled', 'uses'=>'IndicatorController@indicatorsUltimo']);
Route::get('api/indicators_all/search/{q?}',['as'=>'product_disabled', 'uses'=>'IndicatorController@indicators_all']);
//===============================================================
Route::get('menus',['as'=>'person','uses'=>'MenuController@index']);
Route::get('menus/create',['as'=>'person_create','uses'=>'MenuController@index']);
Route::get('menus/edit/{id?}', ['as' => 'person_edit', 'uses' => 'MenuController@index']);
Route::get('menus/form-create',['as'=>'person_form_create','uses'=>'MenuController@form_create']);
Route::get('menus/form-edit',['as'=>'person_form_edit','uses'=>'MenuController@form_edit']);
Route::get('api/menus/all',['as'=>'person_all', 'uses'=>'MenuController@all']);
Route::get('api/menus/paginate/',['as' => 'person_paginate', 'uses' => 'MenuController@paginatep']);
Route::post('api/menus/create',['as'=>'person_create', 'uses'=>'MenuController@create']);
Route::put('api/menus/edit',['as'=>'person_edit', 'uses'=>'MenuController@edit']);
Route::post('api/menus/destroy',['as'=>'person_destroy', 'uses'=>'MenuController@destroy']);
Route::get('api/menus/search/{q?}',['as'=>'person_search', 'uses'=>'MenuController@search']);
Route::get('api/menus/find/{id}',['as'=>'person_find', 'uses'=>'MenuController@find']);
//===============================================================
Route::get('colaboradores',['as'=>'person','uses'=>'ColaboradorController@index']);
Route::get('colaboradores/create',['as'=>'person_create','uses'=>'ColaboradorController@index']);
Route::get('colaboradores/edit/{id?}', ['as' => 'person_edit', 'uses' => 'ColaboradorController@index']);
Route::get('colaboradores/form-create',['as'=>'person_form_create','uses'=>'ColaboradorController@form_create']);
Route::get('colaboradores/form-edit',['as'=>'person_form_edit','uses'=>'ColaboradorController@form_edit']);
Route::get('api/colaboradores/all',['as'=>'person_all', 'uses'=>'ColaboradorController@all']);
Route::get('api/colaboradores/paginate/',['as' => 'person_paginate', 'uses' => 'ColaboradorController@paginatep']);
Route::post('api/colaboradores/create',['as'=>'person_create', 'uses'=>'ColaboradorController@create']);
Route::put('api/colaboradores/edit',['as'=>'person_edit', 'uses'=>'ColaboradorController@edit']);
Route::post('api/colaboradores/destroy',['as'=>'person_destroy', 'uses'=>'ColaboradorController@destroy']);
Route::get('api/colaboradores/search/{q?}',['as'=>'person_search', 'uses'=>'ColaboradorController@search']);
Route::get('api/colaboradores/find/{id}',['as'=>'person_find', 'uses'=>'ColaboradorController@find']);

Route::post('api/colaboradores/uploadFile',['as'=>'product_disabled', 'uses'=>'ColaboradorController@uploadFile']);

//===============================================================
Route::get('api/roles_all/search/{q?}',['as'=>'product_disabled', 'uses'=>'RolController@roles_all']);




