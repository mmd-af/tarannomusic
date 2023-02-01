<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth', 'admin'], 'namespace' => 'App\Http\Controllers\Admin\Instrument'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'instruments', 'as' => 'instruments.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'InstrumentController@index'
            ]);
            Route::get('/create', [
                'as' => 'create',
                'uses' => 'InstrumentController@create'
            ]);
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'InstrumentController@store'
            ]);
            Route::get('/{instrument}/edit', [
                'as' => 'edit',
                'uses' => 'InstrumentController@edit'
            ]);
            Route::put('{instrument}/update', [
                'as' => 'update',
                'uses' => 'InstrumentController@update'
            ]);
            Route::delete('{instrument}/destroy', [
                'as' => 'destroy',
                'uses' => 'InstrumentController@destroy'
            ]);
        });
        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'instruments-ajax', 'as' => 'instruments.ajax.'], function () {
            Route::get('/getDatatableData', [
                'as' => 'getDatatableData',
                'uses' => 'InstrumentAjaxController@getDatatableData'
            ]);
        });
    });
});
