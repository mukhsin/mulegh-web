<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@get');

// Route::get('/migrate/botol', 'MigrateController@botol');
// Route::get('/migrate/variant', 'MigrateController@variant');
// Route::get('/migrate/customer', 'MigrateController@customer');
// Route::get('/migrate/stock', 'MigrateController@stock');
// Route::get('/migrate/sale', 'MigrateController@sale');
// Route::get('/migrate/stock/optimize', 'MigrateController@optimizeStock');
// Route::get('/migrate/sale/optimize', 'MigrateController@optimizeSale');

// Auth::routes();

Route::get('/login', 'AuthController@getLogin')->name('login');
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@getLogout');
Route::post('/logout', 'AuthController@postLogout');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    // Route untuk tabel sales
    Route::get('/sale', 'SaleController@index');
    Route::get('/sale/new', 'SaleController@create');
    Route::post('/sale/new', 'SaleController@store');
    Route::get('/sale/search/{query}', 'SaleController@search');
    Route::get('/sale/{id}', 'SaleController@show');
    Route::get('/sale/{id}/edit', 'SaleController@edit');
    Route::put('/sale/{id}/edit', 'SaleController@update');
    Route::delete('/sale/{id}/delete', 'SaleController@destroy');

    // Route untuk tabel customers
    Route::get('/customer', 'CustomerController@index');
    Route::get('/customer/new', 'CustomerController@create');
    Route::post('/customer/new', 'CustomerController@store');
    Route::get('/customer/search/{query}', 'CustomerController@search');
    Route::get('/customer/{id}', 'CustomerController@show');
    Route::get('/customer/{id}/edit', 'CustomerController@edit');
    Route::put('/customer/{id}/edit', 'CustomerController@update');
    Route::delete('/customer/{id}/delete', 'CustomerController@destroy');

    // Route untuk tabel variants
    Route::get('/variant', 'VariantController@index');
    Route::get('/variant/new', 'VariantController@create');
    Route::post('/variant/new', 'VariantController@store');
    Route::get('/variant/search/{query}', 'VariantController@search');
    Route::get('/variant/{id}', 'VariantController@show');
    Route::get('/variant/{id}/edit', 'VariantController@edit');
    Route::put('/variant/{id}/edit', 'VariantController@update');
    Route::delete('/variant/{id}/delete', 'VariantController@destroy');

    Route::get('/variant/{idvariant}/stock', 'VariantStockController@index');
    Route::get('/variant/{idvariant}/stock/new', 'VariantStockController@create');
    Route::post('/variant/{idvariant}/stock/new', 'VariantStockController@store');
    // Route::get('/variant/{idvariant}/stock/search/{query}', 'VariantStockController@search');
    // Route::get('/variant/{idvariant}/stock/{idstock}', 'VariantStockController@show');
    // Route::get('/variant/{idvariant}/stock/{idstock}/edit', 'VariantStockController@edit');
    // Route::put('/variant/{idvariant}/stock/{idstock}/edit', 'VariantStockController@update');
    // Route::delete('/variant/{idvariant}/stock/{idstock}/delete', 'VariantStockController@destroy');

    // Route untuk tabel botols
    Route::get('/botol', 'BotolController@index');
    Route::get('/botol/new', 'BotolController@create');
    Route::post('/botol/new', 'BotolController@store');
    Route::get('/botol/search/{query}', 'BotolController@search');
    Route::get('/botol/{id}', 'BotolController@show');
    Route::get('/botol/{id}/edit', 'BotolController@edit');
    Route::put('/botol/{id}/edit', 'BotolController@update');
    Route::delete('/botol/{id}/delete', 'BotolController@destroy');

    Route::get('/botol/{idbotol}/stock', 'BotolStockController@index');
    Route::get('/botol/{idbotol}/stock/new', 'BotolStockController@create');
    Route::post('/botol/{idbotol}/stock/new', 'BotolStockController@store');
    // Route::get('/botol/{idbotol}/stock/search/{query}', 'BotolStockController@search');
    // Route::get('/botol/{idbotol}/stock/{idstock}', 'BotolStockController@show');
    // Route::get('/botol/{idbotol}/stock/{idstock}/edit', 'BotolStockController@edit');
    // Route::put('/botol/{idbotol}/stock/{idstock}/edit', 'BotolStockController@update');
    // Route::delete('/botol/{idbotol}/stock/{idstock}/delete', 'BotolStockController@destroy');
});
